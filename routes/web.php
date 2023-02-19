<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlleroute;

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

Route::get('/profil', function () {
    return view('profile');
});

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/basicrouting', function(){
    return "Basic Routing Merupakan Rute Laravel paling dasar menerima URI dan penutupan, 
    menyediakan metode yang sangat sederhana dan ekspresif untuk mendefinisikan rute dan 
    perilaku tanpa file konfigurasi perutean yang rumit";
});

Route::get('/basicroutingget', function () {
    return view('basicroutingget');
});

Route::view("/routeparam", "routeparam", 
['nama' => 'Haloo Namaku Edy Atthoillah Dari TIF angkatan 2021'
, 'caption' => 'Disini saya Sedang berlajar Route', 
'isi' => 'Route yang saya gunakan yaitu route menggunakan parameter'
]);

Route::get('/controlcoba', [controlleroute::class, 'routecontroller']);

//Route::post('/controlcobapost', [cobacontroller::class, 'controlcobapost']);

Route::post("/controlcobapost", "controlleroute@controlcobapost");

Route::redirect('/routeredirect', '/Redirect-lain');
Route::get('/Redirect-lain', function(){
    return view('routeredirect');
});

Route::get('/route/{id}', function($id){
    return "Disini saya sedang memprakttekkan Route dengan Prameter Dengan ID = ". $id;
});


Route::prefix('routegroup')->group(function(){
    Route::get('/g1', function(){
        return "Disini saya mencoba Route Group 1";
    });

    Route::get('/g2', function(){
        return "Disini saya mencoba Route Group 2";
    });

    Route::get('/g3', function(){
        return "Disini saya mencoba Route Group 3";
    });

    Route::get('/g4', function(){
        return "Disini saya mencoba Route Group 4";
    });
});