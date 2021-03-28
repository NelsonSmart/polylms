<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController ;

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

Route::get('/', [RegisteredUserController::class, 'index'])->name('index');

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/login', [AuthenticatedSessionController::class, 'store']) ->name('login');

Route::get('/sv', [AuthenticatedSessionController::class, 's']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/about-2', function () {
    return view('pages.about-2');
})->name('about-2');

Route::get('/profile', function(){
    return view('pages.profile');
})->name('profile');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog-details');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/course-details', function () {
    return view('pages.course-details');
})->name('course-details');

Route::get('/course-details-2', function () {
    return view('pages.course-details-2');
})->name('course-details-2');

Route::get('/courses', function () {
    return view('pages.courses');
})->name('courses');


Route::get('/test', function () {
    return view('testing');
})-> name('testing');





























































Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');



require __DIR__.'/admin.php';
