<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemorialController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RSVPController;
use Illuminate\Support\Facades\Auth;


// Homepage (Background Page)
Route::get('/', [MemorialController::class, 'index'])->name('memorial.index');

// RSVP page
Route::get('/rsvp', [RSVPController::class, 'index'])->name('rsvp.index');

// Comment Page
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');

// Image Upload Page
Route::get('/images', [MediaController::class, 'imageIndex'])->name('images.index');
Route::post('/images/upload', [MediaController::class, 'uploadImage'])->name('images.upload');

// Video Upload Page
Route::get('/videos', [MediaController::class, 'videoIndex'])->name('videos.index');
Route::post('/videos/upload', [MediaController::class, 'uploadVideo'])->name('videos.upload');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


// Admin Panel Page
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

// Admin Actions
Route::delete('/admin/comment/{id}', [AdminController::class, 'deleteComment'])->name('admin.comment.delete');
Route::delete('/admin/image/{id}', [AdminController::class, 'deleteImage'])->name('admin.image.delete');
Route::delete('/admin/video/{id}', [AdminController::class, 'deleteVideo'])->name('admin.video.delete');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::delete('/videos/{video}/delete', [MediaController::class, 'deleteVideo']) ->name('videos.delete')->middleware('auth');



// Ensure only logged-in admins can access the panel
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::delete('/admin/comment/{id}', [AdminController::class, 'deleteComment'])->name('admin.comment.delete');
    Route::delete('/admin/image/{id}', [AdminController::class, 'deleteImage'])->name('admin.image.delete');
    Route::delete('/admin/video/{id}', [AdminController::class, 'deleteVideo'])->name('admin.video.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin Routes for Deleting Comments, Images, and Videos
Route::delete('/admin/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
Route::delete('/admin/images/{image}', [MediaController::class, 'destroyImage'])->name('images.destroy');
Route::delete('/admin/videos/{video}', [MediaController::class, 'destroyVideo'])->name('videos.destroy');


