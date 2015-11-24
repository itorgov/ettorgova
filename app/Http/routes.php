<?php

Route::get('/', [
    'as' => 'site.index',
    function () {
        return view('site.index');
    }
]);

Route::group(['prefix' => 'uslugi'], function () {
    Route::get('/', [
        'as' => 'uslugi',
        function () {
            return view('site.services.index');
        }
    ]);
    Route::get('yuridicheskoe-konsultirovanie', [
        'as' => 'yuridicheskoe-konsultirovanie',
        function () {
            return view('site.services.yuridicheskoe-konsultirovanie');
        }
    ]);
    Route::get('registraciya-predprinimatelej', [
        'as' => 'registraciya-predprinimatelej',
        function () {
            return view('site.services.registraciya-predprinimatelej');
        }
    ]);
    Route::get('registraciya-organizacij', [
        'as' => 'registraciya-organizacij',
        function () {
            return view('site.services.registraciya-organizacij');
        }
    ]);
    Route::get('yuridicheskoe-soprovozhdenie-biznesa', [
        'as' => 'yuridicheskoe-soprovozhdenie-biznesa',
        function () {
            return view('site.services.yuridicheskoe-soprovozhdenie-biznesa');
        }
    ]);
    Route::get('predstavitelstvo-v-arbitrazhnyh-sudah', [
        'as' => 'predstavitelstvo-v-arbitrazhnyh-sudah',
        function () {
            return view('site.services.predstavitelstvo-v-arbitrazhnyh-sudah');
        }
    ]);
    Route::get('predstavitelstvo-v-sude', [
        'as' => 'predstavitelstvo-v-sude',
        function () {
            return view('site.services.predstavitelstvo-v-sude');
        }
    ]);
    Route::get('podgotovka-yuridicheskih-dokumentov', [
        'as' => 'podgotovka-yuridicheskih-dokumentov',
        function () {
            return view('site.services.podgotovka-yuridicheskih-dokumentov');
        }
    ]);
    Route::get('soprovozhdenie-sdelok-s-nedvizhimostyu', [
        'as' => 'soprovozhdenie-sdelok-s-nedvizhimostyu',
        function () {
            return view('site.services.soprovozhdenie-sdelok-s-nedvizhimostyu');
        }
    ]);
});
