<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Modulo1;
use App\Models\Modulo2;
use App\Models\Modulo3;  
use App\Models\Modulo4;
use App\Models\Modulo5;
 
class ApiController extends Controller
{
    public function users(Request $request){
        $users = User::all();
        return response()->json($users);
    }

    public function login (Request $request){

        $data = json_decode($request->getContent());

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $response = ['status' => 0, 'msg' => ''];    
        $data = json_decode($request->getContent());
        
        $user = User::where('email', $data->email)->first();
        if($user){
            if(Hash::check($data->password, $user->password)){
                $token = $user->createToken('morris');
                $response['status'] = 1;
                $response['msg'] = $token->plainTextToken;
                $response['id'] = $user->id;
            }else{
                $response['status'] = 0;
                $response['msg'] = "Credenciales incorrectas.";
            }
        }else{
            $response['status'] = 0;
            $response['msg'] = "Usuario no encontrado.";
        }

        return response()->json($response);
    } 

    public function insertM1 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            if (!$item->novedades){
                $modulo = new Modulo1;
                $modulo->user_id = $item->id;
                $modulo->marca = $item->marca;
                $modulo->ciudad = $item->ciudad;
                $modulo->pdv = $item->pdv;
                $modulo->mes = $item->mes;
                $modulo->semana = $item->semana;
                $modulo->selfiePDV = $item->selfiePDV;
                $modulo->foto_fachada = $item->fotoFachada;
                $modulo->fechaVisita = $item->fechaVisita;
                $modulo->estrato = $item->estrato;
                $modulo->barrio = $item->barrio;

                $modulo->foto_cierre = $item->foto_cierre;
                $modulo->latitude = $item->latitude; 
                $modulo->longitude = $item->longitude;

                $modulo->save();                          
            }else {
                $modulo = new Modulo1;
                $modulo->user_id = $item->id;                
                $modulo->pdv = $item->pdv;
                $modulo->novedades = $item->novedades;
                $modulo->save();                          
            }
        }

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }

    public function insertM2 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            $modulo = new Modulo2;

            $modulo->user_id = $item->id;
            $modulo->marca = $item->marca;
            $modulo->num_abordadas = $item->num_abordadas;
            $modulo->num_ventas = $item->num_ventas;
            $modulo->tipo_producto = $item->tipo_producto;
            $modulo->num_ventas_competencia = $item->num_ventas_competencia;
            $modulo->presentacion = $item->presentacion;

            $modulo->gifus = $item->gifus;
            $modulo->genero = $item->genero;
            $modulo->edad = $item->edad; 
            $modulo->save();
        }


        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }

    public function insertM3 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            $modulo = new Modulo3;

            $modulo->user_id = $item->id;
            $modulo->visibilidad = $item->visibilidad;
            $modulo->tipo_visibilidad = $item->tipo_visibilidad;
            $modulo->visibilidad_competencia = $item->visibilidad_competencia;
            $modulo->tipo_visibilidad_competencia = $item->tipo_visibilidad_competencia;
            $modulo->foto_visibilidad_marca = $item->foto_visibilidad_marca;
            $modulo->foto_visibilidad_competencia = $item->foto_visibilidad_competencia;
            
            $modulo->save();
        }

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }

    public function insertM4 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            $modulo = new Modulo4;
            $modulo->user_id = $item->id;
            $modulo->presente = $item->presente;
            $modulo->LMBLUE = $item->LMBLUE;
            $modulo->LMPURPLE = $item->LMPURPLE;
            $modulo->presente = $item->presente;
            $modulo->LMBLUE = $item->LMBLUE;
            $modulo->LMPURPLE = $item->LMPURPLE; 
            $modulo->LMRED = $item->LMRED;
            $modulo->LMSILVER = $item->LMSILVER;
            $modulo->LMWARREGO = $item->LMWARREGO;
            $modulo->LUCKYSTRIKEBLUE10 = $item->LUCKYSTRIKEBLUE10;
            $modulo->LUCKYSTRIKEBLUE20 = $item->LUCKYSTRIKEBLUE20;
            $modulo->LUCKYSTRIKEFEST10 = $item->LUCKYSTRIKEFEST10;
            $modulo->LUCKYSTRIKEFEST20 = $item->LUCKYSTRIKEFEST20;
            $modulo->LUCKYSTRIKEGIN10 = $item->LUCKYSTRIKEGIN10;
            $modulo->LUCKYSTRIKEGIN20 = $item->LUCKYSTRIKEGIN20;
            $modulo->LUCKYSTRIKEMOJITO10 = $item->LUCKYSTRIKEMOJITO10;
            $modulo->LUCKYSTRIKEMOJITO20 = $item->LUCKYSTRIKEMOJITO20;
            $modulo->ROTHMANSAZUL10 = $item->ROTHMANSAZUL10;
            $modulo->ROTHMANSAZUL20 = $item->ROTHMANSAZUL20;
            $modulo->ROTHMANSVERDE10 = $item->ROTHMANSVERDE10;
            $modulo->ROTHMANSVERDE20 = $item->ROTHMANSVERDE20;
            $modulo->ROTHMANSBLANCO10 = $item->ROTHMANSBLANCO10;
            $modulo->ROTHMANSBLANCO20 = $item->ROTHMANSBLANCO20;
            $modulo->ROTHMANSPURPLE10 = $item->ROTHMANSPURPLE10;
            $modulo->ROTHMANSPURPLE20 = $item->ROTHMANSPURPLE20;
            $modulo->STARLITE10 = $item->STARLITE10;
            $modulo->STARLITE20 = $item->STARLITE20;
            $modulo->MALBOROROJO = $item->MALBOROROJO;
            $modulo->MALBOROVERDE = $item->MALBOROVERDE;
            $modulo->MALBOROAZUL = $item->MALBOROAZUL;
            $modulo->CHESTERFIELDPURPLE10 = $item->CHESTERFIELDPURPLE10;
            $modulo->CHESTERFIELDPURPLE20 = $item->CHESTERFIELDPURPLE20;
            $modulo->CHESTERFIELDGREEN10 = $item->CHESTERFIELDGREEN10;
            $modulo->CHESTERFIELDGREEN20 = $item->CHESTERFIELDGREEN20;
            $modulo->CHESTERFIELDBLUE10 = $item->CHESTERFIELDBLUE10;
            $modulo->CHESTERFIELDBLUE20 = $item->CHESTERFIELDBLUE20;
            $modulo->save();
        }


        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }

        public function insertM5 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            $modulo = new Modulo5;

            $modulo->user_id = $item->id;
            $modulo->tipo_producto = $item->tipo_producto;
            $modulo->precio = $item->precio;
            
            $modulo->save();
        }

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }
}
