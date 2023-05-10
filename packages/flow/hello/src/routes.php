<?php

Route::get('/dhara', function(){
	echo 'Hello dhara Good Morning!';
});
Route::get('add/{a}/{b}', 'Flow\Hello\HelloController@add');
Route::get('subtract/{a}/{b}', 'Flow\Hello\HelloController@subtract');
