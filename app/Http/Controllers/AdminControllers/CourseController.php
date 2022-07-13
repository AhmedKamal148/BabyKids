<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminCourseInterface;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\DeleteCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Course;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public $adminCourseRepo;

    public function __construct(AdminCourseInterface $adminCourseRepo)
    {
          $this->adminCourseRepo = $adminCourseRepo;
    }

    public  function  index()
    {
        return  $this->adminCourseRepo->index();
    }
    public  function  create()
    {
        return  $this->adminCourseRepo->create();
    }
    public  function  store(CreateCourseRequest $request)
    {
        return   $this->adminCourseRepo->store($request);
    }
    public  function  edit($course_id)
    {
        return   $this->adminCourseRepo->edit($course_id);
    }
    public  function  update(UpdateCourseRequest $request)
    {
        return $this->adminCourseRepo->update($request);
    }
    public  function  delete(DeleteCourseRequest $request)
    {
        return $this->adminCourseRepo->delete($request);
    }
}
