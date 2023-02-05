<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;
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
    return view('main');
});

Route::get('resume/download', 'App\Http\Controllers\ResumeController@download')->name('resume.download')->middleware('auth');

Route::get('resume', 'App\Http\Controllers\ResumeController@index')->name('resume.index')->middleware('auth');

Auth::routes();

Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');

// Route::get('user-detail/create', 'App\Http\Controllers\UserDetailController@create')->middleware('auth')->name('user-detail.create');
// Route::post('user-detail', 'App\Http\Controllers\UserDetailController@store')->middleware('auth');

Route::resource('user-detail','App\Http\Controllers\UserDetailController')->middleware('auth');
Route::resource('education','App\Http\Controllers\EducationController')->middleware('auth');

// Route::get('education/create','App\Http\Controllers\EducationController@create')->middleware('auth')->name('education.create');
// Route::post('education', 'App\Http\Controllers\EducationController@store')->middleware('auth');
// Route::get('education/index','App\Http\Controllers\EducationController@index')->middleware('auth')->name('education.index');


Route::resource('experience','App\Http\Controllers\ExperienceController')->middleware('auth');

// Route::get('experience/index','App\Http\Controllers\ExperienceController@index')->middleware('auth')->name('experience.index');

Route::resource('skill','App\Http\Controllers\SkillController')->middleware('auth');

