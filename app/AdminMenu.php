<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    public function child(){
       return $this->hasMany('\App\AdminMenu','parent_id')->where('is_active',1)->orderby('order','ASC');
    }
}
