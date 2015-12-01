<?php

Route::get('', [
    'as' => 'site.index',
    'uses' => 'SiteController@index'
]);
Route::get('uslugi', [
    'as' => 'uslugi',
    'uses' => 'SiteController@services'
]);
Route::get('uslugi/yuridicheskoe-konsultirovanie', [
    'as' => 'yuridicheskoe-konsultirovanie',
    'uses' => 'SiteController@yuridicheskoeKonsultirovanie'
]);
Route::get('registraciya-predprinimatelej', [
    'as' => 'registraciya-predprinimatelej',
    'uses' => 'SiteController@registraciyaPredprinimatelej'
]);
Route::get('registraciya-organizacij', [
    'as' => 'registraciya-organizacij',
    'uses' => 'SiteController@registraciyaOrganizacij'
]);
Route::get('yuridicheskoe-soprovozhdenie-biznesa', [
    'as' => 'yuridicheskoe-soprovozhdenie-biznesa',
    'uses' => 'SiteController@yuridicheskoeSoprovozhdenieBiznesa'
]);
Route::get('predstavitelstvo-v-arbitrazhnyh-sudah', [
    'as' => 'predstavitelstvo-v-arbitrazhnyh-sudah',
    'uses' => 'SiteController@predstavitelstvoVArbitrazhnyhSudah'
]);
Route::get('predstavitelstvo-v-sude', [
    'as' => 'predstavitelstvo-v-sude',
    'uses' => 'SiteController@predstavitelstvoVSude'
]);
Route::get('podgotovka-yuridicheskih-dokumentov', [
    'as' => 'podgotovka-yuridicheskih-dokumentov',
    'uses' => 'SiteController@podgotovkaYuridicheskihDokumentov'
]);
Route::get('soprovozhdenie-sdelok-s-nedvizhimostyu', [
    'as' => 'soprovozhdenie-sdelok-s-nedvizhimostyu',
    'uses' => 'SiteController@soprovozhdenieSdelokSNedvizhimostyu'
]);
