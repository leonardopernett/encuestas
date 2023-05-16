<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Peticion;

class Peticion extends Model
{
    use HasFactory;


  public static function getData(){
    $solicitud = DB::connection('mysql')->select('select * from tbl_qr_tipos_de_solicitud');
    $areas = DB::connection('mysql')->select('select * from tbl_qr_areas');
    $jarvis = DB::connection('mysql')->select('SELECT  c.cliente  FROM tbl_proceso_cliente_centrocosto c
    GROUP BY c.cliente'); 
    return [
        "solicitud" => $solicitud,
        "areas"     => $areas,
        "jarvis"    => $jarvis
    ];
  }

 
}
