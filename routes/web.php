<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function(){
    Route::get('/', 'HomeController@index')->name('/');
    Route::get('movie-category/{slug}', 'HomeController@movieCategory')->name('movie-category');
    Route::get('watch-movie/{slug}', 'HomeController@movieDetails')->name('watch-movie');
    Route::get('software', 'HomeController@software')->name('software');
    Route::get('game', 'HomeController@games')->name('game');
    Route::get('new-movies', 'HomeController@newMovies')->name('new-movies');
    Route::get('action-movies', 'HomeController@actionMovies')->name('action-movies');
    Route::get('romantic-movies', 'HomeController@romanticMovies')->name('romantic-movies');
    Route::get('thriller-movies', 'HomeController@thrillerMovies')->name('thriller-movies');
    Route::get('horror-movies', 'HomeController@horrorMovies')->name('horror-movies');
    Route::get('scifi-movies', 'HomeController@scifiMovies')->name('scifi-movies');
    Route::get('comedy-movies', 'HomeController@comedyMovies')->name('comedy-movies');
    Route::get('more-ftp', 'HomeController@moreFtp')->name('more-ftp');

});

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('category', 'CategoryController');
    Route::resource('movie', 'MovieController');
    Route::resource('software', 'SoftwareController');
    Route::resource('games', 'GamesController');
    Route::resource('tv', 'TvController');
    Route::resource('ftp', 'FtpController');
    Route::resource('slider', 'SliderController');
});
