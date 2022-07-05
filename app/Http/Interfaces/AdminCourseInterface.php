<?php

namespace  App\Http\Interfaces;

interface  AdminCourseInterface
{
    public  function  index();
    public  function  create();
    public  function  store($request);
    public  function  edit($course_id);
    public  function  update($request);
    public  function  delete($request);
}
