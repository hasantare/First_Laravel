<?php

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
$books = [
    "peykan",
    "akbar",
    "reno",
];
//return "hasan tare";
    return view('welcome' , ['books' => $books]);
});

Route::get('class',function (){
   return view('class');
});

Route::get('course' , function (){
    return view('course');
});
Route::get('students' , function (){
    return view('students');
});
