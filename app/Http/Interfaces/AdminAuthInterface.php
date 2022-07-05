<?php

namespace App\Http\Interfaces;

interface  AdminAuthInterface
{
    public  function index();
    public  function login($request);
    public  function  logout($request);
}
