<?php

namespace App\Http\Controllers;
use App\Models\autor;

use Illuminate\Http\Request;

class autorcontroller extends Controller
{
    public function create(){
        $autores=autor::all();

        return view("autores.autores",compact('autores'));
    }

    public function formulario(){
        return view('autores.formulario');
    }

    public function post(Request $req){
       $dato=new autor();

       $dato->nombre=$req->nombre;
       $dato->apellido=$req->apellido;
       $dato->edad=$req->edad;
       $dato->comentario=$req->comentario;

       $dato->save();

       return redirect()->route("autores");
    }

    public function getAutor($id){

        $dato=autor::where("id",$id)->get();

        return view("autores.autor",compact('dato'));
    }

    public function update(Request $req,$id){
        $dato=autor::find($id);

        $dato->nombre=$req->nombre;
        $dato->apellido=$req->apellido;
        $dato->edad=$req->edad;

        if(!$req->comentario==null && !$req->comentario==''){
            $dato->comentario=$req->comentario;
        }
        
        $dato->save();

        return redirect()->route("autores");
    }

    public function delete($id){
        $dato=autor::find($id)->delete();

        return redirect()->route('autores');
    }
}
