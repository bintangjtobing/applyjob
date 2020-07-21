<?php

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
    return view('home.index');
})->name('home');
Route::get('logout', function () {
    session()->flush();
    return redirect('/');
});
Route::get('/about', 'homeController@about');
Route::get('/blog', 'homeController@blog');
Route::get('/contact', 'homeController@contact');

// Register New User
Route::post('/register-new-user', 'CandidateController@registernewuser');

// Login to dashboard
// Admin //
Route::prefix('admin')->group(function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
});
// Employers
Route::prefix('employ')->group(function () {
    Route::get('/login', 'EmployersLoginController@showLoginForm')->name('employers.login');
    Route::post('/login', 'EmployersLoginController@login')->name('employers.login.submit');
});
// Candidate
Route::prefix('candidate')->group(function () {
    Route::get('/login', 'CandidateLoginController@showLoginForm')->name('candidate.login');
    Route::post('/login', 'CandidateLoginController@login')->name('candidate.login.submit');
});

// Middleware dashboard
Route::group(['prefix' => 'admin', 'middleware' => ['isadmin']], function () {
    Route::get('/dashboard', 'AdminLoginController@showdashboardadmin')->name('admin.dashboard');
});

Route::group(['prefix' => 'employ', 'middleware' => ['isemployer']], function () {
    Route::get('/dashboard', 'EmployersLoginController@showdashboardemploy')->name('employers.dashboard');
});

Route::group(['prefix' => 'candidate', 'middleware' => ['iscandidate']], function () {
    Route::get('/dashboard', 'CandidateLoginController@showdashboardcandidate')->name('candidates.dashboard');
});
