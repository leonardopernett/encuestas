<?php
    namespace App\Http\Controllers\web;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
 
    class RespuestasController extends Controller{
        public function resp(Request $request)
        {

            request()->validate([
                "preg1" => ["required"],
                "preg2" => ["required"],
                "preg3" => ["required"],
                "preg4" => ["required"],
                "preg5" => ["required"],
                "preg6" => ["required"],
                "preg7" => ["required"]
            ]);
           DB::connection('mysql')->insert("INSERT INTO enc_user_encuesta(cedula) VALUES(?)",[
                $request->documento
            ]);
            
           $id_registro =  DB::connection('mysql')->select('select id from enc_user_encuesta where cedula =? ORDER BY id DESC LIMIT 1',[$request->documento]);           
           for($a=1;$a<8;$a++)
            {                    
                $data ="preg".$a;                               
                 DB::connection('mysql')->insert("INSERT INTO enc_user_respuesta_encuestas(id_user,respuesta,id_pregunta) VALUES(?,?,?)",[
                    $id_registro[0]->id,$request->$data,$a
                ]);
            }
            session()->flash("message2","");
           return back()->with('flash', 'Solicitud registrada exitosamente');
    
        }
    }
?>