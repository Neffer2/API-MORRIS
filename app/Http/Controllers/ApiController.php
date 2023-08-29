<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Modulo1;
use App\Models\Modulo2;
use App\Models\Modulo3;  
use App\Models\Modulo4;
use App\Models\Venta;
use App\Models\Gifu;
use App\Models\Disponibilidad;
use App\Models\Shopping;
 
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

        $validate = Modulo1::select('token')->where('token', $data[0]->token)->first();            

        if (!is_null($validate)){
            $response = ['status' => 'error', 'msg' => 'Token repetido'];    
            return response()->json($response);
        }

        foreach ($data as $item){
            if (!$item->novedades){
                $modulo = new Modulo1;
                $modulo->user_id = $item->id;
                $modulo->pdv = $item->pdv;
                $modulo->fechaVisita = $item->fechaVisita;
                $modulo->semana = $item->semana;
                $modulo->estrato = $item->estrato;
                $modulo->barrio = $item->barrio;
                $modulo->selfiePDV = $item->selfiePDV;
                $modulo->foto_fachada = $item->fotoFachada;
                $modulo->foto_cierre = $item->foto_cierre;
                $modulo->latitude = $item->latitude; 
                $modulo->longitude = $item->longitude;

                $modulo->token = $item->token;
                $modulo->save();                          
            }else {
                $modulo = new Modulo1;
                $modulo->user_id = $item->id;                
                $modulo->pdv = $item->pdv;
                $modulo->novedades = $item->novedades;
                $modulo->token = $item->token;
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
            $modulo->pdv = $item->pdv;
            $modulo->abordadas = $item->num_abordadas; 

            $modulo->token = $item->token;
            $modulo->save();
        }

        foreach ($data[0]->ventas as $itemVentas){
            $venta = new Venta; 
            $venta->modulo_2_id = $modulo->id;
            $venta->user_id = $item->id;
            $venta->producto = $itemVentas->producto;
            $venta->presentacion = $itemVentas->presentacion;
            $venta->genero = $itemVentas->genero;
            $venta->edad = $itemVentas->edad;
            $venta->cantidad = $itemVentas->cantidad;
            $venta->interes_inicial = $itemVentas->interesInicial;
            $venta->save();
        }

        foreach ($data[0]->gifus as $itemGifus){
            $gifu = new Gifu;
            $gifu->modulo_2_id = $modulo->id;
            $gifu->user_id = $item->id;
            $gifu->gifu = $itemGifus->gifu;
            $gifu->genero_gifu = $itemGifus->genero_gifu;
            $gifu->edad_gifu = $itemGifus->edad_gifu;
            $gifu->save();
        }   

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }

    public function insertM3 (Request $request){
        $data = json_decode($request->getContent());

        foreach ($data as $item){
            $modulo = new Modulo3;

            $modulo->user_id = $item->id;
            $modulo->pdv = $item->pdv;
            $modulo->visibilidad = $item->visibilidad;
            $modulo->tipo_visibilidad = $item->tipo_visibilidad;
            $modulo->visibilidad_competencia = $item->visibilidad_competencia;
            $modulo->tipo_visibilidad_competencia = $item->tipo_visibilidad_competencia;
            $modulo->foto_visibilidad_marca = $item->foto_visibilidad_marca;
            $modulo->foto_visibilidad_competencia = $item->foto_visibilidad_competencia;
            
            $modulo->token = $item->token;
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
            $modulo->pdv = $item->pdv;

            $modulo->token = $item->token;
            $modulo->save();
        }

        foreach ($data[0]->disponibilidades as $itemDispo){
            $dispo = new Disponibilidad;
            $dispo->modulo_4_id = $modulo->id;
            $dispo->user_id = $item->id;
            $dispo->producto = $itemDispo->producto;
            $dispo->presentacion = $itemDispo->presentacion;
            $dispo->precio = $itemDispo->precio;
            $dispo->stock = $itemDispo->stock; 
            $dispo->competencia = false;
            $dispo->save(); 
        }  

        foreach ($data[0]->disponibilidadesComp as $itemDispo){
            $dispo = new Disponibilidad;
            $dispo->modulo_4_id = $modulo->id;
            $dispo->user_id = $item->id;
            $dispo->producto = $itemDispo->producto;
            $dispo->presentacion = $itemDispo->presentacion;
            $dispo->precio = $itemDispo->precio;
            $dispo->stock = $itemDispo->stock; 
            $dispo->competencia = true;
            $dispo->save();
        }  

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }
}
