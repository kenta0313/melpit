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

Route::get('', 'App\Http\Controllers\ItemsController@showItems')->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('items/{item}', 'App\Http\Controllers\ItemsController@showItemDetail')->name('item');

Route::middleware('auth')
    ->group(function () {
        Route::get('items/{item}/buy', 'App\Http\Controllers\ItemsController@showBuyItemForm')->name('item.buy');
        Route::post('items/{item}/buy', 'App\Http\Controllers\ItemsController@buyItem')->name('item.buy');
        Route::get('sell', 'App\Http\Controllers\SellController@showSellForm')->name('sell');
        Route::post('sell', 'App\Http\Controllers\SellController@sellItem')->name('sell');

    });

Route::prefix('mypage')
     ->middleware('auth')
     ->group(function () {
         Route::get('edit-profile', 'App\Http\Controllers\Mypage\ProfileController@showProfileEditForm')->name('mypage.edit-profile');
         Route::post('edit-profile', 'App\Http\Controllers\Mypage\ProfileController@editProfile')->name('mypage.edit-profile');
         Route::get('sold-items', 'App\Http\Controllers\Mypage\SoldItemsController@showSoldItems')->name('mypage.sold-items');
     });
