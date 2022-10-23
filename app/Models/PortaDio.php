<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dio;
use App\Models\StatusPorta;

class PortaDio extends Model
{
    use HasFactory;

    protected $table = 'porta_dio';

    function dio(){
        return $this->belongsTo(Dio::class, 'id_dio', 'id');
    }

    function status(){
        return $this->belongsTo(StatusPorta::class, 'id_status', 'id');
    }
}
