<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function createPost() {
        $post = new Post();
        $post->title = "Quick brown fox";
        $post->content = "jumps over the lazy dog";
        $post->save();
        return $post;
    }
}
