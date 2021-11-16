<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "wpanel_product_category";

    public function product_count(){
        return $this->hasMany('\App\Product','product_classification','id');
    }
}
