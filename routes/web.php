<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin','Moderator']
], function() {

    Route::get('pages', [
        'uses' => 'PagesController@index',
        'as' => 'pages.index'
    ]);

    Route::get('pages/create', [
        'uses' => 'PagesController@create',
        'as' => 'pages.create'
    ]);

    Route::post('pages/store', [
        'uses' => 'PagesController@store',
        'as' => 'pages.store'
    ]);

    Route::get('pages/edit/{page}', [
        'uses' => 'PagesController@edit',
        'as' => 'pages.edit'
    ]);

    Route::put('pages/{page}', [
        'uses' => 'PagesController@update',
        'as' => 'pages.update'
    ]);

    Route::delete('pages/{page}', [
        'uses' => 'PagesController@destroy',
        'as' => 'pages.delete'
    ]);

//----------------------------------------------

    Route::get('clients', [
        'uses' => 'ClientsController@index',
        'as' => 'clients.index'
    ]);

    Route::get('clients/{slug}', [
        'uses' => 'ClientsController@show',
        'as' => 'clients.show'
    ]);

    Route::get('clients/create', [
        'uses' => 'ClientsController@create',
        'as' => 'clients.create'
    ]);

    Route::post('clients/store', [
        'uses' => 'ClientsController@store',
        'as' => 'clients.store'
    ]);

    Route::get('clients/edit/{client}', [
        'uses' => 'ClientsController@edit',
        'as' => 'clients.edit'
    ]);

    Route::put('clients/{client}', [
        'uses' => 'ClientsController@update',
        'as' => 'clients.update'
    ]);

    Route::delete('clients/{client}', [
        'uses' => 'ClientsController@destroy',
        'as' => 'clients.delete'
    ]);

//----------------------------------------------

    Route::get('shorts', [
        'uses' => 'ShortsController@index',
        'as' => 'shorts.index'
    ]);

    Route::get('shorts/create', [
        'uses' => 'ShortsController@create',
        'as' => 'shorts.create'
    ]);

    Route::post('shorts/store', [
        'uses' => 'ShortsController@store',
        'as' => 'shorts.store'
    ]);

    Route::get('shorts/{slug}', [
        'uses' => 'ShortsController@show',
        'as' => 'shorts.show'
    ]);



});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
