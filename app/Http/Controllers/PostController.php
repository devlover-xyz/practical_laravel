<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * method untuk menampilkan data (Read)
     */
    public function index(){
        $posts = Post::all();

        dd($posts);
        // todo return view('post.index');
    }

    /**
     * method untuk menampilkan form insert
     */
    public function create(){
        $post = Post::create([
            'title' => 'Test Title',
            'content' => 'Test Ini Content'
        ]);

        dd($post);
    }

    /**
     * method untuk menghandle request (post) form insert
     * atau untuk menghandle action form insert
     */
    public function store(){

    }

    /**
     * method untuk menampilkan data berdasarkan id
     */
    public function show(){

    }


    /**
     * method untuk menampilkan form edit, berdasarkan id
     */
    public function edit(){

    }

    /**
     * method untuk menhandle request (form) form update
     * atau untuk menhandle action form update
     */
    public function update(){

    }

    /**
     * method untuk menhapus data berdasarkan id
     */
    public function destroy(){

    }



}
