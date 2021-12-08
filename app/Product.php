<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "main_products";

    public function category(){
        return $this->belongsTo('\App\ProductCategory');
    }

    public function scopeFilter($query, $category){
        if($category){
           return $query->where('category_id',$category);
        } 
        return $query;
    }
}
