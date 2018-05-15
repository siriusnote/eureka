<?php
Route::prefix('admin')->group(function(){
	Route::get('/', 'Eureka\Admin\AdminController@index')->name('admin.dashboard');
});

?>