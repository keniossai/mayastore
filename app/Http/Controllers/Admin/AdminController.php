<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
                return redirect()->back()->with('error','Invalid Email or Password is incorrect!');;

            }
        }
        return view('admin.login');
    }

    public function updateAdminPassword()
    {
        return view('admin.settings.reset-password');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
}
