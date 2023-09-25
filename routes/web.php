<?php

use Illuminate\Http\Request;
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

// Bizzy's web routes

// Route::get('/hello', function () {
//     return response('<h1>hello Binta</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//      dd($request);
//      dd($request->name .' ' . $request->city);
//     return($request->name .' ' . $request->city);
// });
