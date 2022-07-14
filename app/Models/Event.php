<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Nette\Utils\DateTime;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
            'image','date','title','location_id','start_at','end_at','slug','color',
        ];
    protected $appends = ['image_url','date_time','start_at_time','end_at_time'];

    public  function  CreateEventRequest()
    {
        return
            [
                'title' => 'required',
                'date' => 'required',
                'start_at' => 'required',
                'end_at' => 'required',
                'slug' => 'required',
                'image' => 'required',
                'color' => 'required',
            ];
    }
    public  function  UpdateEventRequest()
    {
        return [
            'event_id' => 'required|exists:events,id',
        ];
    }
    public  function  DeleteEventRequest()
    {
        return [
            'event_id' => 'required|exists:events,id',
        ];
    }

    /****** Relations *******/

    public  function location()
    {
        return $this->belongsTo(Location::class, 'location_id','id');
    }



    /****** Accessor *******/

    public  function getImageUrlAttribute()
    {
        return 'images\event\\' . $this->image;
    }
    public  function  getDateTimeAttribute()
    {
        $date = new DateTime($this->date);
        return $date->format('d-M');
    }

    public function getStartAtTimeAttribute()
    {
        $time = new DateTime( $this->start_at);
        return $time->format('H:i');
 }
    public  function  getEndAtTimeAttribute()
    {
        $time = new DateTime( $this->end_at);
        return $time->format('H:i');
    }


}
