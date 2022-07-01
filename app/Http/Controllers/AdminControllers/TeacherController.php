<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Course;
use App\Http\Requests\Teacher\CreateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TeacherController extends Controller
{
    use ImagesTriat;
    public  function index()
    {

        $teachers = Teacher::all();
        $courses  = Course::get();
        return view('Admin.pages.teacher.teachers',compact('teachers','courses'));
    }
    public  function  create()
    {
        $courses = Course::all();
        return view('Admin.pages.teacher.createTeacher',compact('courses'));
    }
    public  function store(CreateTeacherRequest $request)
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
    public function update(UpdateTeacherRequest $request)
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
    public function  delete(DeleteTeacherRequest $request)
    {
        $teacher = Teacher::find($request->teacher_id);
        unlink($teacher->image_url);
        $teacher->delete();
        return redirect(route('admin.teacher.all'));
    }
}
