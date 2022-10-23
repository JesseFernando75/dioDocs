<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dio;
use App\Models\Cidade;

class Pop extends Model
{
    use HasFactory;

    protected $table = 'pop';

    function dio(){
        return $this->hasMany(Dio::class, 'id_pop', 'id');;
    }

    function cidade(){
        return $this->belongsTo(Cidade::class, 'id_cidade', 'id');
    }
}
