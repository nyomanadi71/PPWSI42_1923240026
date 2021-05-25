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
    return view('welcome');
});

//mengirim data ke view
Route::get("/hallo", function(){
    $data = ['nama' => 'Nyoman adi adnyana', 'npm' => '1923240026', 'alamat' => 'Palembang'];
    return view("hallo", $data);
});


//Menerima data/parameter dan menampilkan diview
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm){
    $data = ['nama' => $nama, 'npm' => $npm];
    return view("hallo", $data);
});
