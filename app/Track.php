<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'tracks';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'trackname', 'drivername',
    ];
}
