<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\UserController;
use  Illuminate\Support\Facades\Redirect;
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
    return view('layout.home');
});
/////////////////////
Route::get('/home', function () {
    return view('home');
});
/////////////////////
Route::get('/contact',
    function () {
        return view('layout.contact');
    }
);
////////////////////
Route::get(
    '/about',
    function () {
        return view('layout.about');
    }
);

////////////////////
 Route::resource("/courses", CourseController::class);
 /////////////////////
// Route::resource("/userprofile", UserController::class);
Route::get('userprofile', [UserController::class, "show"]);

Route::get('availablecourse',[CourseController::class, "availablecourse"]);
//////////////////////////
// Route::get('back',function(){
//    return Redirect::back();
// });
///////////////////
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//////////////////////////
Route::resource("/comments", CommentController::class);

Route::get("/enroll/{id}", [EnrollmentController::class,"store"])->name('enroll');

Route::get("/unenroll/{id}", [EnrollmentController::class, "unenroll"])->name('unenroll');

Route::get("/enroll", [EnrollmentController::class, "create"]);
////////////
Route::resource("/users", UserController::class);

Route::delete('/Users/{user}', [UserController::class, "delete"]);

Route::get('/register', [UserController::class, "register"])->name('register');
Route::post('/register', [UserController::class, "handleregister"])->name('handleregister');

Route::get('/login', [UserController::class, "login"])->name('login');
Route::post('/login', [UserController::class, "handlelogin"])->name('handlelogin');
