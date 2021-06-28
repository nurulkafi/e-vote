<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function no_urut(){
        return $this->belongsTo('App\Models\Paslon','paslon_id','id');
    }
}
