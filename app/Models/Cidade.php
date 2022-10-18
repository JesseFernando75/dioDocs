<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;
use App\Models\Pop;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidade';

    function estado(){
        return $this->belongsTo(Estado::class, 'id_estado', 'id');
    }

    function pop(){
        return $this->hasMany(Pop::class, 'id_cidade', 'id');
    }
}
