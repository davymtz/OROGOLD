<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\reservarCita as cita;
use Carbon\Carbon;

class ReservaController extends Controller
{
    public function reservar($name, $email, $phone){
        $request = [
            "name"=>$name,
            "email"=>$email,
            "phone"=>$phone
        ];
        $validacion = $this->validateParams($request);
        if(!$validacion->fails()){
            try{
                $result = cita::where("email",$email)->first();
                if(empty($result)){
                    DB::beginTransaction();
                    $current_date = Carbon::now("America/Mexico_City")->toDateTimeString();
                    DB::insert('insert into reservar_cita (nombre,email,telefono,fecha) values (?,?,?,?)', [$name,$email,$phone,$current_date]);
                    DB::commit();

                    return response()->json(["success" => 200, "message" => "Cita guardada con exito"]);
                } else {
                    return response()->json(["success" => -1, "message" => "Ya hay una cita existente para este correo"]);
                }

            } catch(QueryException $e){
                DB::rollBack();
                return response()->json(["success" => -1, "message" => $e->getMessage()]);
            }
        } else {
            return response()->json(["status"=>-1,"mensaje"=>$validacion->errors()->all()]);
        }
    }

    public function validateParams($request) {
        $rules = [
            "name"=>"required|string",
            "email"=>"required|string|email",
            "phone"=>"required|digits_between:7,10"
        ];
        $messages = [
            "name.required"=>"El campo de Nombre es requerido",
            "email.required"=>"El campo de Email es requerido",
            "phone.required"=>"El campo de Telefono es requerido",
            "email.string"=>"El campo de Email debe ser alfanúmerico",
            "email.email"=>"El formato debe de ser el correcto",
            "phone.digits_between"=>"El campo deberia tener entre 7 y 10 dígitos"
        ];
        $error = Validator::make($request,$rules,$messages);
        return  $error;
    }
}
