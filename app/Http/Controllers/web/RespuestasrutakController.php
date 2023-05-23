<?php
    namespace App\Http\Controllers\web;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
 
    class RespuestasrutakController extends Controller{
        public function respk(Request $request)
        {

            request()->validate([
                "preg8" => ["required"],
                "preg9" => ["required"],
                "preg10" => ["required"],
                "preg11" => ["required"]
            ]);
           DB::connection('mysql')->insert("INSERT INTO enc_user_encuesta(cedula) VALUES(?)",[
                $request->documento
            ]);
            
           $id_registro =  DB::connection('mysql')->select('select id from enc_user_encuesta where cedula =? ORDER BY id DESC LIMIT 1',[$request->documento]);           
           for($a=8;$a<12;$a++)
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