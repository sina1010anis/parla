<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pay\PayController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Comment\CommentController;


Route::prefix('/')->group(function (){
    Route::get('', [IndexController::class , 'index'])->name('index');
    Route::post('/search/menu/header', [IndexController::class , 'searchHeaderMenu']);
    Route::get('/logout', function (){
        auth()->logout();
    });
});
Route::prefix('/product')->as('product')->group(function (){
    Route::get('/{slug}', [ProductController::class , 'show'])->name('.show');
    Route::post('/send/size', [ProductController::class , 'sendSize'])->name('.send.size');
    Route::post('/comment/{idProduct}', [CommentController::class , 'newComment'])->name('.new.comment');
    Route::post('/save', [ProductController::class , 'saveProduct'])->name('.save.product');
    Route::post('/save/delete', [ProductController::class , 'saveDeleteProduct'])->name('.save.delete.product');
    Route::post('/save/card', [ProductController::class , 'saveCard'])->name('.save.card');
    Route::post('/new/comment', [CommentController::class , 'newCommentReply'])->name('.new.comment.reply');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [PayController::class, 'test'])->name('test');
Route::get('/send', [PayController::class, 'send'])->name('send');
