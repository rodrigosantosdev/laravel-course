<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('home');
});

// rota de crate - nao esqueça de importar o controller
Route::get('/posts/create', [PostController::class, 'create']);

// rota para pegar um post pelo id
Route::get('/posts/postId', [PostController::class, 'postId']);

// rota para pegar todos os posts.
Route::get('/posts/allposts', [PostController::class, 'allposts']);

// rota para atualizar post pelo id
Route::get('/posts/update', [PostController::class, 'update']);

// rota para deletar um post.
Route::get('/posts/delete', [PostController::class, 'delete']);