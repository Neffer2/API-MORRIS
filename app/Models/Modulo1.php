<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo1 extends Model
{
    use HasFactory; 
    protected $table = "modulo-1";

    public function user_info (){
        return $this->hasOne(User::class, 'id', 'user_id');
    } 
}
