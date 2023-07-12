<?php

namespace App\Http\Controllers\Admin;

// use toastr;
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

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');
            }else{

                toastr()->error('Email or Password is incorrect!');
                // session()->put('error','Item is successfully created.');
                return redirect()->back();

            }
        }
        return view('admin.login');
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
