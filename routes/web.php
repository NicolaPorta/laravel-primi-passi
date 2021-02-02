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
    return view('home_page', [
        "word1" => "HELLO",
        "word2" => "WORLD",
        "tests" => ["H", "E", "L", "L", "O", " ", "W", "O", "R", "L", "D", "!", "!", "!"],
        "background" => "https://lh3.googleusercontent.com/proxy/C2nGEyG8OzJTvfL77IDtIONcCo3bC6Sq8Ug_enoxdFPCAEcz9QBR5CKZgwJ-QxrBp9PCcSQkVYxdUvckXGxXHA040cvn8T0D3fWnVtb9Z9vF74PpwGg_"
    ]);
});
