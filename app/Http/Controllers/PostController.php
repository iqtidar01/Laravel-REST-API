<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function display(Post $post)
    {
        $status_code = '200';
        if (!$post) {
            $status_code = '404';
        }
        $result = array(
            'status_code' => $status_code,
            'data' => $post,
        );
        return response()->json($result);

    }

    public function save(Request $request)
    {
        $post = Post::create($request->all());

        $status_code = '200';
        if (!$post) {
            $status_code = '500';
        }
        $result = array(
            'status_code' => $status_code,
            'data' => $post,
        );

        return response()->json($result);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        $status_code = '200';
        if (!$post) {
            $status_code = '500';
        }
        $result = array(
            'status_code' => $status_code,
            'data' => $post,
        );

        return response()->json($result);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}
