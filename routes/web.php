<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', 'Auth\RegisterControlle@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/api/newsdata/get-general-news', 'DataController@generalNews')->name('general-news');
Route::get('/api/newsdata/get-tech-news', 'DataController@techNews')->name('tech-news');
Route::get('/api/newsdata/get-business-news', 'DataController@businessNews')->name('business-news');
Route::get('/api/newsdata/get-newsdata-authors', 'DataController@newsdataAuthors')->name('newsdata-authors');
Route::get('/api/newyorktimes/get-science-news', 'DataController@scienceNews')->name('science-news');
Route::get('/api/newyorktimes/get-world-news', 'DataController@worldNews')->name('world-news');
Route::get('/api/newyorktimes/get-sports-news', 'DataController@sportsNews')->name('sports-news');
Route::get('/api/newyorktimes/get-nyt-authors', 'DataController@nytAuthors')->name('nyt-news');
Route::get('/api/newsapi/get-entertainment-news', 'DataController@entertainmentNews')->name('entertainment-news');
Route::get('/api/newsapi/get-health-news', 'DataController@healthNews')->name('health-news');
Route::get('/api/newsapi/get-newsapi-authors', 'DataController@newsapiAuthors')->name('newsapi-authors');


