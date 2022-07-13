<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\UserHomeInterface;
use App\Models\Activity;
use App\Models\Slider;

class UserHomeRepository implements UserHomeInterface
{

    public function index()
    {
        $sliders = $this->slider();
        $activities = $this->activities();
        return view('User.pages.home' , compact( 'sliders','activities'));
    }

    public function slider()
    {
       return $slider = Slider::all();
    }

    public function activities()
    {
        return $activities = Activity::all();
    }

    public function courses()
    {
        // TODO: Implement courses() method.
    }
}
