<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NhaxbController;
use App\Http\Controllers\DichvuController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\DashbroadController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrangchuController;
use App\Models\nhaxb;
use App\Models\sach;
use App\Http\Controllers\Backend\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
Route::middleware('auth:admin')->group(function(){
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.des');
});
require __DIR__.'/adminauth.php';
//nhaxb
Route::get('/nhaxb',[NhaxbController::class,'index'])->name('nhaxb.index');
Route::get('/nhaxb/create',[NhaxbController::class,'create'])->name('nhaxb.create');
Route::post('/nhaxb',[NhaxbController::class,'store'])->name('nhaxb.store');
Route::get('/nhaxb/{nhaxb}/edit',[NhaxbController::class,'edit'])->name('nhaxb.edit');
Route::put('/nhaxb/{nhaxb}/update',[NhaxbController::class,'update'])->name('nhaxb.update');
Route::delete('/nhaxb/{nhaxb}/delete',[NhaxbController::class,'delete'])->name('nhaxb.delete');
//theloai
Route::get('/theloai',[TheloaiController::class,'index'])->name('theloai.index');
Route::get('/theloai/create',[TheloaiController::class,'create'])->name('theloai.create');
Route::post('/theloai',[TheloaiController::class,'store'])->name('theloai.store');
Route::get('/theloai/{theloai}/edit',[TheloaiController::class,'edit'])->name('theloai.edit');
Route::put('/theloai/{theloai}/update',[TheloaiController::class,'update'])->name('theloai.update');
Route::delete('/theloai/{theloai}/delete',[TheloaiController::class,'delete'])->name('theloai.delete');
//dich vu
Route::get('/dichvu',[DichvuController::class,'index'])->name('dichvu.index');
Route::get('/dichvu/create',[DichvuController::class,'create'])->name('dichvu.create');
Route::post('/dichvu',[DichvuController::class,'store'])->name('dichvu.store');
Route::get('/dichvu/{dichvu}/edit',[DichvuController::class,'edit'])->name('dichvu.edit');
Route::put('/dichvu/{dichvu}/update',[DichvuController::class,'update'])->name('dichvu.update');
Route::delete('/dichvu/{dichvu}/delete',[DichvuController::class,'delete'])->name('dichvu.delete');
//sach
Route::get('/sach',[SachController::class,'index'])->name('sach.index');
Route::get('/sach/create',[SachController::class,'create'])->name('sach.create');
Route::post('/sach',[SachController::class,'store'])->name('sach.store');
Route::get('/sach/{sach}/edit',[SachController::class,'edit'])->name('sach.edit');
Route::put('/sach/{sach}/update',[SachController::class,'update'])->name('sach.update');
Route::delete('/sach/{sach}/delete',[SachController::class,'delete'])->name('sach.delete');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dangky', [AuthController::class, 'register'])->name('dangky');
Route::post('/dangky', [AuthController::class, 'create'])->name('create');
Route::get('/login', [AuthController::class, 'login'])->middleware('checkLogin')->name('login');
Route::post('/checkuser', [AuthController::class, 'checkuser'])->name('checkuser');
Route::get('/gioithieu', function () {
    return view('webpage.gioithieu');
})->name('gioithieu');
Route::get('/sackchuyennganh', function () {
    return view('webpage.sackchuyennganh');
})->name('sackchuyennganh');

Route::get('/thongtinbook', function () {
    return view("webpage.thongtinbook");
});
//trangchu
Route::get('/trangchu',[TrangchuController::class,'index'])->name('trangchu.index');
