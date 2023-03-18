<?php

namespace App\Http\Controllers;

use App\Models\Post; //Importar el modelo de la tabla posts
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Petición de home
    public function home(){

        //Hacer la bísqueda de la vista Blog, en Home. Consulta paginada
        $posts = Post::latest()->paginate(); //devuelve una colleccion de objetos

        return view('home', ['posts' => $posts]);
    }


    //peticion post
    public function post(Post $post){
        //Consulta a base de datos
        //$post = $slug;

        return view('post', ['post' => $post]);
    }

    //peticion buscar
    public function buscar($recibido){
            //Consulta a base de datos
        //return $request->all();

        $request = $recibido;

        return view('buscar', ['request' => $request]);
    }
}
