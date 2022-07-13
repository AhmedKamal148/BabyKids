<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminActivityInterface;
use App\Http\Requests\Activity\CreateActiviteRequest;
use App\Http\Requests\Activity\DeleteActiviteRequest;
use App\Http\Requests\Activity\UpdateActiviteRequest;


class ActivityController extends Controller
{
    public  $adminAcivityRepo ;
    public function __construct(AdminActivityInterface $adminAcivityRepo)
    {
        $this->adminAcivityRepo = $adminAcivityRepo;
    }

    public function index()
    {
    return $this->adminAcivityRepo->index();
    }
    public function create()
    {
        return $this->adminAcivityRepo->create();

    }
    public function store(CreateActiviteRequest $request)
    {
        return $this->adminAcivityRepo->store($request);
    }
    public function edit($id)
    {
        return $this->adminAcivityRepo->edit($id);
    }
    public function update(UpdateActiviteRequest $request)
    {
        return $this->adminAcivityRepo->update($request);
    }
    public function delete(DeleteActiviteRequest $request)
    {
        return $this->adminAcivityRepo->delete($request);
    }
}
