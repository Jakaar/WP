<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class)->where('isEnabled', 1);
    }
    public function childrenCategories()
    {
        return $this->hasMany(Category::class)
            ->where('isEnabled', 1)
            ->with('categories');
    }
}
