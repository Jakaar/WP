<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "main_products";

    public function category(){
        return $this->belongsTo('\App\ProductCategory');
    }
}
