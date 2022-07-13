<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminTeacherInterface;
use App\Http\Requests\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Http\Requests\Teacher\CreateTeacherRequest;



class TeacherController extends Controller
{
     public  $adminTeacherRepo;

     public function __construct(AdminTeacherInterface $adminTeacherRepo)
     {
         $this->adminTeacherRepo = $adminTeacherRepo;
     }

    public  function index()
    {
        return $this->adminTeacherRepo->index();
    }
    public  function create()
    {
        return $this->adminTeacherRepo->create();
    }
    public  function store(CreateTeacherRequest $request)
    {
        return $this->adminTeacherRepo->store($request);
    }
    public function  edit($id)
    {
        return $this->adminTeacherRepo->edit($id);
    }
    public function  update(UpdateTeacherRequest $request)
    {
        return $this->adminTeacherRepo->update($request);
    }
    public function  delete(DeleteTeacherRequest $request)
    {
        return $this->adminTeacherRepo->delete($request);
    }
}

