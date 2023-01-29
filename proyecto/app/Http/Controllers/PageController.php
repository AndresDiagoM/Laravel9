<?php

namespace App\Http\Controllers;

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
        $posts = [
            ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
            ['id' => 2, 'title' => 'LARAVEL', 'slug' => 'laravel'],
            ['id' => 3, 'title' => 'JS',      'slug' => 'js'],
        ];

        return view('blog', ['posts' => $posts]);
    }

    //peticion post
    public function post($slug){
        //Consulta a base de datos
        $post = $slug;

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
