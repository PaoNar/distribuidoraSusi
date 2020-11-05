<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function fotos(){
        return view('fotos');
    }

    public function nosotros($nombre= null){
        $grupo= ['camiseta1', 'camiseta2', 'camiseta3'];
    //return view('nosotros', ['grupo'=>$grupo, 'nombre'=>$nombre]);
    //al utilizar compact y la misma variable se encarga de hacerlo por si solo
    return view('nosotros', compact('grupo', 'nombre'));
    }

    public function noticias(){
        return view('blog');
    }
}
