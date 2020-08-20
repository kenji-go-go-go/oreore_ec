<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $table = 'order_details';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'order_id', 'total_amount',
    ];
}
