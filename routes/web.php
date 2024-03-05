<?php

use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_home');
    Route::get('/loai-vo', [AdminController::class, 'loai_vo'])->name('admin_loai_vo');
    Route::post('/post-loai-vo', [AdminController::class, 'post_loai_vo'])->name('admin_post_loai_vo');
    Route::put('/update-loai-vo', [AdminController::class, 'put_loai_vo'])->name('admin_put_loai_vo');
    Route::get('/delete-loai-vo/{id}', [AdminController::class, 'delete_loai_vo'])
        ->name('admin_delete_loai_vo');
});
