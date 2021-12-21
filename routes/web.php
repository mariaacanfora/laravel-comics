<?php

use Illuminate\Support\Facades\Route;

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
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("home.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("home.index");

Route::get('/comics', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    $current_series_list = config("db_comics");

    return view('comics.index', ["nav_links" => $nav_links, "footer_links" => $footer_links, "current_series_list" => $current_series_list]);
})->name("comics.index");


Route::get('/comics/{id?}', function($id){
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");

    $current_series_list = config("db_comics");

    $novel = $current_series_list[$id];

    return view("comics.novel-details", ["nav_links" => $nav_links, "footer_links" => $footer_links,"novel" => $novel]);
})->name("comics.novel-details");




Route::get('/characters', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("characters.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("characters.index");


Route::get('/movies', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("movies.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("movies.index");

Route::get('/tv', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("tv.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("tv.index");

Route::get('/games', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("games.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("games.index");

Route::get('/collectibles', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("collectibles.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("collectibles.index");

Route::get('/videos', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("videos.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("videos.index");

Route::get('/fans', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("fans.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("fans.index");

Route::get('/news', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("news.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("news.index");

Route::get('/shops', function () {
    $nav_links = config("db_nav_links");
    $footer_links = config("db_footer_links");
    return view("shops.index", ["nav_links" => $nav_links, "footer_links" => $footer_links]);
})->name("shops.index");