<?php
namespace  App\Http\Repositories;

use App\Http\Interfaces\AdminAuthInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthRepository implements AdminAuthInterface
{
    public function index()
    {
        return view('Admin.pages.login');
    }
    public function login($request)
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
    public function logout($request)
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.loginPage'));
    }
}
