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

Route::get('/about', 'homeController@about');
Route::get('/blog', 'homeController@blog');
Route::get('/contact', 'homeController@contact');

Route::post('/register-new-user', 'CandidateController@registernewuser');

Route::post('/adminlogin', 'AdminLoginController@login');
Route::post('/employerslogin', 'EmployersLoginController@login');
Route::post('/candidateslogin', 'CandidateLoginController@login');

Route::get('/candidates-dashboard', 'CandidateLoginController@showdashboardcandidate')->name('candidatespage');
Route::get('/employers-dashboard', 'EmployersLoginController@showdashboardemploy')->name('employerspage');
Route::get('/administrator-dashboard', 'AdminLoginController@showdashboardadmin')->name('adminpage');
