<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','icon'];
    public  static  function CreateActiviteRequest()
    {
        return
        [
            'activity_title' => 'required|min:5',
            'activity_slug' => 'required|min:5',
            'activity_icon' => 'required|min:5',
        ];
    }
    public  static  function UpdateActiviteRequest()
    {
        return array_merge(Activity::CreateActiviteRequest(),
        [
            'activity_id' => 'required|exists:activities,id',
        ]);
    }
    public  static  function DeleteActiviteRequest()
    {
     return   ['activity_id' => 'required|exists:activities,id'];

    }

    //Accessor

}
