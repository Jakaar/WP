<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $table = 'categories';

    public function child(){
        return $this->hasMany('\App\UserMenu','category_id','id');
    }

    public function counter(){
        return $this->hasMany('\App\UserMenu','category_id','id')->count();
    }
}
