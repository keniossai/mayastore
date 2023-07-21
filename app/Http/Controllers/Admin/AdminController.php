<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
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
        if($slug=="personal"){
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'name'     => 'required|regex:/^[\pL\s\-]+$/u',
                    'mobile' => 'required|numeric',
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
                // Update in Vendor Table
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
            $vendorDetails = Vendor::where('id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
        } else if($slug=="business"){
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'vendor_name'     => 'required|regex:/^[\pL\s\-]+$/u',
                    'company_reg__name' =>'required',
                    'shop_name' =>'required',
                    'email' =>'required',
                    'address_one' =>'required',
                    'business_entity' =>'required',
                    'identification' =>'required',
                    'address_proof' =>'required',
                    'proof_image' =>'required|image',
                    'cac_proof_image' =>'required|image',
                    'mobile' => 'required|numeric',
                    'cac_reg_number' => 'required',
                ];

                $this->validate($request,$rules);

                // Update VendorBusinessDetail image
                if($request->hasFile('proof_image')){
                    $image_tmp = $request->file('proof_image');
                    if($image_tmp->isValid()){
                        // Get Image Extension
                        $extension = $image_tmp->getClientOriginalExtension();
                        // Generate New Image Name
                        $imageName = rand(111,99999).'.'.$extension;
                        $imagePath = 'storage/images/proofs'.$imageName;
                        // Upload Image
                        Image::make($image_tmp)->save($imagePath);
                    }
                }


                // Update in vendors_business_table
                VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->update(
                    [
                        'vendor_name'=>$data['vendor_name'],
                        'company_reg__name'=>$data['company_reg__name'],
                        'shop_name'=>$data['shop_name'],
                        'email'=>$data['email'],
                        'address_one'=>$data['address_one'],
                        'country'=>$data['country'],
                        'proof_image'=>$imageName,
                        'cac_proof_image'=>$data['cac_proof_image'],
                        'cac_reg_number'=>$data['cac_reg_number'],
                        'state'=>$data['state'],
                    ]);
                return redirect()->back()->with('success','Vendor details updated successfully');
            }
            $vendorDetails = VendorsBusinessDetail::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            return view('admin.settings.vendor-business', compact('slug','vendorDetails'));
        } else if($slug=="bank"){

        }else if($slug=="shop"){

        }

        return view('admin.settings.update-vendor', compact('slug','vendorDetails'));
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

    public function my_shop()
    {
        return view('template.shop');
    }
}
