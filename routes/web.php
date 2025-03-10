<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/about', function () {
    return view('about');
});
*/
Route::view('/about','about');

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[HomeController::class,'home'] )->name('home');


Route::get('/show/{id}/{book?}', [HomeController::class , "blog"])->name("blog");



