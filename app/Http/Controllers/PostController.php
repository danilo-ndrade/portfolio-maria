<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function newPublication(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required', 
            'body' => 'required',
            'external-link' => 'required',
            'post-date' => 'required',
            'post-local' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['external-link'] = strip_tags($incomingFields['external-link']);
        $incomingFields['post-date'] = strip_tags($incomingFields['post-date']);
        $incomingFields['post-local'] = strip_tags($incomingFields['post-local']);
        $incomingFields['user_id'] = auth()->id();
        
        Post::create($incomingFields);
        return 'teste';
    }
    public function deletePublication() {

    }
}
