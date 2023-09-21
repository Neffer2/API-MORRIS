<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo4 extends Model
{
    use HasFactory;
    protected $table = "modulo-4";

    public function disponibilidades (){
        return $this->hasMany(Disponibilidad::class, 'modulo_4_id', 'id');
    }
}
