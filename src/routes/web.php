<?php

Route::group(['namespace'=>'Ejaz\Converter\Http\Controllers'],function(){

    Route::get('converter','ConverterController@index');
    Route::post('converter','ConverterController@getResults')->name('converter');



});
