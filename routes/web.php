<?php

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/test', function () {
//    return 'Hello World';
//});


Route::get('/test', 'TestController@index');


Route::get('request1', 'StudentController@index');

Route::group(['middleware'=>['web']],function () {
    Route::get('student/index', ['uses' => 'StudentController@index']);
    Route::any('student/create', ['uses' => 'StudentController@create']);
    Route::any('student/save', ['uses' => 'StudentController@save']);
    Route::any('student/update/{id}', ['uses' => 'StudentController@update']);
    Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);
    Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);

});