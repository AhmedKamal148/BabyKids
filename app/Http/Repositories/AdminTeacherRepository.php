<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AdminTeacherInterface;
use App\Http\Requests\Teacher\CreateTeacherRequest;
use App\Http\Requests\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Http\Traits\ImagesTriat;

use App\Models\Course;
use App\Models\Teacher;
use RealRashid\SweetAlert\Facades\Alert;

class  AdminTeacherRepository implements AdminTeacherInterface
{
    use ImagesTriat;
    public  function index()
    {
        $teachers = Teacher::with('course')->get();
        return view('Admin.pages.teacher.teachers',compact('teachers'));
    }
    public  function create()
    {
        $courses = Course::all();
        return view('Admin.pages.teacher.createTeacher',compact('courses'));
    }
    public  function store($request)
    {
        $image = $request->image;
        $imageName = time() .'_teacher.jpg' ;
        $this->UploadImage($image,$imageName,'teacher');

        Teacher::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'image' =>  $imageName,
                'course_id' => $request->course_id,
            ]
        );
        Alert::success('Create' ,'Created Successfuly !');
        return redirect()->back();
    }
    public function  edit($id)
    {
        $teacher = Teacher::find($id);
        $courses = Course::get();
        return view('Admin.pages.teacher.editTeacher',compact('teacher','courses'));
    }
    public function  update($request)
    {
        $teacher  = Teacher::find($request->teacher_id);
        if($request->has('image'))
        {
            $image = $request->image;
            $imageName  = time() . '_teacher.jpg';
            $this->UploadImage($request->image,$imageName,'teacher',$teacher->image_url);
        }
        if($request->has('course_id'))
        {
            $course_id = $request->course_id;
        }

        $teacher->update(
            [
                'name'=> $request->name,
                'price'=> $request->price,
                'description'=> $request->description,
                'image' => (!is_null($request->image)) ? $imageName : $teacher->image,
                'course_id' =>  (isset($course_id)) ? $course_id : $teacher->course_id,
            ]
        );
        Alert::success('Update Teacher' , "Update Successfuly !");
        return redirect(route('admin.teacher.all'));
    }
    public function  delete($request)
    {
        $teacher = Teacher::find($request->teacher_id);
        unlink($teacher->image_url);
        $teacher->delete();
        return redirect(route('admin.teacher.all'));
    }

}
