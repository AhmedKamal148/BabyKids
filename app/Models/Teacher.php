<?php

namespace App\Models;

//use App\Http\Requests\CreateTeacherRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'name','price','description' ,'image','course_id'
        ];

    protected $appends = ['image_url'];


    public  static function CreateTeacherRuels()
    {
        return
            [
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
            ];
    }

    public  static  function UpdateTeacherRuels()
    {
        return array_merge(Teacher::CreateTeacherRuels(),
        [
           'teacher_id' => 'required|exists:teachers,id'
        ]);
    }
    public static function  DeleteTeacherRuels()
    {
       return ['teacher_id' => 'required|exists:teachers,id'];

    }

    //accssor
    public function getImageUrlAttribute()
    {
        return 'images\teacher\\' . $this->image;
    }

    /* **************** Relations **************** */

    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }



}
