<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\VendorsBankDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\VendorsBusinessDetail;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            // dd($request->all());
            $data = $request->all();

            $validated = $request->validate([
                'email'=> 'required|email|max:255',
                'password'=> 'required'
            ]);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){

                // toastr()->success('Welcome back!');
                return redirect('admin/dashboard');

            }else{

                // toastr()->error('Email or Password is incorrect!');
                // Session()->put('error','Invalid Email or Password is incorrect!');
                return redirect()->back()->with('error','Invalid Email or Password is incorrect!');

            }
        }
        return view('admin.login');
    }

    // Update Admin Password
    public function updateAdminPassword(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($request->all());
            // if current password entered by admin is correct
            if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){

                if($data['confirm_password']==$data['new_password']){
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password'=>
                    bcrypt($data['new_password'])]);
                    return redirect()->back()->with('success','Password updated successfully');
                }else{
                    return redirect()->back()->with('error','Your new password does not match!');
                }
            }else{
                return redirect()->back()->with('error','Your current password is incorrect!');
            }
        }
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.reset-password', compact('adminDetails'));
    }

    // UPDATE ADMIN DETAILS
    public function updateAdminDetails(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($request->all());

            $rules = [
                'name'     => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric',
            ];

            $this->validate($request,$rules);

            $request->validate([
                'image'=>'image|mimes:jpeg,png,jpg,|max:2048'
            ]);

            // Update admin image
            if($request->hasFile('photo')){
                $image_tmp = $request->file('photo');
                if($image_tmp->isValid()){
                    // Get Image Extension
                     $extension = $image_tmp->getClientOriginalExtension();
                    // Generate New Image Name
                     $imageName = rand(111,99999).'.'.$extension;
                     $imagePath = 'storage/images/'.$imageName;
                    // Upload Image
                     Image::make($image_tmp)->save($imagePath);
                }
            }
            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'name'=>$data['name'],
                'mobile'=>$data['mobile'],
                'photo'=>$imageName]);
            return redirect()->back()->with('success','Admin details updated successfully');
        }
        return view('admin.settings.reset-password');
    }

    // Check if admin password is correct
    public function checkAdminPassword(Request $request) {
        $data = $request->all();

        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            return "true";
        }else{
            return "false";
        };
    }


    // UPDATE VENDOR DETAILS
    public function updateVendorDetails(Request $request, $slug)
    {
        // Vendor Personal Details Update
        if($slug=="personal"){
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'name'     => 'required|regex:/^[\pL\s\-]+$/u',
                    'mobile' => 'required|numeric',
                    'photo' => 'required|image'
                ];

                $this->validate($request,$rules);

                // Update Vendor image
                if($request->hasFile('photo')){
                    $image_tmp = $request->file('photo');
                    if($image_tmp->isValid()){
                        // Get Image Extension
                        $extension = $image_tmp->getClientOriginalExtension();
                        // Generate New Image Name
                        $imageName = rand(111,99999).'.'.$extension;
                        $imagePath = 'storage/images/'.$imageName;
                        // Upload Image
                        Image::make($image_tmp)->save($imagePath);
                    }
                }
                // Update in Admin Table
                Admin::where('id', Auth::guard('admin')->user()->id)->update([
                    'name'=>$data['name'],
                    'mobile'=>$data['mobile'],
                    'photo'=>$imageName
                ]);

                // Update in vendors table
                Vendor::where('id', Auth::guard('admin')->user()->vendor_id)->update(
                    [
                        'name'=>$data['name'],
                        'mobile'=>$data['mobile'],
                        'address'=>$data['address'],
                        'city'=>$data['city'],
                        'country'=>$data['country'],
                        'zipcode'=>$data['zipcode'],
                        'state'=>$data['state'],
                    ]);
                return redirect()->back()->with('success','Vendor details updated successfully');
            }
            $countries = Country::where('status',1)->get()->toArray();
            $vendorDetails = Vendor::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('admin.settings.update-vendor', compact('slug','vendorDetails','countries'));
        }else if($slug=="business"){
            // Vendor Business Details Update
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'company_name' =>'required',
                    'shop_name' =>'required',
                    'address_one' =>'required',
                    'means_id' =>'required',
                    'means_id_proof' =>'required|image',
                    'phone_no' => 'required|numeric',
                    'license_id' => 'required',
                ];

                $this->validate($request,$rules);

                // Update VendorBusinessDetail image
                if($request->hasFile('means_id_proof')){
                    $image_tmp = $request->file('means_id_proof');
                    if($image_tmp->isValid()){
                        // Get Image Extension
                        $extension = $image_tmp->getClientOriginalExtension();
                        // Generate New Image Name
                        $imageName = rand(111,99999).'.'.$extension;
                        $imagePath = 'storage/images/proof/'.$imageName;
                        // Upload Image
                        Image::make($image_tmp)->save($imagePath);
                    }
                }

                // Update in vendors_business_table
                VendorsBusinessDetail::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->update(
                    [
                        'company_name'=>$data['company_name'],
                        'shop_name'=>$data['shop_name'],
                        'business_email'=>$data['business_email'],
                        'address_one'=>$data['address_one'],
                        'address_two'=>$data['address_two'],
                        'phone_no'=>$data['phone_no'],
                        'state'=>$data['state'],
                        'city'=>$data['city'],
                        'country'=>$data['country'],
                        'means_id'=>$data['means_id'],
                        'means_id_proof'=>$imageName,
                        'postal_code'=>$data['postal_code'],
                        'legal_rep'=>$data['legal_rep'],
                        'legal_address'=>$data['legal_address'],
                        'license_id'=>$data['license_id'],
                        'license_proof'=>$imageName,
                        'manager_name'=>$data['manager_name'],
                        'manager_phone'=>$data['manager_phone'],
                    ]);
                return redirect()->back()->with('success','Business details updated successfully');
            }
            $vendorDetails = VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            $countries = Country::where('status',1)->get()->toArray();
            return view('admin.settings.update-vendor', compact('slug','vendorDetails','countries'));
        }elseif($slug=="bank"){
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'account_holder_name' =>'required',
                    'bank_name' =>'required',
                    'account_number' =>'required',
                ];

                $this->validate($request,$rules);

                // Update in vendors_business_table
                VendorsBankDetail::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->update(
                    [
                        'account_holder_name'=>$data['account_holder_name'],
                        'bank_name'=>$data['bank_name'],
                        'account_number'=>$data['account_number'],
                    ]);
                return redirect()->back()->with('success','Bank details updated successfully');
            }
            $vendorDetails = VendorsBankDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('admin.settings.update-vendor', compact('slug','vendorDetails'));
        }elseif($slug=="shop"){
            $vendorDetails = VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('admin.settings.update-vendor', compact('slug','vendorDetails'));
        }


    }

    public function admins($type=null)
    {
        $admins = Admin::query();
        if(!empty($type)){
            $admins = $admins->where('type',$type);
            $title = ucfirst($type)."s";
        }else{
            $title = "All Admins/Subadmins/Vendors";
        }
        $admins = $admins->get()->toArray();
        // dd($admins);
        return view('admin.admins.index', compact('admins', 'title'));
    }

    public function viewVendorDetails($id)
    {
        $vendorDetails = Admin::with('vendorPersonal','vendorBusiness','vendorBank')->where('id', $id)->first();
        $vendorDetails = json_decode(json_encode($vendorDetails), true);
        // dd($vendorDetails);
        return view('admin.admins.show', compact('vendorDetails'));
    }

    public function updateAdminStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Admin::where('id', $data['admin_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'admin_id'=>$data['admin_id']]);
        }
    }

    public function register()
    {
        return view('admin.register');
    }

    // Logout Route
    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }

}
