<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {

    return view('pages.index');

})->name('index');

Route::post('pro', [UserController::class, 'sae']);

Route::post('user', [UserController::class, 'store']);
Route::get('logout',[UserController::class, 'destory'] );

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/about-2', function () {
    return view('pages.about-2');
})->name('about-2');

Route::get('/about-3', function () {
    return view('pages.about-3');
})->name('about-3');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
