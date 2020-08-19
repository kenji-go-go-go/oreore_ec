<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'delivery_id', 'destination_id', 'delivery_date', 'delivery_method_id', 'track_id', 'status_id',
    ];
}
