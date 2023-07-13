<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
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

            }else{
                return redirect()->back()->with('error','Your current password is incorrect!');
            }
        }
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.reset-password', compact('adminDetails'));
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
