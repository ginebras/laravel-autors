<?php

namespace App\Http\Controllers;
use App\Models\autor;

use Illuminate\Http\Request;

class principal extends Controller
{
	public function create(){
        $autores=autor::all();

        return view("autores",compact('autores'));
    }
    
}
