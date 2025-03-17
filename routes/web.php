<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register");
});

Route::get('/index', function () {
    return view("index");
})->middleware("checkIsLogin");

Route::get('/requests', function () {
    return view("requests");
})->middleware("checkIsLogin");

Route::get('/profile', function () {
    return view("profile");
})->middleware("checkIsLogin");

Route::get('/room', function () {
    return view("room");
})->middleware("checkIsLogin");
