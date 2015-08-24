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

/*==========================================================
|    							PRODUCTS DEPENDENCY INJECTION
==========================================================*/
Route::bind('product',function($slug)
{
	return App\Product::where('slug',$slug)->first();
});

/*==========================================================
|    							CATEGORY DEPENDENCY INJECTION
==========================================================*/
Route::bind('category',function($category){
	return App\Category::find($category);
});

/*==========================================================
|    							USER DEPENDENCY INJECTION
==========================================================*/
Route::bind('user',function($user){
	return App\User::find($user);
});
/*==========================================================
|  													HOME
==========================================================*/
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

/*=============================================================================
|          MIDDLEWARE-->peticion detalle pedido.
| auth es un middleware q detecta si el user inicio sesion.
| aqui el middleware se ejecuta primero q el controlador.
=============================================================================*/
Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

/* ==========================================================================
|                AUTENTICACION
	==========================================================================*/
// Authentication routes...
Route::get('auth/login', [
	'as'=>'login-get',
	'uses'=>'Auth\AuthController@getLogin'
	]);

Route::post('auth/login', [
	'as'=>'login-post',
	'uses'=>'Auth\AuthController@postLogin'
	]);

Route::get('auth/logout', [
	'as'=>'logout',
	'uses'=>'Auth\AuthController@getLogout'
	]);

// Registration routes...
Route::get('auth/register', [
	'as'=>'register-get',
	'uses'=>'Auth\AuthController@getRegister'
	]);

Route::post('auth/register', [
	'as'=>'register-post',
	'uses'=>'Auth\AuthController@postRegister'
	]);


/********************************************
|-------------------PAYPAL------------------
*********************************************/
//enviar pedido
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
//paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));


/*=========================================================================
|															ADMIN PANEL
	=========================================================================*/
	Route::get('admin/home', function(){
		return view('admin.home');
	});
Route::resource('admin/category', 'Admin\CategoryController');
Route::resource('admin/product', 'Admin\ProductController');
Route::resource('admin/user', 'Admin\UserController');
