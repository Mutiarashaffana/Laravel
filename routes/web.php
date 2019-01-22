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
    echo "Paman Gober";
});
Route::get('/home', function () {
    echo "disini rumah";
});
Route::get('/lemot', function () {
    echo "kenapa kok lemot";
});
Route::get('/Teman', function () {
    echo " Angga:(";
});
Route::get('/pohong', function () {
    return view("telo");
});
//pakai controller
Route::get('/terong', 'CapungController@index');
//memanggil controller capung dengan fungsi pujangga
Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

//sekarang bikin route untuk customer
// Route::get('/Customer', 'CustomerController@index');
// //sekarang bikin route untuk add customer
// Route::get('/Customer/create', 'CustomerController@create');
// //sekarang bikin route untuk supplier
// Route::get('/Supplier', 'SupplierController@index');
// //untuk store dari customer
// Route::get('/Customer/store', 'CustomerController@store');

Route::resource('/Customer', 'CustomerController');
Route::resource('/Supplier', 'SupplierController');
Route::resource('/Employee', 'EmployeeController');