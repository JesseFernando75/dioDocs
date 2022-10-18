<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dio;

class TipoDio extends Model
{
    use HasFactory;

    protected $table = 'tipo_dio';

    function dio(){
        return $this->hasMany(Dio::class, 'id_tipo', 'id');
    }
}
