<?php
Route::prefix('admin')->group(function(){
	Route::get('/', 'Siriusnote\Framework\AdminController@index')->name('admin.dashboard');
});

?>