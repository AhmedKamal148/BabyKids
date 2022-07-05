<?php
namespace  App\Http\Repositories;

use App\Http\Interfaces\AdminActivityInterface;
use App\Models\Activity;

class AdminActivityRepository implements AdminActivityInterface
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
