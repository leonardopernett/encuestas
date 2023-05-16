<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class LanguajeController extends Controller
{
    

    public function index($locale){
      
        return redirect()->back();
    }
}
