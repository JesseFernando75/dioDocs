<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pop;
use App\Models\TipoDio;
use App\Models\PortaDio;

class Dio extends Model
{
    use HasFactory;

    protected $table = 'dio';

    function pop(){
        return $this->belongsTo(Pop::class, 'id_pop', 'id');;
    }

    function tipo(){
        return $this->belongsTo(TipoDio::class, 'id_tipo', 'id');
    }

    function porta(){
        return $this->hasMany(PortaDio::class, 'id_dio', 'id');
    }
}
