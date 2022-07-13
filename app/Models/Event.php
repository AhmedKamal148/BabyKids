<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
            'image','date','title','location_id','start_at','end_at','slug'
        ];
    protected $appends = ['image_url'];

    public  function  CreateEventRequest()
    {
        return
            [
                'title' => 'required',
                'color' => 'required',
                'date' => 'required',
                'start_at' => 'required',
                'end_at' => 'required',
                'slug' => 'required',
                'image' => 'required',
                'location_id' => 'required, exists:locations,id',
            ];
    }
    public  function  UpdateEventRequest()
    {

    }
    public  function  DeleteEventRequest()
    {

    }

    /****** Accessor *******/

    public  function getImageUrlAttribute()
    {
        return 'images\event' . $this->imgae;
    }

}
