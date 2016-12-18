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
//Routes for email
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );

//Routes for Dashboard
Route::get('home', 'HomeController@index');

Route::post('home/addCourse','HomeController@addCourse');
Route::post('home/updateCourse','HomeController@updateCourse');
Route::post('home/updateCourseView','HomeController@updateCourseView');
Route::post('home/deleteCourse','HomeController@deleteCourse');

Route::post('home/addPost','HomeController@addPost');
Route::post('home/deletePost','HomeController@deletePost');
Route::post('home/updatePostView','HomeController@updatePostView');
Route::post('home/updatePost','HomeController@updatePost');

Route::post('home/slider1','HomeController@slider1');
Route::post('home/slider2','HomeController@slider2');
Route::post('home/slider3','HomeController@slider3');
Route::post('home/slider4','HomeController@slider4');
Route::post('home/slider5','HomeController@slider5');

Route::get('ajax/delete','HomeController@deletePreinscription');

//Routes for Authentication Controller
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Routes for web site
Route::get('/','PageController@index');
Route::get('publicacion/{id}','PageController@posts');
Route::get('publicaciones','PageController@newsView');
Route::get('mapa','PageController@mapView');
Route::get('cursos','PageController@coursesView');
Route::get('curso/{id}','PageController@courseDescription');
Route::get('galeria','PageController@photosView');
Route::get('informacion','PageController@informationView');
Route::get('preinscripciones','PageController@preinscripcionView');
Route::get('practicas','PageController@practicesServicesView');
Route::get('contacto', 'PageController@contactView');
Route::post('guardar_preinscripcion','PageController@savePreinscription');


// Routes for manage photos
Route::post('foto/save','FotografiaController@storePhoto');
Route::post('foto/delete','FotografiaController@destroyPhoto');




?>