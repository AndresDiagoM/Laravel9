<?php

namespace App\Http\Controllers;

use App\Models\Post; //Importar el modelo de la tabla posts
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Petición de home
    public function home(Request $request){

        //Recuperar el valor del input de la vista buscar
        $buscar = $request->search;

        //hacer la búsqueda
        $postEncontrados = Post::where('title', 'like', "%$buscar%")
        ->with('user') //traer la información de los uusarios también
        ->latest()->paginate();

        //Hacer la bísqueda de la vista Blog, en Home. Consulta paginada
        $posts = Post::latest()->paginate(); //devuelve una colleccion de objetos

        return view('home', ['posts' => $postEncontrados]);
    }


    //peticion post
    public function post(Post $post){
        //Consulta a base de datos
        //$post = $slug;

        return view('post', ['post' => $post]);
    }

    //peticion buscar
    public function buscar($recibido){
        //Consulta a base de datos con el parametro recibido
        $postEncontrados = Post::where('title', 'like', "%$recibido%")->get();

        return view('home', ['posts' => $postEncontrados]);
    }
}
