<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ExecutiveController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotoCategoryController;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/details/{id}',[HomeController::class,'details'])->name('details');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/executive',[HomeController::class,'executive'])->name('executive');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/member',[HomeController::class,'member'])->name('member');
Route::post('/member/find',[HomeController::class,'search'])->name('member.find');
Route::get('/media',[HomeController::class,'media'])->name('media');
Route::get('/media/category/{id}',[HomeController::class,'photoByCategory'])->name('photos.category-wise');

Route::middleware('auth.login')->group(function () {
    Route::get('/login',[UserController::class,'login'])->name('user.login');
    Route::post('/login',[UserController::class,'loginConfirm'])->name('user.confirm-login');
    Route::get('/register',[UserController::class,'register'])->name('user.register');
    Route::post('/register',[UserController::class,'registerConfirm'])->name('user.confirm-register');
});

Route::middleware('auth.client')->group(function () {
    Route::get('/client/dashboard', [UserController::class, 'dashboard'])->name('user.client-dashboard');
    Route::get('/client/logout', [UserController::class, 'logout'])->name('user.client-logout');
});


Route::get('/see-notice/{id}',[NoticeController::class,'show'])->name('show.front-notice');
Route::get('/notice-images/{file}',[NoticeController::class,'download'])->name('download');


Route::post('/notice-create',[NoticeController::class,'create'])->name('notice-create');
Route::get('/notice-edit/{id}',[NoticeController::class,'edit'])->name('notice-edit');
Route::get('/notice-index',[NoticeController::class,'index'])->name('notice-index');
Route::get('/notice-manage',[NoticeController::class,'manage'])->name('notice-manage');
Route::post('/notice/update/{id}',[NoticeController::class,'update'])->name('notice-update');
Route::get('/notice/delete/{id}',[NoticeController::class,'delete'])->name('notice-delete');

Route::get('/news-index',[NewsController::class,'index'])->name('news-index');
Route::post('/news-create',[NewsController::class,'create'])->name('news-create');
Route::get('/news-edit/{id}',[NewsController::class,'edit'])->name('news-edit');
Route::get('/news-manage',[NewsController::class,'manage'])->name('news-manage');
Route::post('/news/update/{id}',[NewsController::class,'update'])->name('news-update');
Route::get('/news/delete/{id}',[NewsController::class,'delete'])->name('news-delete');
Route::get('/news/detail',[NewsController::class,'newsDetail'])->name('news-detail');
Route::get('/news/all-news',[NewsController::class,'allNews'])->name('all-news');
Route::get('/news/all-event',[NewsController::class,'allEvent'])->name('all-event');



Route::get('/member-index',[MemberController::class,'index'])->name('member-index');
Route::post('/member-create',[MemberController::class,'create'])->name('member-create');
Route::get('/member-edit/{id}',[MemberController::class,'edit'])->name('member-edit');
Route::get('/member-manage',[MemberController::class,'manage'])->name('member-manage');
Route::post('/member/update/{id}',[MemberController::class,'update'])->name('member-update');
Route::get('/member/delete/{id}',[MemberController::class,'delete'])->name('member-delete');



Route::get('/gallery-index',[GalleryController::class,'index'])->name('gallery-index');
Route::post('/gallery-create',[GalleryController::class,'create'])->name('gallery-create');
Route::get('/gallery-edit/{id}',[GalleryController::class,'edit'])->name('gallery-edit');
Route::get('/gallery-manage',[GalleryController::class,'manage'])->name('gallery-manage');
Route::post('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery-update');
Route::get('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery-delete');
//Route::get('/gallery/all-gallery',[GalleryController::class,'allGallery'])->name('all-gallery');





Route::get('/executive-index',[ExecutiveController::class,'index'])->name('executive-index');
Route::post('/executive-create',[ExecutiveController::class,'create'])->name('executive-create');
Route::get('/executive-edit/{id}',[ExecutiveController::class,'edit'])->name('executive-edit');
Route::get('/executive-manage',[ExecutiveController::class,'manage'])->name('executive-manage');
Route::post('/executive/update/{id}',[ExecutiveController::class,'update'])->name('executive-update');
Route::get('/executive/delete/{id}',[ExecutiveController::class,'delete'])->name('executive-delete');



Route::get('/photo-index',[PhotoController::class,'index'])->name('photo-index');
Route::post('/photo-create',[PhotoController::class,'create'])->name('photo-create');
Route::get('/photo-edit/{id}',[PhotoController::class,'edit'])->name('photo-edit');
Route::get('/photo-manage',[PhotoController::class,'manage'])->name('photo-manage');
Route::post('/photo/update/{id}',[PhotoController::class,'update'])->name('photo-update');
Route::get('/photo/delete/{id}',[PhotoController::class,'delete'])->name('photo-delete');




Route::get('/category-index',[PhotoCategoryController::class,'index'])->name('category-index');
Route::post('/category-create',[PhotoCategoryController::class,'create'])->name('category-create');
Route::get('/category-edit/{id}',[PhotoCategoryController::class,'edit'])->name('category-edit');
Route::get('/category-manage',[PhotoCategoryController::class,'manage'])->name('category-manage');
Route::post('/category/update/{id}',[PhotoCategoryController::class,'update'])->name('category-update');







Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.home');})->name('dashboard');
});
