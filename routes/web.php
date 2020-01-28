<?php
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ClearController;
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
$form = Request::all();

Route::get("/", "MainMenuController@mainMenu"); 

Route::get('/search', function () {
    return view('search');
    
});

Route::get("/result", "SearchController@searchBooks");

Route::get('/buy', "BuyController@orderList");

Route::get('/clear', "ClearController@clearOrders");

Route::get('/add', function() {
    
    $form = Request::all();
    $controller = new OrderController;
    return $controller->addOrder($form);
});   