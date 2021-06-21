<?php

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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/pengumuman', function () {
    return view('frontend.nisn_check');
});
Route::get('/graduation', function () {
    return view('frontend.graduation');
});
Route::post('/pengumuman/hasil', 'FrontEndController@cekPengumuman')->name('cek.pengumuman');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', 'HomeController@index');
        Route::resources([
            'grades'    => GradeController::class,
            'students'  => StudentController::class,
            'teachers'  => TeacherController::class,
            'users'     => UserController::class,
        ]);
    });
});