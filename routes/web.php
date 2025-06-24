<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
//--- protected from middleware
Route::get('/member', [IndexController::class, 'index'])->middleware('guard');
Route::get('/group', [IndexController::class, 'group'])->middleware('guard');

//------------------------///

Route::get('profile',function () {
    return "wellcome to profile";
});

Route::get('login',function(){
    session()->put('user_id', 1);
    return redirect('/');
});

Route::get('logout',function(){
    session()->forget('user_id',);
    return redirect('/');
});

Route::get('/no-access', function () {
    echo "You don't have access to this page";
    die;
});

Route::get('/', function () {
    return view('welcome');
});
