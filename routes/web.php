<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pay\PayController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\Category\CategoryController;
use App\Http\Controllers\Product\Comment\CommentController;
use App\Http\Controllers\Product\Card\CardController;
use App\Http\Controllers\User\UserController;
use \App\Http\Controllers\User\UserNewController;
use \App\Http\Controllers\Admin\AdminController;


Route::prefix('/')->group(function (){
    Route::get('', [IndexController::class , 'index'])->name('index');
    Route::post('/search/menu/header', [IndexController::class , 'searchHeaderMenu']);
    Route::get('/about' , [IndexController::class , 'aboutWe'])->name('.about');
    Route::get('/category/{slug}' , [CategoryController::class , 'index'])->name('category.show');
});
Route::prefix('/product')->as('product')->group(function (){
    Route::get('/{slug}', [ProductController::class , 'show'])->name('.show');
    Route::post('/send/size', [ProductController::class , 'sendSize'])->name('.send.size');
    Route::post('/search', [ProductController::class , 'searchProduct'])->name('.search.product');
    Route::post('/comment/{idProduct}', [CommentController::class , 'newComment'])->name('.new.comment');
    Route::post('/new/comment', [CommentController::class , 'newCommentReply'])->name('.new.comment.reply');

    Route::prefix('/save')->group(function (){
        Route::post('/', [ProductController::class , 'saveProduct'])->name('.save.product');
        Route::post('/delete', [ProductController::class , 'saveDeleteProduct'])->name('.save.delete.product');
        Route::post('/card', [CardController::class , 'saveCard'])->name('.save.card');
    });

    Route::prefix('/delete')->middleware('auth')->group(function (){
        Route::post('/card', [CardController::class , 'deleteCard'])->name('.delete.card');
    });

});

Route::prefix('/user')->as('user')->middleware('auth')->group(function(){
    Route::get('/tracking' , [UserController::class , 'tracking'])->name('.tracking');
    Route::get('/cart' , [UserController::class , 'cart'])->name('.cart');
    Route::get('/address' , [UserController::class , 'address'])->name('.address');
    Route::get('/custom' , [UserController::class , 'custom'])->name('.custom');
    Route::get('/calculator' , [UserController::class , 'calculator'])->name('.calculator');
    Route::get('/support' , [UserController::class , 'support'])->name('.support');
    Route::get('/profile' , [UserController::class , 'profile'])->name('.profile');
    Route::get('/save' , [UserController::class , 'save'])->name('.save');
    Route::get('/message' , [UserController::class , 'message'])->name('.message');
    Route::prefix('/new')->as('.new')->group(function (){
        Route::post('/comment/support' , [UserNewController::class , 'index'])->name('.support');
        Route::post('/address' , [UserController::class , 'newAddress'])->name('.address');
        Route::post('/factor' , [PayController::class , 'newFactor'])->name('.factor');
        Route::post('/custom' , [UserController::class , 'newCustom'])->name('.custom');
    });
    Route::prefix('edit')->as('.edit')->group(function(){
        Route::post('/profile' , [UserController::class , 'editProfile'])->name('.profile');
        Route::post('/address' , [UserController::class , 'editAddress'])->name('.address');
    });
    Route::get('/send/buy' , [PayController::class , 'send'])->name('.send');
    Route::get('/verify/buy' , [PayController::class , 'verify'])->name('.verify');
    Route::post('/view/factor' , [UserController::class , 'viewFactor'])->name('.view.factor');
});

Route::prefix('/admin')->middleware(['auth' , 'check'])->as('admin')->group(function (){
    Route::get('/' , [AdminController::class , 'index'])->name('.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
