<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //vista index
    public function index(){
        return view('posts.index');
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
    public function edit(){
        return view('posts.edit');
    }

    //vista update
    public function update(){
        return view('posts.update');
    }

    //vista destroy
    public function destroy(){
        return view('posts.destroy');
    }

}
