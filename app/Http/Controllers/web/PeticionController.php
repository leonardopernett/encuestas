<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Mail\PeticionMailer;
use App\Mail\ClienteMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Peticion;
use Illuminate\Support\Arr;


class PeticionController extends Controller


{

    public function __construct(){
             
    }


     public function create(){

      
          header("X-Powered-By:");
          header("Cache-Control: no-cache,no-store, must-revalidate");
          header("X-Content-Type-Options:nosniff");
          header("Pragma: no-cache");
          $value = Peticion::getData();

          return view('web.peticion',[ 
            'solicitud' =>  $value["solicitud"],
            'areas'     =>  $value["areas"],
            'jarvis'    =>  $value["jarvis"]
            ]);
     }
     public function store(Request $request){
  
      
        
     $email = DB::connection('mysql')->select('SELECT * FROM tbl_hojavida_datapersonal WHERE email=?',[$request->email]);
   
           request()->validate([
              "tipo"            => ["required"],
             
              "nombre"          => ["required", "max:80"],
              "identificacion"  => ["required", "max:20", "regex:/^[0-9,$]*$/"],
              "email"           => ["required", "max:100", "regex:/^\S+@\S+\.\S+$/"],
              "cliente"         => "required",
              'message'         => 'required | max:150',
              'autorizacion'    => 'required',
              'file'            => 'mimes:pdf, xlsx,xls,doc,docx,png,jpg,jpeg,ppt,rar,zip  | max:10000',
             

           ]);

           $recaptch = $request->input('g-recaptcha-response');

           if(isset($recaptch)){ 

            $res = DB::connection('mysql')->select('SELECT COUNT(*) as total FROM tbl_qr_casos');
    
            $id_solicitud  =  $request->tipo;
         
            $documento     =  $request->identificacion;
            $nombre        =  $request->nombre;
            $correo        =  $request->email;
            $id_cliente    =  $request->cliente;
            $message       =   $request->message;
            $numero_caso   =  'C-' .( $res[0]->total + 1);
            $id_estado_caso     =  1;

            $email = DB::connection('mysql')->select('SELECT * FROM tbl_hojavida_datapersonal WHERE email=?',[$request->email]);
            if(empty($email)){
               return back()->with('flash', 'a');
            }
      
            DB::connection('mysql')->insert('insert into tbl_qr_casos (id_solicitud, id_area, id_tipologia, comentario, documento, nombre, correo, cliente, numero_caso, id_estado_caso) values (?,?,?,?,?,?,?,?,?,?)',[
              $id_solicitud, null, null, $message, $documento, $nombre, $correo, $id_cliente , $numero_caso,  $id_estado_caso  
            ]);

            $object = DB::connection('mysql')->select('SELECT last_insert_id() as id');

            if( $request->file('file1') ){
              $file = time() ."." . $request->file('file1')->extension();
              $request->file('file1')->move(public_path("uploads"), $file);
              $filename= "/uploads/". $file;
              DB::connection('mysql')->update("UPDATE tbl_qr_casos set archivo = ? where id=?",[$filename, $object[0]->id]);
            }


            /*  Mail::to('leonardo.pernett@grupokonecta.com')->send(new PeticionMailer($numero_caso)); */

            return back()->with('message', 's'); 
           }else {
              return back()->with('rechapcha', 's');
           }
            

     }

   /*   public function searchTipologia($id){
       $json = DB::connection('mysql')->select('SELECT id, tipologia FROM tbl_qr_tipologias t WHERE t.id_areas = ?',[$id]);
       return response()->json($json,200);
    }
  */

    /*  public function searchclient(Request $request){
         $clientes  = DB::connection('mysql')->select('select * from tbl_qr_clientes');
         return $clientes;
     } */

    public function search(Request $request){
       $clientes = DB::connection('mysql')->select('SELECT distinct cliente from tbl_hv_infopersonal');
       return $clientes;
    }
}
 