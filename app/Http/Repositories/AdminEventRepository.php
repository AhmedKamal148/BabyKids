<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AdminEventInterface;
use App\Http\Traits\ImagesTriat;

class AdminEventRepository implements AdminEventInterface
{
    use ImagesTriat;

    public function index()
    {
        return view('Admin.pages.event.events');
    }

    public function create()
    {
        return  view('Admin.pages.event.createEvent');
    }

    public function store($request)
    {
       dd($request);
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($request)
    {
        // TODO: Implement update() method.
    }

    public function delete($request)
    {
        // TODO: Implement delete() method.
    }
}
