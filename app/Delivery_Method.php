<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_Method extends Model
{
    protected $table = 'delivery_methods';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'name',
    ];
}
