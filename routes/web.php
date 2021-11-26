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
use \App\Http\Controllers\Admin\AdminView\AdminViewController;
use \App\Http\Controllers\Admin\AdminView\AdminDeleteController;
use \App\Http\Controllers\Admin\AdminView\AdminEditController;
use \App\Http\Controllers\Admin\AdminNewController;
use \App\Http\Controllers\Admin\AdminUpdateController;

Route::get('/tt' , [IndexController::class , 'test']);

Route::get('/verify', [ProductController::class , 'verifyMobile'])->name('verify.mobile');

Route::post('/verify/check', [ProductController::class , 'verifyMobileCheck'])->name('verify.mobile.check');

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

Route::prefix('/user')->as('user')->middleware(['auth' , 'verify_mobile'])->group(function(){
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
        Route::post('/support/file' , [UserController::class , 'newSupportFile'])->name('.support.file');
    });
    Route::prefix('edit')->as('.edit')->group(function(){
        Route::post('/profile' , [UserController::class , 'editProfile'])->name('.profile');
        Route::post('/address' , [UserController::class , 'editAddress'])->name('.address');
    });
    Route::prefix('delete')->as('.delete')->group(function (){
        Route::post('/address'  , [UserController::class , 'deleteAddress'])->name('.address');
    });
    Route::get('/send/buy' , [PayController::class , 'send'])->name('.send');
    Route::get('/verify/buy' , [PayController::class , 'verify'])->name('.verify');
    Route::post('/view/factor' , [UserController::class , 'viewFactor'])->name('.view.factor');
});

Route::prefix('/admin')->middleware(['auth' , 'check'])->as('admin')->group(function (){
    Route::get('/' , [AdminController::class , 'index'])->name('.index');
    Route::prefix('/view')->as('.view')->group(function(){
        Route::post('/users' , [AdminViewController::class , 'viewUser'])->name('.user');
        Route::get('/color' , [AdminViewController::class , 'viewColor'])->name('.color');
        Route::post('/factor' , [AdminViewController::class , 'factorUser'])->name('.factor');
        Route::post('/support' , [AdminViewController::class , 'viewSupport'])->name('.support');
        Route::get('/about' , [AdminViewController::class , 'viewAbout'])->name('.about');
        Route::get('/logo' , [AdminViewController::class , 'viewLogo'])->name('.logo');
        Route::get('/menu' , [AdminViewController::class , 'viewMenu'])->name('.menu');
        Route::get('/sub_menu' , [AdminViewController::class , 'viewSubMenu'])->name('.subMenu');
        Route::get('/banner/up' , [AdminViewController::class , 'viewBannerUp'])->name('.bannerUp');
        Route::get('/banner/slider' , [AdminViewController::class , 'viewBannerSlider'])->name('.bannerSlider');
        Route::get('/banner/center' , [AdminViewController::class , 'viewBannerCenter'])->name('.bannerCenter');
        Route::get('/banner/end' , [AdminViewController::class , 'viewBannerEnd'])->name('.bannerEnd');
        Route::get('/slider/end' , [AdminViewController::class , 'viewSlider'])->name('.slider');
        Route::get('/slider/menu' , [AdminViewController::class , 'viewSliderMenu'])->name('.slider.menu');
        Route::get('/slider/login' , [AdminViewController::class , 'viewSliderLogin'])->name('.slider.login');
        Route::get('/product' , [AdminViewController::class , 'viewProduct'])->name('.product');
        Route::post('/size/product/product' , [AdminViewController::class , 'viewSizeProduct'])->name('.product.size');
        Route::post('/product/image' , [AdminViewController::class , 'viewProductImage'])->name('.product.image');
        Route::post('/product/color' , [AdminViewController::class , 'viewProductColor'])->name('.product.color');
        Route::get('/productT' , [AdminViewController::class , 'viewProductT'])->name('.productT');
        Route::get('/item' , [AdminViewController::class , 'viewItem'])->name('.item');
        Route::get('/box/footer' , [AdminViewController::class , 'viewBoxFooter'])->name('.box.footer');
        Route::get('/link/footer' , [AdminViewController::class , 'viewLinkFooter'])->name('.link.footer');
        Route::get('/item/footer' , [AdminViewController::class , 'viewItemFooter'])->name('.item.footer');
        Route::get('/users' , [AdminViewController::class , 'viewUsers'])->name('.users');
        Route::get('/message/product' , [AdminViewController::class , 'viewMessageProduct'])->name('.message.product');
        Route::get('/message/support' , [AdminViewController::class , 'viewMessageSupport'])->name('.message.support');
        Route::get('/state' , [AdminViewController::class , 'viewState'])->name('.state');
        Route::get('/city' , [AdminViewController::class , 'viewCity'])->name('.city');
        Route::get('/free/send' , [AdminViewController::class , 'viewFreeSend'])->name('.free.send');
        Route::get('/factor' , [AdminViewController::class , 'viewFactor'])->name('.factor.page');
        Route::post('/attr/product' , [AdminViewController::class , 'viewAttrProduct'])->name('.attr.product');
    });
    Route::prefix('/delete')->as('.delete')->group(function(){
        Route::post('/users' , [AdminDeleteController::class , 'deleteUser'])->name('.user');
        Route::post('/menu' , [AdminDeleteController::class , 'deleteMenu'])->name('.menu');
        Route::post('/slider' , [AdminDeleteController::class , 'deleteSlider'])->name('.slider');
        Route::post('/slider/menu' , [AdminDeleteController::class , 'deleteSliderMenu'])->name('.slider.menu');
        Route::post('/slider/login' , [AdminDeleteController::class , 'deleteSliderLogin'])->name('.slider.login');
        Route::post('/sub/menu' , [AdminDeleteController::class , 'deleteSubMenu'])->name('.sub.menu');
        Route::post('image/banner/center' , [AdminDeleteController::class , 'deleteImageBannerCenter'])->name('.image.banner.center');
        Route::post('/product' , [AdminDeleteController::class , 'deleteProduct'])->name('.product');
        Route::post('/size' , [AdminDeleteController::class , 'deleteSize'])->name('.size');
        Route::post('/image' , [AdminDeleteController::class , 'deleteImage'])->name('.image');
        Route::post('/product/color' , [AdminDeleteController::class , 'deleteColorProduct'])->name('.color.product');
        Route::post('/color' , [AdminDeleteController::class , 'deleteColor'])->name('.color');
        Route::post('/item' , [AdminDeleteController::class , 'deleteItem'])->name('.item');
        Route::post('/box/footer' , [AdminDeleteController::class , 'deleteBoxFooter'])->name('.box.footer');
        Route::post('/link/footer' , [AdminDeleteController::class , 'deleteLinkFooter'])->name('.link.footer');
        Route::post('/item/footer' , [AdminDeleteController::class , 'deleteItemFooter'])->name('.item.footer');
        Route::post('/state' , [AdminDeleteController::class , 'deleteState'])->name('.state');
        Route::post('/city' , [AdminDeleteController::class , 'deleteCity'])->name('.city');
        Route::post('/cart' , [AdminDeleteController::class , 'deleteCart'])->name('.cart');
        Route::post('/attr' , [AdminDeleteController::class , 'deleteAttr'])->name('.attr');
    });
    Route::prefix('/edit')->as('.edit')->group(function (){
        Route::post('/status/order' , [AdminEditController::class , 'editStatusOrder'])->name('.status.order');
        Route::post('/product/{id}' , [AdminEditController::class , 'editProduct'])->name('.product');
        Route::post('/status/product' , [AdminEditController::class , 'editStatusProduct'])->name('.status.product');
        Route::get('/product/all/{id}' , [AdminEditController::class , 'editProductAll'])->name('.product.all');
        Route::post('/about' , [AdminEditController::class , 'editAbout'])->name('.about');
        Route::post('/status/productT' , [AdminEditController::class , 'editStatusProductT'])->name('.status.productT');
        Route::post('/logo' , [AdminEditController::class , 'editLogo'])->name('.logo');
        Route::post('/menu' , [AdminEditController::class , 'editMenu'])->name('.menu');
        Route::post('/menu/name' , [AdminEditController::class , 'editMenuName'])->name('.menu.name');
        Route::post('/status/comment' , [AdminEditController::class , 'editStatusComment'])->name('.status.comment');
        Route::post('/sub/menu' , [AdminEditController::class , 'editSubMenu'])->name('.sub.menu');
        Route::post('/free/send' , [AdminEditController::class , 'editFreeSend'])->name('.free.send');
        Route::post('/sub/menu/name' , [AdminEditController::class , 'editSubMenuName'])->name('.sub.menu.name');
        Route::post('/pass/user' , [AdminEditController::class , 'editPasswordUser'])->name('.password.user');
        Route::post('/state' , [AdminEditController::class , 'editState'])->name('.state');
        Route::post('/bannerUp/{model}/{target}' , [AdminEditController::class , 'editBannerUp'])->name('.bannerUp');
    });
    Route::prefix('/new')->as('.new')->group(function (){
        Route::post('/support' , [AdminNewController::class , 'newSupport'])->name('.support');
        Route::post('/product' , [AdminNewController::class , 'newProduct'])->name('.product');
        Route::post('/menu' , [AdminNewController::class , 'newMenu'])->name('.menu');
        Route::post('/image/about' , [AdminNewController::class , 'newImageAbout'])->name('.image.about');
        Route::post('/sub/menu' , [AdminNewController::class , 'newSubMenu'])->name('.sub.menu');
        Route::post('/banner' , [AdminNewController::class , 'newBanner'])->name('.banner');
        Route::post('/slider' , [AdminNewController::class , 'newSlider'])->name('.slider');
        Route::post('/slider/menu' , [AdminNewController::class , 'newSliderMenu'])->name('.slider.menu');
        Route::post('/slider/login' , [AdminNewController::class , 'newSliderLogin'])->name('.slider.login');
        Route::post('/size' , [AdminNewController::class , 'newSize'])->name('.size');
        Route::post('/product/image' , [AdminNewController::class , 'newImage'])->name('.image.product');
        Route::post('/product/color' , [AdminNewController::class , 'newProductColor'])->name('.product.color');
        Route::post('/color' , [AdminNewController::class , 'newColor'])->name('.color');
        Route::post('/item' , [AdminNewController::class , 'newItem'])->name('.item');
        Route::post('/box/footer' , [AdminNewController::class , 'newBoxFooter'])->name('.box.footer');
        Route::post('/link/footer' , [AdminNewController::class , 'newLinkFooter'])->name('.link.footer');
        Route::post('/item/footer' , [AdminNewController::class , 'newItemFooter'])->name('.item.footer');
        Route::post('/comment/support' , [AdminNewController::class , 'newCommentSupport'])->name('.comment.support');
        Route::post('/state' , [AdminNewController::class , 'newState'])->name('.state');
        Route::post('/city' , [AdminNewController::class , 'newCity'])->name('.city');
        Route::post('/attr' , [AdminNewController::class , 'newAttr'])->name('.attr');
        Route::post('/video/about' , [AdminNewController::class , 'newVideoAbout'])->name('.video.about');
        Route::post('/support/file' , [AdminNewController::class , 'newSupportFile'])->name('.support.file');
        Route::post('/image/product/{id}' , [AdminNewController::class , 'newImageProduct'])->name('.image.productA');
    });
    Route::prefix('/update')->as('update')->group(function (){
        Route::post('/support' , [AdminUpdateController::class , 'updateSupport'])->name('.support');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth' , 'verify_mobile'])->name('home');
