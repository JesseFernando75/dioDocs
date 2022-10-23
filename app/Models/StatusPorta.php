<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortaDio;

class StatusPorta extends Model
{
    use HasFactory;

    protected $table = 'status_porta';

    function porta(){
        return $this->hasMany(PortaDio::class, 'id_status', 'id');
    }
}
