<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller{

    public function index() {
        $posts = Post::all();
        //collection 34an 3ndy kol el data
        return PostResource::collection($posts);
    }

    public function show(Post $post){
        // 3l4an mask obj wa7d bas
        return new PostResource($post);
    }

    public function store(StorePostRequest $request){
        $post = Post::create($request->all());
        return new PostResource($post);
    }


}
