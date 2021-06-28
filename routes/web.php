<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HasilVoteController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\VoteController;

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', function(){
    return redirect('admin/mahasiswa');
})->name('home');
Route::get('Logout',function(){
    \Auth::logout();
    return redirect('login');
});
Route::group(['middleware' => ['role:admin']], function () {
    Route::prefix('/admin')->group(function(){
        Route::get('beranda', [BerandaController::class,'index']);
        Route::get('mahasiswa', [MahasiswaController::class,'index']);
        Route::get('mahasiswa/tambah', [MahasiswaController::class,'create']);
        Route::post('mahasiswa/add', [MahasiswaController::class,'store']);
        Route::get('mahasiswa/edit/{id}', [MahasiswaController::class,'edit']);
        Route::put('mahasiswa/edit/{id}', [MahasiswaController::class,'update']);
        Route::get('mahasiswa/delete/{id}',[MahasiswaController::class,'delete']);
        Route::get('mahasiswa/detail/{nim}', [MahasiswaController::class,'Detail']);
        Route::get('hasil_vote',[HasilVoteController::class,'index']);
        Route::get('paslon', [PaslonController::class,'index']);
        Route::get('paslon/tambah', [PaslonController::class,'create']);
        Route::post('paslon/tambah', [PaslonController::class,'store']);
        Route::get('paslon/edit/{id}',[PaslonController::class,'edit']);
    });

});
Route::group(['middleware' => ['role:user']], function () {
    Route::get('vote', [VoteController::class,'index'])->name('vote');
    Route::post('vote/mhsw', [VoteController::class,'store']);
});
