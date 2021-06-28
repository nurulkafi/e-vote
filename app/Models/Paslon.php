<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
class Paslon extends Model
{
    use HasFactory;
    use HasRoles;
    public function Fcalon_ketua(){
        return $this->belongsTo('App\Models\Mahasiswa','calon_ketua','id');
    }
    public function Fcalon_wakil_ketua(){
        return $this->belongsTo('App\Models\Mahasiswa','calon_wakil_ketua','id');
    }
}
