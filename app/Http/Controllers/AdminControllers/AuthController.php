<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public  function index()
  {
      return view('Admin.pages.login');
  }


    public  function login(LoginRequest $request)
    {
        $credentails  = $request->only('email','password');

        if(Auth::attempt($credentails))
        {
         return redirect(route('admin.Home'));
        }else
        {
            Alert::error('login Faild' , "Please Try Again !");
            return redirect()->back();
        }
    }



    public  function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.loginPage'));
    }
}
