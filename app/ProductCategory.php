<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "main_product_categories";

    public function product_count(){
        return $this->hasMany('\App\Product','product_id','id');
    }

    public function parent(){
        return $this->belongsTo('\App\ProductCategory');    
    }

    public function child(){
        return $this->hasMany('\App\ProductCategory','parent_id','id')->where('is_active','!=',2)->orderby('order','ASC');
    }

    public function childs(){
        return $this->hasMany('\App\ProductCategory','parent_id','id')->where('is_active',1)->orderby('order','ASC');
    }
}
