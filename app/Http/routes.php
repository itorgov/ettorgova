<?php

Route::get('', [
    'as' => 'site.index',
    'uses' => 'SiteController@index'
]);
Route::get('kontakty', [
    'as' => 'kontakty',
    'uses' => 'SiteController@kontakty'
]);
Route::get('uslugi/{name?}', [
    'as' => 'uslugi',
    'uses' => 'SiteController@services'
]);
Route::get('useful/stati/{name?}', [
    'as' => 'stati',
    'uses' => 'SiteController@stati'
]);

Route::resource('client', 'ClientController', ['only' => ['store']]);