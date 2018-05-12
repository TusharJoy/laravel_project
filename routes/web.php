<?php


//dd(App::make('App\Billing\Stripe') ) ;


Route::get('/' , 'PostsController@index');
Route::get('show','PostsController@show');
Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store'); 
Route::get('posts/{post}','PostsController@show');

Route::post('posts/{post}/comments','CommentController@store');


Route::get('/register','RegistrationController@create') ;
Route::post('/register','RegistrationController@store') ;


Route::get('/login','SessionsController@create') ;
Route::get('/logout','SessionsController@destroy') ;
Route::post('/login','SessionsController@store') ;
