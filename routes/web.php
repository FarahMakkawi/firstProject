<?php

use Illuminate\Support\Facades\Route; // متل مكتبة مشان استخدم الراوت 
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProductController;


// الهدف هوي التوجيه عاي كونترولر بدي روح 

// Route::get('/', function () {
//     return view('welcome');
// });


//get جلب 
//post تخزين 
//put تعديل البيانات 
//delete حذف البيانات 

// Route::prefix('/product')->get('/index', function () {
//     return 'hello ';
// });


Route::get('/', [Homecontroller::class,'index']);


Route::get('/test/{id?}/{name?}', [Homecontroller::class,'test']);



// Route::prefix('/product')->group(function () {
// Route::get('/index',function(){
//     return "hello";
// });
// });

// php artisan make:controller Homecontroller اذا بدي اعمل كونترولر من التيرمينال 




Route::prefix('/product')->group(function () {
    Route::get('/store',[ProductController::class,'store']);
    Route::get('/update',[ProductController::class,'update']);
    Route::get('/delete',[ProductController::class,'delete']);
    Route::get('/index',[ProductController::class,'index']);
});

//create view : php artisan make:view name

// Route::view('/','master');