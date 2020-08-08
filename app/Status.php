<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'name',
    ];
}
