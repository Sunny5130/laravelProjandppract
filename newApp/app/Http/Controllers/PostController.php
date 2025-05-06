<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = [
            'title' => 'Sample Blog Post',
            'author' => 'John Doe',
            'content' => 'This is a simple blog post content.'
        ];

        return view('post.show', compact('post'));
    }
}
?>