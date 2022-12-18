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

use App\Http\Controllers\FormController;
use App\Http\Controllers\SheetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('forms/renderPDF', 'FormController@renderPDF')->name('render-pdf');
Route::get('forms/downloadExcel', 'FormController@downloadExcel')->name('download-excel');

Route::resource ('forms', 'FormController');

Route::get('db-table', 'HomeController@table')->name('db-table');

Route::get('forms/renderPDF/{formId}', 'FormController@renderPDFbyId')->name('render-pdf-id');


Auth::routes();
Route::get('/c1form', function(){
    return view ('index');
});
Route::get('/c2form', function(){
    return view ('c2form');
});
Route::get('/c3form', function(){
    return view ('c3form');
});
Route::get('/c4form', function(){
    return view ('form');
});

Route::get('/wkhtmltopdf', 'PostController@print_form')->name('print_data');
Route::get('/formsubmit', 'PostController@form_submit')->name('print_data');
Route::post('/successfullySubmitted', 'PostController@form_submit2')->name('print_data');

Route::get('/home', 'HomeController@index')->name('table');

Route::get('/form', 'HomeController@form')->name('form');
Route::get('/pdf1print', 'FormController@c1pdf_print')->name('print_data');
Route::get('/pdf2print', 'FormController@c2pdf_print')->name('print_data');
Route::get('/pdf3print', 'FormController@c3pdf_print')->name('print_data');
Route::get('/excelprint', 'FormController@sheetprint')->name('print_data');




Route::get('/userdash', function(){
    return view ('userdash');
});
