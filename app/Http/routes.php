<?php

Route::get('', [
    'as' => 'site.index',
    'uses' => 'SiteController@index'
]);
Route::get('kontakty', [
    'as' => 'kontakty',
    'uses' => 'SiteController@kontakty'
]);
Route::get('skidki', [
    'as' => 'skidki',
    'uses' => 'SiteController@skidki'
]);
Route::get('sudebnaya-praktika', [
    'as' => 'sudebnayaPraktika',
    'uses' => 'SiteController@sudebnayaPraktika'
]);
Route::get('novosti', [
    'as' => 'novosti',
    'uses' => 'SiteController@novosti'
]);
Route::get('online', [
    'as' => 'online',
    'uses' => 'SiteController@online'
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