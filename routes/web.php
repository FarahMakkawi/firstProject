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


Route::get('/', [Homecontroller::class,'index'])->name('home');


//Route::get('/test/{id?}/{name?}', [Homecontroller::class,'test']);



// Route::prefix('/product')->group(function () {
// Route::get('/index',function(){
//     return "hello";
// });
// });

// php artisan make:controller Homecontroller اذا بدي اعمل كونترولر من التيرمينال 




Route::prefix('/product')->group(function () {
Route::get('/index',[ProductController::class,'index'])->name('product.index');
Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/create',[ProductController::class,'create'])->name('product.create');
Route::post('/store',[ProductController::class,'store'])->name('product.store');
Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');

// Route::get('/info',[ProductController::class,'info'])->name('product.info');


    

});

//create view : php artisan make:view name

// Route::view('/','master');

