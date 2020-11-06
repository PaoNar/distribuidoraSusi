<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/',[PagesController::class, 'inicio'])->name('inicio');
//Route::get('/', function(){
  //  return view('welcome');
//})


// Route::get('fotos/{numero?}',function($numero= 'sin numero'){
  //  return ('galeria:'.$numero);
//})->where('numero', '[0-9]+');

//Route::view('galeria','fotos', ['numero'=> 125 ]);      

Route::get('/fotos', [PagesController::class, 'fotos'])->name('foto');
//Route::get('/fotos', function(){
   // return view('fotos');
    //se coloca nombre para poder llamar a la pagina desde otra pagina
//})->name('foto');

Route::get('/blog', [PagesController::class, 'noticias'])->name('noticias');

//Route::get('/blog', function(){
  //  return view('blog');
//})->name('noticias');


Route::get('/nosotros/{nombre?}',[PagesController::class, 'nosotros'] )->name('nosotros');
//Route::get('/nosotros/{nombre?}', function($nombre = null){
   // $grupo= ['camiseta1', 'camiseta2', 'camiseta3'];
    //return view('nosotros', ['grupo'=>$grupo, 'nombre'=>$nombre]);
    //al utilizar compact y la misma variable se encarga de hacerlo por si solo
   // return view('nosotros', compact('grupo', 'nombre'));

//})->name('nosotros');