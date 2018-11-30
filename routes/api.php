<?php

//Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
//    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
//    Route::resource('signatures', 'SignatureController', ['except' => ['create', 'edit']]);
//});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
    Route::resource('signatures', 'SignatureController', ['except' => ['create', 'edit']]);
 
});

Route::get('/test', function () {
    return 'Hello World';
});
//Route::get('/store', 'api\v1\SignatureController@store');
Route::post('/store', 'api\v1\SignatureController@store');
Route::get('/update/{signature}', 'api\v1\ReportSignature@index');
Route::get('/delete/{signature}', 'api\v1\ReportSignature@delete');

Route::get('/search', 'api\v1\SearchController@search');

//Route::put('signatures/{signature}/report', '\api\v1\ReportSignature@update');
