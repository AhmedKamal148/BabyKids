<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activity::get();

        return view('Admin.pages.activite.activities',compact('activites'));
    }
    public function create()
    {
        return view('Admin.pages.activite.CreateActivite');
    }
    public function store()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }
}
