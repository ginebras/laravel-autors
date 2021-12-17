<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nosotros extends Controller{
    
    public function ricarda(){
        return "El controlador devolvio otra funcion nosotres";
    }
    
    
    public function __invoke(){
        return "El controlador ha devuelto la funcion nosotres";
    }


}
