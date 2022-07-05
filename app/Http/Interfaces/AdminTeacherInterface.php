<?php

namespace  App\Http\Interfaces;

interface AdminTeacherInterface
{
    public  function  index();
    public  function  create();
    public  function  store($request);
    public  function  edit($id);
    public  function  update($request);
    public  function  delete($request);
}
