<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ['title' => 'About Us']);
});

Route::get('/teas', function () {
    $teas = [
        ["name" => "Masala Chai", "price" => 199, "id" => 1],
        ["name" => "Ginger Chai", "price" => 199, "id" => 2],
        ["name" => "Assam Chai", "price" => 199, "id" => 3],
    ];
    return view('teas.index', ['teas' => $teas]);
});

Route::get('/teas/{id}', function ($id) {
    $teas = [
        ["name" => "Masala Chai", "price" => 199, "id" => 1],
        ["name" => "Ginger Chai", "price" => 299, "id" => 2],
        ["name" => "Assam Chai", "price" => 99, "id" => 3],
    ];
    return view('teas.teadetail', ['tea' => $teas[$id-1]]);
});
