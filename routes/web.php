<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
 
Route::get('/callback', 'Auth\LoginController@handleProviderFacebookCallback');

Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('companies', 'CompaniesController@index')->name('companies.index');
    Route::get('signature', 'SignatureController@index')->name('signatures.index');
    Route::get('search', 'SignatureController@search')->name('search.index');
       Route::get('fileupload', 'SignatureController@fileupload')->name('fileupload.index');
});

Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Route::get('/send', 'EmailController@send');

Route::get('send2', function(){
	Mail::raw('sandbox testing!', function($message)
	{
		$message->to('haffiz_ito@yahoo.com');
	});
});

// To display form
Route::get('/testnotify', 'CommentController@getForm');
 
// Get comments
Route::get('get-comment', 'CommentController@index');
 
// Add comment to database
Route::post('post-comment', 'CommentController@store');

//Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');
//Route::resource('signatures', 'Api\SignatureController')
//    ->only(['index', 'store', 'show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
