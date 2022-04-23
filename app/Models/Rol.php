<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;

    public function rolUsers(){
        return $this->belongsToMany(User::class); // Muchos a muchos
    }

}
