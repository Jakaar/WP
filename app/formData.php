<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formData extends Model
{
    protected $table = 'client_form_data';

    public function builder(){
        return $this->belongsTo('\App\formBuilder','form_id');
    }
}
