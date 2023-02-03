<?php

namespace App\Http\Controllers;

use App\Models\Post; //Importar el modelo de la tabla posts
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Petición de home
    public function home(){
        return view('home');
    }

    //peticion blog
    public function blog(){
        //Consulta a base de datos
        $posts = Post::get(); //Obtener todos los registros de la tabla posts
        //$posts = Post::first(); //Obtener el primer registro de la tabla posts
        //$posts = Post::find(25); //Obtener el registro con id 25 de la tabla posts

        //Cuando traemos solo un resultado se usa:
        //dd($posts);

        //Consulta paginada
        $posts = Post::latest()->paginate(); //devuelve una colleccion de objetos

        return view('blog', ['posts' => $posts]);
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
