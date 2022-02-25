<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function getPost(Post $post){ // Informando, Post é uma forma de validação, verificando se existe um Post, se n retorna 'not found'
        return response()->json($post);
    }   

    public function getPosts(){
        $posts = Post::paginate(5); //quantidade de dados por página
        // return response()->json($posts);
        return view('posts',compact(['posts']));
    }
}
