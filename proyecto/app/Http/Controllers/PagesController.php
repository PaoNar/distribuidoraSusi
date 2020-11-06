<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function fotos($nombre = null)
    {
        return view('fotos', compact('nombre'));
    }


    public function nosotros($nombre= null){
        $grupo= ['camiseta1', 'camiseta2', 'camiseta3'];
    //return view('nosotros', ['grupo'=>$grupo, 'nombre'=>$nombre]);
    //al utilizar compact y la misma variable se encarga de hacerlo por si solo
    return view('nosotros', compact('grupo', 'nombre'));
    }

    public function noticias()
    {
        $blog = App\blog::paginate(4);
        return view('blog', compact('blog'));
    }
}
