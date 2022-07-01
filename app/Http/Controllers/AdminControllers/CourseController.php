<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\DeleteCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Http\Traits\ImagesTriat;
use App\Models\Course;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    use ImagesTriat;

    public  function  index()
    {
        $courses = Course::get();
        return  'sss';
        return view('Admin.pages.course.courses',compact('courses'));
    }

    public  function  create()
    {
        return view('Admin.pages.course.createCourse');
    }

    public  function  store(CreateCourseRequest $request)
    {
        $file = $request->course_image;
        $fileName = time() . '_course.jpg';
        $this->UploadImage($file,$fileName,'course');

        Course::create(
            [
                'name'=>$request->course_name,
                'price'=> floatval($request->course_price),
                'description'=>$request->course_description,
                'image' => $fileName,

        ]
        );
        Alert::success('Create Course ' , "Created Successfuly !");
        return redirect()->back();
    }
    public  function  edit($course_id)
    {
        $course = Course::find($course_id);

        return view('Admin.pages.course.editCourse',compact('course'));
    }

    public  function  update(UpdateCourseRequest $request)
    {
        $course = Course::find($request->course_id);
        if($request->has('course_image'))
        {
            $imageName = time() . '_course' . $request->course_image->extension();
            $this->UploadImage($request->course_image , $imageName , 'course',$course->image);
        }

        $course->update(
            [
                'name' =>               $request->course_name,
                'price' =>              $request->course_price,
                'description' =>        $request->course_description,
                'image' =>              (isset($request->course_image)) ? $imageName : $course->image,
            ]
        );
//
        Alert::success('Course Update' , 'Course Updated Successfuly !');
        return redirect(route('admin.course.all'));

    }
    public  function  delete(DeleteCourseRequest $request)
    {
        $course = Course::find($request->course_id);
        unlink(public_path($course->image));
        $course->delete();

        Alert::error('Delete Course', 'Deleted Successfuly !');
        return redirect()->back();


    }
}
