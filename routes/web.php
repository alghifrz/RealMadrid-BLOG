<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog/laliga', function () {
    $image = '/img/ll.png';
    $key = 'LaLiga';
    $keyK = 'LALIGA';
    return view('laliga', compact('image', 'key', 'keyK'));
});

Route::get('/blog/uefa-champions-league', function () {
    $image = '/img/ucl.png';
    $key = 'UEFA Champions League';
    $keyK = 'UEFA CHAMPIONS LEAGUE';
    return view('uefa-champions-league', compact('image', 'key', 'keyK'));
});

Route::get('/blog/fifa-club-world-cup', function () {
    $image = '/img/fcwc.png';
    $key = 'FIFA Club World Cup';
    $keyK = 'FIFA CLUB WORLD CUP';
    return view('fifa-club-world-cup', compact('image', 'key', 'keyK'));
});

Route::get('/blog/uefa-super-cup', function () {
    $image = '/img/usc.png';
    $key = 'UEFA Super Cup';
    $keyK = 'UEFA SUPER CUP';
    return view('uefa-super-cup', compact('image', 'key', 'keyK'));
});

Route::get('/blog/copa-del-rey', function () {
    $image = '/img/cdr.png';
    $key = 'Copa del Rey';
    $keyK = 'COPA DEL REY';
    return view('copa-del-rey', compact('image', 'key', 'keyK'));
});


Route::get('/blog2', function () {
   return view('blog2'); 
});

Route::get('/blogpost', function () {
    return view('blogpost');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/author', function () {
    return view('author');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('privacy-policy', function () {
    return view('privacy');
});

