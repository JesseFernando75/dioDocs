<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PerfilUser extends Model
{
    use HasFactory;

    protected $table = 'perfil_users';

    function user(){
        return $this->hasMany(User::class, 'id_perfil', 'id');;
    }
}
