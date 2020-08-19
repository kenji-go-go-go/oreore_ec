<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        //'created_at', 'deleted_at', 'name', 'image_path', 'unit_price', 'stock_number',
        'name', 'image_path', 'unit_price', 'stock_number', 'description', 'box_number',
    ];
}
