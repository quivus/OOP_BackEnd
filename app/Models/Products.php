<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'Itemcode';
    protected $casts = [
        'Sizes' => 'array'
    ];
    protected $fillable = [
        'Itemcode',
        'Item_Name',
        'Unit_Price',
        'Sizes',
        'Setting',
        'Quantity',
        'Description',
        'Image',
    ];
}
