<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
| dependiendo del slug de la url, buscamos el producto en la bd con el mismo slug y 
|traemos los datos relacionados al producto.
|Sometimes you may wish to use your own resolver for route parameters. Simply use the Route::bind method:
|
|				Route::bind('user', function($value, $route)
|				{
|				    return User::where('name', $value)->first();
|				});

*/

Route::bind('product',function($slug)
{
	return App\Product::where('slug',$slug)->first();
});

Route::get('/',[
	'as'=>'home',
	'uses'=>'StoreController@index'
]);

Route::get('product/{slug}',[
		'as'=>'product-detail',
		'uses'=>'StoreController@show'
	]);

/*
|-------------------------------------------------------------
|Carrito de compras
|-------------------------------------------------------------
*/
Route::get('cart/show',[
		'as'=>'cart-show',
		'uses'=>'CartController@show'
	]);

//utilizamos el metodo Route::bind
Route::get('cart/add/{product}',[
		'as'=>'cart-add',
		'uses'=>'CartController@add'
	]);

Route::get('cart/delete/{product}',[
		'as'=>'cart-delete',
		'uses'=>'CartController@delete'
	]);

Route::get('cart/trash',[
	'as'=>'cart-trash',
	'uses'=>'CartController@trash'

	]);

Route::get('cart/update/{product}/{quantity}',[
	'as'=>'cart-update',
	'uses'=>'CartController@update'

	]);