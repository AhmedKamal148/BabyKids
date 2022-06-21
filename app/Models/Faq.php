<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable =[
        'question','answer'
    ];

    public  static  function ruels()
    {
        return [
            'question' => 'required|min:5',
            'answer' => 'required|min:5',

        ];
    }
    public  static function DeleteRuels()
    {
        return [
            'faq_id' => 'required|exists:faqs,id',

        ];
    }
    public static  function  UpdateRuels()
    {
        return array_merge(Faq::ruels(),array(
            [
                'faq_id' => 'required|exists:faqs,id',
            ])
        );
    }
}
