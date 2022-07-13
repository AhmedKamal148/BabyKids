<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AdminLocationInterface;
use App\Models\Location;
use RealRashid\SweetAlert\Facades\Alert;


class AdminLocationRepository implements  AdminLocationInterface
{

    public function index()
    {
        $locations = Location::all();
        return view('Admin.pages.location.locations' , compact('locations'));
    }

    public function create()
    {
       return view('Admin.pages.location.createLocation');
    }

    public function store($request)
    {
        Location::create(
            [
                'name' => $request->name,

            ]
        );
        Alert::success('Created !' ,'Create Location Successfuly !');
        return redirect(route('admin.location.all'));
    }

    public function edit($id)
    {
        $location = Location::find($id)->first();

        return view('Admin.pages.location.editLocation', compact('location'));
    }

    public function update($request)
    {
        $location = Location::find($request->location_id)->first();

        $location->update(
            [
                'name' => $request->name,
            ]
        );
        Alert::success('Updated ! ' , 'Update Location Successfuly! ');
        return redirect(route('admin.location.all'));
    }

    public function delete($request)
    {
        $location = Location::find($request->location_id);
        $location->delete();
        Alert::error('Deleted!' , 'Delete Location Successfuly !');
        return redirect(route('admin.location.all'));

    }
}
