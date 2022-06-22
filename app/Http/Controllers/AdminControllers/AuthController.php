<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public  function index()
  {
      return view('Admin.pages.login');
  }
    public  function login(Request $request)
    {
        dd($request);
    }
}
