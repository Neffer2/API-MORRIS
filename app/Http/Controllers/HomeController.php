<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo1;

class HomeController extends Controller
{
    public function index(){
        $dataModulo1 = Modulo1::select('user_id', 'pdv', 'novedades', 'fechaVisita', 'latitude','longitude', 'created_at')->orderBy('created_at', 'desc')->get();
        return view('home.index', ['dataModulo1' => $dataModulo1]);
    }
}
