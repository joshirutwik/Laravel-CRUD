<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
| 
--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'All working';
});
 Route::get('Read',[PostController::class,'index']);
 Route::view('add','addmember');
 Route::post('add',[PostController::class,'addData']);
 Route::get('delete/{id}',[PostController::class,'Del']);
 Route::get('edit/{id}',[PostController::class,'Edi']);
 Route::post('edit/edit',[PostController::class,'Edit2']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
