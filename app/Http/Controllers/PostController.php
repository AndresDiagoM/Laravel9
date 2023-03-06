<?php

namespace App\Http\Controllers;

use App\Models\Post; //Importar el modelo de la tabla posts

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    //vista index
    public function index(){
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    //vista create
    public function create(Post $post){
        return view('posts.create', ['post' => $post]);
    }

    //vista store
    public function store(Request $request){
        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);
        //es con user porque el post pertenece a un usuario

        return redirect()->route('posts.edit', $post);
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
    public function update(Request $request, Post $post){

        $post->update([
            'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,
        ]);
        //Funcion de editar post

        return redirect()->route('posts.edit', $post);
    }

    //vista destroy
    public function destroy(Post $post){
        $post->delete();
        return back();
        //return view('posts.destroy');
    }

}
