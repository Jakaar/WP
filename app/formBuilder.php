<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formBuilder extends Model
{
    protected $table = 'form_builded';
    public function files(){
        return $this->hasMany('\App\formDataFile','id','client_form_data_id');
    }
}
