<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigupController;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','home.app');

// Route::get('/product/{id}', function(string $id){
//     return "Product ID =$id";}
// );
// Route::get('/product/{category?}' , function(string $category = null){
//     return "Product for category=$category";
//     }
// );

// Route::get('/product/{id}', function(string $id){
//     return "work!? $id";
//     }
// )-> whereNumber('id');

// Route::get('/dc/{bk}', function (string $bk){
//     return "bk ; $bk";
// }) -> where('bk', '[a-z]+');

// Route::get('{id}/thana/{lang}', function(string $id, string $lang){
//     return "language=$lang";
// }) -> whereNumber(['id'=> '\d{4,}', 'lang'=> '[a-z]{2}']);

// Route::get('/tree/{search}', function(string $search){
//     return "search : $search";
// })->where('search', '.+');

// Route::get('/' ,function (){
//     // return view('welcome');

//     $previewurl = route('about');

//     dd($previewurl);

//     return view('welcome');
// });

// Route::view('/about-us','about')->name('about');

// //route Group route

// Route::prefix('/admin')->group(function (){
//     Route::get('/user', function (){
//         return '/admin/user';
//     });
// });

// Route::name('admin.') -> group(function (){
//     Route::get('/user', function (){
//         return '/user';
//     })->name('user');
// });

// Route::fallback(function () {
//     return view('errors');
// });

Route::view('/', 'home.index');

Route::get('/sigup', [SigupController::class, 'create'])->name('sigup');
Route::get('/login',[LoginController::class, 'create'])->name('login');

Route::get('/car/search', [CarController::class, 'search'])-> name('car.search');
Route::resource('car', CarController::class);

Route::get('/',[HomeController::class , 'index'])->name('home');