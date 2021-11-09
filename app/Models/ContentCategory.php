<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    public function content_categories()
    {
        return $this->hasMany(ContentCategory::class);
    }
    public function subCategories()
    {
        return $this->hasMany(ContentCategory::class)
            ->where('isEnabled', 1)
            ->with('content_categories');
    }
}
