<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PeticionController;
use App\Http\Controllers\web\languajeController;
use App\Http\Controllers\web\QrController;
use App\Http\Controllers\web\SolicitudController;
use App\Http\Controllers\web\EncuestasController;
use App\Http\Controllers\web\RespuestasController;
use App\Http\Controllers\web\RespuestasrutakController;
use Illuminate\Support\Facades\Session;


Route::redirect('/','quejas_reclamos');

Route::get('quejas_reclamos', [PeticionController::class, 'create'] )->name('quejas');

/* contactos quejas y reclamos */
Route::post('/contact',[ PeticionController::class, 'store' ])->name('contact');

Route::view('mail','web.mail.message');

Route::get('locale/{locale}',function($locale){
    session()->put('locale', $locale);
    return redirect()->back();
    
})->name('locale');

Route::get('/buscar/tipologia/{id}',[PeticionController::class, 'searchTipologia']);

Route::post('search/client',[PeticionController::class,'search'])->name('search');

Route::get('token', function(){
    return ["name"=>"leonardo"];
});


Route::get('/solicitud_carnet', [SolicitudController::class, 'index']);
Route::post('/solicitud_carnet', [SolicitudController::class, 'store'])->name('solicitud');

Route::get('formulario_qr', [QrController::class, 'index']);
Route::post('formulario_qr', [QrController::class, 'send'])->name('qr');


/*  encuesta */
Route::get('/encuestas', function(){
    return view('web.encuesta');
});
Route::post('/encuestas', [EncuestasController::class,'index'])->name('encuestas');

Route::post('/respuestas', [RespuestasController::class,'resp'])->name('respuestas');
/*ENCUESTA RUTAK */
Route::get('/encuestas', function(){
    return view('web.encuesta_rutak');
});
Route::post('/encuestas', [EncuestasController::class,'index'])->name('encuestas');
Route::post('/respuestas_rutask', [RespuestasrutakController::class,'respk'])->name('respuestas_rutask');
