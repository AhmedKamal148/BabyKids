<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
    ];
    protected $appends = ['image_url'];


    public  static  function ruels()
    {
        return [
            'image' => 'required',
        ];
    }
    public static function DeleteRuels()
    {
        return
        [
            'slider_id' => 'required|exists:sliders,id',
        ];
    }
    public  static  function UpdateRuels()
    {
        return
            array_merge(Slider::ruels(),array([
            'slider_id' => 'required|exists:sliders,id',

        ]));

    }


    /**
     *  Accessor
     *   ده بيساعدك انه بيعمل return للجزء اللي انت بتكتبه تحت ده وبتضيف عليه اللي راجعلك من ال database
     * بتكتبه بالاسلوب ده
     * اول جزء get
    * ثان جزء اسم ال column ف الداتابيز وبيكون اول حرف كابيتل
     * ثالث جزء بتكتب الاتربيوت
     * ال parameter ده اللي هو اللي بيرجع من الداتابيز
     * لما انا هاجي اطلب منه يجيب ال column ده من الداتا بيز هيرجعلي بالفورمه اللي تحت دي
     */
    public  function getImageUrlAttribute()
    {
        return "images\slider\\" . $this->image;
    }
}
