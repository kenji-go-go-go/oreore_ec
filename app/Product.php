<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'name', 'image_path', 'unit_price', 'stock_number',
    ];
}
