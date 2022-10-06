<?php

use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

    $post = Post::first();

    dd(
        $post->created_at->toDateTimeString(),
        $post->created_at->addMonth()->toDateTimeString(),
    );
});


Route::get('/ckeditor-back', function () {

    return view("ckeditor.backend");
});

Route::get('/ckeditor-front', function () {

    return view("ckeditor.frontend");
});
