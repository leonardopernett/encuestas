<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class QrController extends Controller
{
    
    public function index(){
        return view('web.qr2');
    }

    public function send(Request $request){
        $data = request()->validate([
          "nombre"      => ["required", "string"],
          "apellido"    => ["required", "string"],
          "cedula"      => ["required", "integer"],
          "indicativo"    => ["required", "integer"],
          "telefono"    => ["required", "integer"],
          "visitantes"     => ["required"],
          "empresa"     => ["required"],
          "cargo"       => ["required"],
          "area"        => ["required"],
          "marca"       => ["required"],
          "serial"      => ["required"]
        ]);
        DB::connection('mysql')
        ->insert("INSERT INTO tbl_qr_encuestas (nombre , apellido, cedula, empresa, cargo, area,  marca, serial) VALUES (?,?,?,?,?,?,?,?) ",
        [ $data['nombre'], $data['apellido'], $data['cedula'], $data['empresa'], $data['cargo'], $data['area'] , $data['marca'],$data['serial']
        ]);

        if($request->visitantes == 'site visit'){
            return back()->with('validator', $request->indicativo. " " .$request->telefono );
        }else{
            return back()->with('flash', '' );
        }
        
        
    }
}
