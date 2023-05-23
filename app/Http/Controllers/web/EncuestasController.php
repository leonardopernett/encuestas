<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EncuestasController extends Controller
{
    
          
    public function index(Request $request){

      request()->validate([
        "documento" => ["required", "regex:/^[0-9,$]*$/"]
      ]);
     
      $users = DB::connection('jarvis')
              ->select('select * from dp_usuarios_red where documento =?',[$request->documento]);
      
      
      if(empty($users)){
        session()->flash('message','');
        return back()->with('message', 'user is nos register');
      }     
      if($request->tipo_encuesta=='basic')
        return view('web.encuestas_preguntas',["user"=>$users[0]]);
      else
        return view('web.preguntas_rutask',["user"=>$users[0]]);
    }

    public function store(){
    
    }
}
