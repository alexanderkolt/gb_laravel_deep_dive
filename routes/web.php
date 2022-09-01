<?php

$text = 'Информация о приложении';

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
    return view('welcome');
});

//Страница приветствия пользователя
Route::get('/hello/{name}', function(string $name) {
    return "Hello, $name";
});

//Страница c информацией о проекте
Route::get('/appinfo', function() use ($text) {
    return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>$text</h1>
    Lorem ipsum dolor sit amet.
</body>
</html>
php;
});

//Страница для вывода одной и нескольких новостей
Route::get('/news', function() {
    return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolor?";
});
    