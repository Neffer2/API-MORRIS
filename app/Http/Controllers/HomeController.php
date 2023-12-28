<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo1;
use App\Models\Modulo2;
use App\Models\Modulo3;
use App\Models\Modulo4;
use App\Models\Ventas;
use App\Models\Gifu;
use App\Models\Disponibilidad;
use App\Models\User;

class HomeController extends Controller
{ 
    public function index(){
        $dataModulo1 = Modulo1::select('user_id', 'pdv', 'novedades', 'fechaVisita', 'latitude', 'longitude', 'created_at', 'token')->orderBy('created_at', 'desc')->get();        
        return view('home.index', ['dataModulo1' => $dataModulo1]);
    }

    public function allData($token){
        $dataModulo1 = Modulo1::where('token', $token)->first();
        $dataModulo2 = Modulo2::where('token', $token)->first();
        $dataModulo3 = Modulo3::where('token', $token)->first();
        // $dataModulo4 = Modulo4::where('token', $token)->first();
        
        return view('home.ver_mas', [
            'dataModulo1' => $dataModulo1,
            'dataModulo2' => $dataModulo2,
            'dataModulo3' => $dataModulo3,
            // 'dataModulo4' => $dataModulo4,
        ]);
    }
}
 