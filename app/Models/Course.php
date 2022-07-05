<?php

namespace App\Models;

use App\Http\Requests\Course\CreateCourseRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'name','price','description','image'
        ];
    protected  $appends = ['image_url'];

    public  static function CreateCourseRuels()
    {
        return
            [
                'course_name' =>'required',
                'course_price' =>'required',
                'course_description' =>'required',
            ];
    }

    public static  function  DeleteCourseRuels()
    {
        return
        [
            'course_id' => 'required|exists:courses,id',
        ];
    }

    public  static  function UpdateCourseRuels()
    {
        return array_merge(Course::CreateCourseRuels(),
        array([
            'course_id' => 'required|exists:courses,id',

        ]));
    }
    //Accessor
    public  function getImageUrlAttribute()
    {
        return 'images\course\\' . $this->image;
    }

    /************ Relations ************/

    public function teacher()
    {
        return $this->hasOne(Teacher::class,'course_id','id');
    }
    public  function allTeacher()
    {
        return $this->hasMany(Teacher::class,'course_id','id');
    }
}
