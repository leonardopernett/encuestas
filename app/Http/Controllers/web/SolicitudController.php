<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SolicitudController extends Controller
{
    
          
    public function index(){
        $sedes =  DB::connection('mysql')->select('SELECT * FROM tbl_qr_sede');
        $solicitudes =  DB::connection('mysql')->select('SELECT * FROM tbl_qr_tipo_solicitud_carnet');
        return view('web.solicitud',[
            "sedes"=> $sedes,
            "solicitudes"=>$solicitudes
        ]);
    }

    public function store(Request $request){
     request()->validate([
            "cedula" => ["required", "regex:/^[0-9,$]*$/" ],
            "nombre" => ["required","max:100"],
            "solicitud" => ["required"],
            "tipo" => ["required"],
            "sede" => ["required"]
        ]);
     

        DB::connection('mysql')->insert("INSERT INTO tbl_qr_solicitud_carnet(cedula, nombre_completo, solicitud_id, tipo_sangre, sede_id) VALUES(?,?,?,?,?)",[
            $request->cedula, $request->nombre ,$request->solicitud ,$request->tipo ,$request->sede
        ]);

        return back()->with('flash', 'Solicitud registrada exitosamente');
    }
}
