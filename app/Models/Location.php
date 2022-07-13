<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public   function   CreateLocationRequest()
    {
         return [ 'name' => 'required'];
    }
    public   function   UpdateLocationRequest()
    {
        return array_merge(Location::CreateLocationRequest(),
        [
            'location_id' => 'required|exists:locations,id',
        ]);

    }
    public   function   DeleteLocationRequest()
    {
        return
            [
                'location_id' => 'required|exists:locations,id',
            ];
    }

}
