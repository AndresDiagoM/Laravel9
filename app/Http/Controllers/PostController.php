<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post; //Importar el modelo de la tabla posts

class PostController extends Controller
{
    //vista index
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    //vista create
    public function create(){
        return view('posts.create');
    }

    //vista show
    public function show(){
        return view('posts.show');
    }

    //vista edit
    public function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    //vista update
    public function update(){
        return view('posts.update');
    }

    //vista destroy
    public function destroy(Post $post){
        $post->delete();
        return back();
        //return view('posts.destroy');
    }

}
