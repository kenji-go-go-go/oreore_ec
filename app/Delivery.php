<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'company', 'address', 'tel', 'name', 'email',
    ];
}
