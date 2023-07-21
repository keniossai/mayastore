<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function updateProfileDetails(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // dd($request->all());

            // $this->validate($request,$rules);

            $request->validate([
                'image'=>'image|mimes:jpeg,png,jpg,|max:2048'
            ]);

            // Update admin image
            if($request->hasFile('photo')){
                $image_name = $request->file('photo');
                if($image_name->isValid()){
                     $extension = $image_name->getClientOriginalExtension();

                     $imageName = rand(111,99999).'.'.$extension;
                     $imagePath = 'storage/images/'.$imageName;

                     Image::make($image_name)->save($imagePath);
                }
            }
            // $uploadedFileUrl = $request->image->storeOnCloudinary(Admin::CLOUDINARY_FOLDER)->getFileName();






            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'name'=>$data['name'],
                'mobile'=>$data['mobile'],
                'photo'=>$data['photo']]);
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


    // Update Vendor details
    public function updateVendorDetails(Request $request, $slug)
    {
        if($slug=="personal"){
            if($request->isMethod('post')){
                $data = $request->all();

                $rules = [
                    'name'     => 'required|regex:/^[\pL\s\-]+$/u',
                    'phone' => 'required|numeric',
                ];

                // $this->validate($request,$rules);

                // Update admin image
                if($request->hasFile('photo')){
                    $image_tmp = $request->file('photo');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();

                         $imageName = rand(111,9999).'.'.$extension;
                         $imagePath = 'storage/images/vendor'.$imageName;

                         Image::make($image_tmp)->save($imagePath);
                    }
                }
                // Update in admins Table
                Admin::where('id', Auth::guard('admin')->user()->id)->update([
                    'name'=>$data['name'],
                    'mobile'=>$data['mobile'],
                    'photo'=>$data['photo'],
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
