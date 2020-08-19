<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'name', 'tel', 'zipcode', 'prefecture', 'city', 'address1', 'address2', 
    ];
}
