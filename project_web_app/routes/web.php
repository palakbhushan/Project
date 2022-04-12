<?php
use App\Http\Controllers\sendmail;
use Illuminate\Support\Facades\Route;
// use App\Http\controllers\BookController;
use App\Http\controllers\BookController;
use App\Http\controllers\authController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('senddata',[sendmail::class,'index1']);


//auth controllers
Route::get('/login',[authController::class,'login']);
Route::get('/signup',[authController::class,'signup']);
//route name for post register is  ->  reguser
Route::post('reguser',[authController::class,'regUser'])->name('reguser');
Route::post('loguser',[authController::class,'logUser'])->name('loguser');


Route::get('/home',[authController::class,'home']);

Route::get('index', function () {
    return view('index');
});