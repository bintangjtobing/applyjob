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
// Content Home
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

// Employers : Homepage of employers (perusahaan)
Route::get('/employers', 'EmployersLoginController@employershomepage');

// Candidates : homepage of candidates (karyawan)
Route::get('/candidates', 'CandidateLoginController@candidateshomepage');

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

// Dashbord Route Administrator
Route::group(['prefix' => 'dashboard/company', 'middleware' => ['isemployer']], function () {
    Route::get('/', 'EmployersLoginController@showdashboardemploy')->name('employers.dashboard');
});
Route::group(['prefix' => 'dashboard/candidate', 'middleware' => ['iscandidate']], function () {
    Route::get('/', 'CandidateLoginController@showdashboardcandidate')->name('candidates.dashboard');
    Route::get('/{encode}/my-information/', 'CandidateLoginController@informationmy');
    Route::get('/{encode}/my-setting/', 'CandidateLoginController@settingmy');
});
