<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* Initiate page url
**/
Route::get('/', array('as'=>'home', 'uses'=>'HomeController@getIndex'));
Route::get('store', array('as'=>'store', 'uses'=>'StoreController@getIndex'));
Route::get('shop', array('as'=>'shop', 'uses'=>'ShopController@getIndex'));
Route::get('cart', array('as'=>'shop-cart', 'uses'=>'ShopCartController@getIndex'));
Route::get('checkout', array('as'=>'shop-checkout', 'uses'=>'ShopCheckoutController@getIndex'));

Route::match(array('GET','POST'),'findstore', array('as'=>'find-store', 'uses'=>'HomeController@getFindStore'));

Route::get('shopproduct', array('as'=>'shop-product', 'uses'=>'HomeController@getShopProduct'));
Route::get('shopproduct/{product}', array('as'=>'shop-product-with-param', 'uses'=>'HomeController@getShopProductWithParam'));
Route::get('shopcart/{id}', array('as'=>'shop-cart-with-id', 'uses'=>'ShopCartController@getCart'));
Route::get('shopcart/remove/{id}', array('as'=>'shop-cart-remove-id', 'uses'=>'ShopCartController@getRemoveItem'));
Route::post('shopcart/update', array('as'=>'shop-cart-update', 'uses'=>'ShopCartController@getUpdateItem'));
Route::get('checkout/order', array('as'=>'checkout-order', 'uses'=>'ShopCheckoutController@postOrder'));

//Api search(suggestion)
Route::get('api/search', array('as'=>'api-search', 'uses'=>'HomeController@apiSearch'));

//Normal search
Route::get('findproduct', array('as'=>'find-product', 'uses'=>'HomeController@getFindProduct'));

/**
 * Portfolio
 */
Route::get('order', array('as'=>'order', 'uses'=>'OrderManageController@getIndex'));
Route::get('order/state', array('as'=>'order-state', 'uses'=>'OrderManageController@setState'));
Route::get('order/detail/{id}', array('as'=>'order-detail-id', 'uses'=>'OrderDetailManageController@getIndex'));
