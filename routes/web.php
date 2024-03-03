<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoaiVoController;
use App\Models\LoaiVo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/loai-vo', [HomeController::class, 'index']);
Route::get('/chi-tiet-san-pham/{id}', [HomeController::class, 'chi_tiet_san_pham'])->name('chi-tiet-san-pham');
Route::get('/overview/{id}', [HomeController::class, 'overview'])->name('overview');
Route::get('tin-tuc-va-su-kien', [HomeController::class, 'tin_tuc'])->name('tintuc_sukien');
Route::get('chi-tiet-tin-tuc/{id}', [HomeController::class, 'chi_tiet_tin_tuc'])->name('chitiettintuc');
Route::get('dich-vu', [HomeController::class, 'dich_vu'])->name('dich_vu');
Route::get('gioi-thieu', [HomeController::class, 'gioi_thieu'])->name('gioi_thieu');
Route::get('tuyen-dung', [HomeController::class, 'tuyen_dung'])->name('tuyen_dung');
