<?php

namespace App\Http\Controllers\AdminControllers;


use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminLocationInterface;
use App\Http\Requests\Location\CreateLocationRequest;
use App\Http\Requests\Location\DeleteLocationRequest;
use App\Http\Requests\Location\UpdateLocationRequest;


class LocationController extends Controller
{
    public $locationInterface ;

    public function __construct(AdminLocationInterface $locationInterface)
    {
        $this->locationInterface = $locationInterface;
    }


    public function index()
    {
        return  $this->locationInterface->index();
    }


    public function create()
    {
        return  $this->locationInterface->create();

    }


    public function store(CreateLocationRequest $request)
    {
        return  $this->locationInterface->store($request);

    }

    public function edit($id)
    {
        return  $this->locationInterface->edit($id);

    }


    public function update(UpdateLocationRequest $request)
    {

        return  $this->locationInterface->update($request);

    }


    public function delete(DeleteLocationRequest $request)
    {
        return  $this->locationInterface->delete($request);

    }
}
