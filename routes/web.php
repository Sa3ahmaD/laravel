<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'App\Http\Controllers\MainController@sayHi');
// Route::get('/', [MainController::class, 'welcome']);
// Route::get('/features', [MainController::class, 'features']);
// Route::get('/contact', [MainController::class, 'contact']);
// Route::get('/people', [MainController::class, 'allPeople']);
// Route::get('/test', [MainController::class, 'showPosts']);
// Route::get('/form', [FormController::class, 'displayForm'])->name("form.create");
// Route::post('/save', [FormController::class, 'saveForm'])->name("form.save");

Route::get('/', [PostController::class, 'createPost'])->name("post.create");















// Route::get('users/{name}', function ($name) {
//     // echo 'hi';
//     // return 'hi';
//     return view('info', [
//         'name' =>$name
//     ]);
// });

// Route::get('users/{name}', function ($name) {
//     $name = ucwords($name);
//     echo "hi {$name}";
// });

// Route::get('greet/{greeting}/{name}', function ($greeting,$name) {
//     echo "{$greeting} {$name}";
// });

// Route::post('say', function (Request $request) {
//     $name = $request->post('name');
//     // return $name;

//     return view('info', [
//         'name' =>$name
//     ]);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
