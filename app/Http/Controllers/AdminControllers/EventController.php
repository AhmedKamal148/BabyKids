<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminEventInterface;
use App\Http\Requests\Event\CreateEventRequest;
use App\Http\Requests\Event\DeleteEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{

    protected  $eventInterface ;
    public function __construct(AdminEventInterface $eventInterface)
    {
        $this->eventInterface = $eventInterface;
    }
    public function index()
    {
        return  $this->eventInterface->index();

    }

    public function create()
    {
        return  $this->eventInterface->create();
    }
    public function store(CreateEventRequest $request)
    {
        return  $this->eventInterface->store($request);

    }

    public function edit($id)
    {
        return  $this->eventInterface->edit($id);

    }

    public function update(UpdateEventRequest $request)
    {
        return  $this->eventInterface->update($request);

    }
    public function delete(DeleteEventRequest $request)
    {
         return  $this->eventInterface->delete($request);
    }
}
