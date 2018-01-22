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
/*
Route::get('/', function () {
	return view('welcome');
});

// Metodo get 
Route::get('/',	function()
{
	return	'¡Hola	mundo!';
});

// Metodo post
Route::post('foo/bar',	function()
{
	return	'¡Hola	mundo!';
});

// Metodo put
Route::put('foo/bar',	function	()	{
				//
});

// Metodo delete
Route::delete('foo/bar',	function	()	{
				//
});

// Multiples metodos 
Route::match(array('GET',	'POST'),	'/',	function()
{
	return	'¡Hola	mundo!';
});

// Cualquier metodo
Route::any('foo',	function()
{
	return	'¡Hola	mundo!';
});

// Pasamos parametros {}
Route::get('user/{id}',	function($id)
{
	return	'User	'.$id;
});

// Valor por defecto, es decir opcional
Route::get('user/{name?}',	function($name	=	null)
{
	return	$name;
});
//	También	podemos	poner	algún	valor	por	defecto...
Route::get('user/{name?}',	function($name	=	'Javi')
{
	return	$name;
});

// Expresiones regulares
Route::get('user/{name}',	function($name)
{
				//
})
->where('name',	'[A-Za-z]+');
Route::get('user/{id}',	function($id)
{
				//
})
->where('id',	'[0-9]+');
//	Si	hay	varios	parámetros	podemos	validarlos	usando	un	array:
Route::get('user/{id}/{name}',	function($id,	$name)
{
				//
})
->where(array('id'	=>	'[0-9]+',	'name'	=>	'[A-Za-z]+'));

Route::get('/',	function()
{
	return	view('home',	array('nombre'	=>	'Javi'));
});

*/

// Metodo get 
Route::get('/',	function()
{
	return	view('home');
});

// Metodo get 
Route::get('login',	function()
{
	return	view('auth.login');
});

// Metodo get 
Route::get('logout',	function()
{
	return	'Logout	usuario';
});

// Metodo get 
Route::get('catalog',	function()
{
	return	view('catalog.index');
});

// Metodo get 
Route::get('catalog/show/{id}',	function($id)
{
	return	view('catalog.show',	array('id'=>$id));
});

// Metodo get 
Route::get('catalog/create',	function()
{
	return	view('catalog.create');
});

// Metodo get 
Route::get('catalog/edit/{id}',	function()
{
	return	view('catalog.edit',	array('id'=>$id));
});