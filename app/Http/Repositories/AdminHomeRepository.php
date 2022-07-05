<?php


namespace App\Http\Repositories;


use App\Http\Interfaces\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{
    public function index()
    {
        return view('Admin.pages.home');
    }
}
