<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo2 extends Model
{
    use HasFactory;
    protected $table = "modulo-2";

    public function ventas (){
        return $this->hasMany(Venta::class, 'modulo_2_id', 'id');
    }
    
    public function gifus (){
        return $this->hasMany(Gifu::class, 'modulo_2_id', 'id');
    }
}
