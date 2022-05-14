<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add(['GET','POST'], '/add', [Controller\Site::class, 'add']);
Route::add(['GET','POST'], '/viewing_add', [Controller\Site::class, 'viewing_add']);
Route::add(['GET','POST'], '/add_adres', [Controller\Site::class, 'add_adres']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);