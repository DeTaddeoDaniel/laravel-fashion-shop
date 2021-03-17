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

Route::get('/', 'section@home')->name='pagina-home';

Route::get('/shop', 'section@shop')->name='pagins-shop';

Route::get('/chi-siamo', 'section@chiSiamo')->name='pagins-chiSiamo';

