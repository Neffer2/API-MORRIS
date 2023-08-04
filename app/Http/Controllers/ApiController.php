<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Modulo1;
use App\Models\Modulo2;
// use App\Models\Modulo3;
// use App\Models\Modulo4;

class ApiController extends Controller
{
    public function users(Request $request){
        $users = User::all();
        return response()->json($users);
    }

    public function login (Request $request){

        $data = json_decode($request->getContent());
        return response()->json($data);

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
            }else{
                $response['msg'] = "Credenciales incorrectas.";
            }
        }else{
            $response['msg'] = "Usuario no encontrado.";
        }

        // 1|sHygm15xUK9Pcog52kDqlG9fs0utqIW2TJR2tLsU

        return response()->json($response);
    } 

    public function insertM1 (Request $request){
        $modulo1 = new Modulo1;
        $modulo1->marca = $request->marca;
        $modulo1->ciudad = $request->ciudad;
        $modulo1->pdv = $request->pdv;
        $modulo1->mes = $request->mes;
        $modulo1->semana = $request->semana;
        $modulo1->selfiePDV = $request->selfiePDV;
        $modulo1->foto_fachada = $request->foto_fachada;
        $modulo1->save();

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($modulo1);
    }

    public function insertM2 (Request $request){
        $data = json_decode($request->getContent());

        return response()->json($data);

        $modulo2 = new Modulo2;
        $modulo2->user_id = 1;
        $modulo2->marca = $data->marca;
        $modulo2->num_abordadas = $data->num_abordadas;
        $modulo2->num_ventas = $data->num_ventas;
        $modulo2->tipo_producto = $data->tipo_producto;
        $modulo2->num_ventas_competencia = $data->num_ventas_competencia;
        $modulo2->presentacion = $data->presentacion;
        $modulo2->save();

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }
}
