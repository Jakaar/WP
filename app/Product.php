<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "wpanel_product_manage";

    public function category(){
        return $this->belongsTo('\App\ProductCategory','product_classification');
    }

}
