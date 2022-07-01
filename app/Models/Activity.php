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

    }
    public  static  function UpdateActiviteRequest()
    {

    }
    public  static  function DeleteActiviteRequest()
    {

    }
}
