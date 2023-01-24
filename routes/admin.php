<?php

Route::get('/home', function() {
    return redirect('/admin');
})->name('home');

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' =>'admin'], function(){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::resource('post', 'PostController');
    Route::resource('postCategory', 'PostCategoryController');
    Route::resource('page', 'PageController');
    Route::resource('testimony', 'TestimonyController');
    Route::resource('message', 'MessageController');
    Route::resource('banner', 'BannerController');
    Route::resource('configuration', 'ConfigurationController');
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::get('menu', 'MenuController@index')->name('menu.index');
    Route::post('menu/update/ajax/','MenuController@updateAjax')->name('menu.update.ajax');
    Route::get('menu/refresh', 'MenuController@refresh')->name('menu.refresh');
});