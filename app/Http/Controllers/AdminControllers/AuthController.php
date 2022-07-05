<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminAuthInterface;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
     public  $adminAuthRepo;

     public function __construct(AdminAuthInterface $adminAuthRepo)
     {
         $this->adminAuthRepo = $adminAuthRepo;
     }

    public  function index()
    {
//        return view('Admin.pages.login');

     return  $this->adminAuthRepo->index();
    }

    public  function login(LoginRequest $request)
    {
        return  $this->adminAuthRepo->login($request);
    }

    public  function logout(Request $request)
    {
        return  $this->adminAuthRepo->logout($request);
    }
}
