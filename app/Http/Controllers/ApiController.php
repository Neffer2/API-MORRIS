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
            $modulo->pdv = $item->pdv;
            $modulo->num_abordadas = $item->num_abordadas;
            $modulo->num_ventas_1 = $item->num_ventas_1;
            $modulo->num_ventas_2 = $item->num_ventas_2;
            $modulo->genero_1 = $item->genero_1;
            $modulo->genero_2 = $item->genero_2;
            $modulo->edad_1 = $item->edad_1;
            $modulo->edad_2 = $item->edad_2;
            $modulo->gifus = $item->gifus;
            $modulo->MLBROJO = $item->MLBROJO;
            $modulo->MLBROJO_PRESENT = $item->MLBROJO_PRESENT;
            $modulo->MLBREDSELECTION = $item->MLBREDSELECTION;
            $modulo->MLBREDSELECTION_PRESENT = $item->MLBREDSELECTION_PRESENT;
            $modulo->PIELROJA = $item->PIELROJA;
            $modulo->PIELROJA_PRESENT = $item->PIELROJA_PRESENT;
            $modulo->CARIBE = $item->CARIBE;
            $modulo->CARIBE_PRESENT = $item->CARIBE_PRESENT;
            $modulo->LMAZUL = $item->LMAZUL;
            $modulo->LMAZUL_PRESENT = $item->LMAZUL_PRESENT;
            $modulo->LMROJO = $item->LMROJO;
            $modulo->LMROJO_PRESENT = $item->LMROJO_PRESENT;
            $modulo->MLBGOLD = $item->MLBGOLD;
            $modulo->MLBGOLD_PRESENT = $item->MLBGOLD_PRESENT;
            $modulo->CHESTERFIELDAZUL = $item->CHESTERFIELDAZUL;
            $modulo->CHESTERFIELDAZUL_PRESENT = $item->CHESTERFIELDAZUL_PRESENT;
            $modulo->CHESTERFIELDBLANCO = $item->CHESTERFIELDBLANCO;
            $modulo->CHESTERFIELDBLANCO_PRESENT = $item->CHESTERFIELDBLANCO_PRESENT;
            $modulo->LMSILVER = $item->LMSILVER;
            $modulo->LMSILVER_PRESENT = $item->LMSILVER_PRESENT;
            $modulo->CHESTERFIELDGREEN = $item->CHESTERFIELDGREEN;
            $modulo->CHESTERFIELDGREEN_PRESENT = $item->CHESTERFIELDGREEN_PRESENT;
            $modulo->MLBFUSION_FRUTOSROJOS = $item->MLBFUSION_FRUTOSROJOS;
            $modulo->MLBFUSION_FRUTOSROJOS_PRESENT = $item->MLBFUSION_FRUTOSROJOS_PRESENT;
            $modulo->MLBSUMMER_SANDIA = $item->MLBSUMMER_SANDIA;
            $modulo->MLBSUMMER_SANDIA_PRESENT = $item->MLBSUMMER_SANDIA_PRESENT;
            $modulo->MLBEXOTIC_TUTIFRUTI = $item->MLBEXOTIC_TUTIFRUTI;
            $modulo->MLBEXOTIC_TUTIFRUTI_PRESENT = $item->MLBEXOTIC_TUTIFRUTI_PRESENT;
            $modulo->CHESTERFIELDPURPLE_FRUTOSROJOS = $item->CHESTERFIELDPURPLE_FRUTOSROJOS;
            $modulo->CHESTERFIELDPURPLE_FRUTOSROJOS_PRESENT = $item->CHESTERFIELDPURPLE_FRUTOSROJOS_PRESENT;
            $modulo->LMPURPLE_FRUTOSROJOS = $item->LMPURPLE_FRUTOSROJOS;
            $modulo->LMPURPLE_FRUTOSROJOS_PRESENT = $item->LMPURPLE_FRUTOSROJOS_PRESENT;
            $modulo->LMWARREGO_SANDIA = $item->LMWARREGO_SANDIA;
            $modulo->LMWARREGO_SANDIA_PRESENT = $item->LMWARREGO_SANDIA_PRESENT;           
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
            $modulo->pdv = $item->pdv;
            $modulo->visibilidad = $item->visibilidad;
            $modulo->tipo_visibilidad = $item->tipo_visibilidad;
            $modulo->visibilidad_competencia = $item->visibilidad_competencia;
            $modulo->tipo_visibilidad_competencia = $item->tipo_visibilidad_competencia;
            $modulo->num_ventas_competencia = $item->num_ventas_competencia;
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
            $modulo->pdv = $item->pdv;
            $modulo->presente = $item->presente;

            $modulo->MLBROJO = $item->MLBROJO;
            $modulo->MLBREDSELECTION = $item->MLBREDSELECTION;
            $modulo->PIELROJA = $item->PIELROJA;
            $modulo->CARIBE = $item->CARIBE;
            $modulo->LMAZUL = $item->LMAZUL; 
            $modulo->LMROJO = $item->LMROJO;

            $modulo->MLBGOLD = $item->MLBGOLD;
            $modulo->CHESTERFIELDAZUL = $item->CHESTERFIELDAZUL;
            $modulo->CHESTERFIELDBLANCO = $item->CHESTERFIELDBLANCO;
            $modulo->LMSILVER = $item->LMSILVER;

            $modulo->CHESTERFIELDGREEN = $item->CHESTERFIELDGREEN;

            $modulo->MLBFUSION_FRUTOSROJOS = $item->MLBFUSION_FRUTOSROJOS;
            $modulo->MLBSUMMER_SANDIA = $item->MLBSUMMER_SANDIA;
            $modulo->MLBEXOTIC_TUTIFRUTI = $item->MLBEXOTIC_TUTIFRUTI;
            $modulo->CHESTERFIELDPURPLE_FRUTOSROJOS = $item->CHESTERFIELDPURPLE_FRUTOSROJOS;
            $modulo->LMPURPLE_FRUTOSROJOS = $item->LMPURPLE_FRUTOSROJOS;
            $modulo->LMWARREGO_SANDIA = $item->LMWARREGO_SANDIA;
            
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
            $modulo->pdv = $item->pdv;

            $modulo->MLBROJO = $item->MLBROJO;
            $modulo->MLBREDSELECTION = $item->MLBREDSELECTION;
            $modulo->PIELROJA = $item->PIELROJA;
            $modulo->CARIBE = $item->CARIBE;
            $modulo->LMAZUL = $item->LMAZUL; 
            $modulo->LMROJO = $item->LMROJO;

            $modulo->MLBGOLD = $item->MLBGOLD;
            $modulo->CHESTERFIELDAZUL = $item->CHESTERFIELDAZUL;
            $modulo->CHESTERFIELDBLANCO = $item->CHESTERFIELDBLANCO;
            $modulo->LMSILVER = $item->LMSILVER;

            $modulo->CHESTERFIELDGREEN = $item->CHESTERFIELDGREEN;

            $modulo->MLBFUSION_FRUTOSROJOS = $item->MLBFUSION_FRUTOSROJOS;
            $modulo->MLBSUMMER_SANDIA = $item->MLBSUMMER_SANDIA;
            $modulo->MLBEXOTIC_TUTIFRUTI = $item->MLBEXOTIC_TUTIFRUTI;
            $modulo->CHESTERFIELDPURPLE_FRUTOSROJOS = $item->CHESTERFIELDPURPLE_FRUTOSROJOS;
            $modulo->LMPURPLE_FRUTOSROJOS = $item->LMPURPLE_FRUTOSROJOS;
            $modulo->LMWARREGO_SANDIA = $item->LMWARREGO_SANDIA;
            
            $modulo->save();
        }

        $response = ['status' => 'success', 'msg' => 'Datos guardados exitosamente'];    
        return response()->json($response);
    }
}
