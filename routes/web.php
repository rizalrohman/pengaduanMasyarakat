<?php

// Auth
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/cek_login', 'AuthController@cek_login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postregister', 'AuthController@postregister');

//Masyarakat
Route::group(['middleware' => ['authMasyarakat']], function () {
	Route::get('/masyarakat', 'MasyarakatController@index');	
	Route::get('/masyarakat/data-pengaduan', 'MasyarakatController@data_pengaduan');	    
});


//Petugas
Route::group(['middleware' => ['authPetugas']], function () {
	Route::get('/petugas', 'PetugasController@index');	
	Route::get('/petugas/data-petugas', 'PetugasController@data_petugas');	
	Route::get('/petugas/data-masyarakat', 'PetugasController@data_masyarakat');	
});

//Admin
Route::group(['middleware' => ['authAdmin']], function () {
	Route::get('/admin', 'AdminController@index');	

	Route::get('/admin/data-admin', 'AdminController@data_admin');	
	Route::post('/admin/post_add_admin', 'AdminController@post_add_admin');	
	Route::post('/admin/post_edit_admin/', 'AdminController@post_edit_admin');	
	Route::get('/admin/delete_admin/{id}', 'AdminController@delete_admin');	

	Route::get('/admin/data-petugas', 'AdminController@data_petugas');	
	Route::post('/admin/post_add_petugas', 'AdminController@post_add_petugas');	
	Route::post('/admin/post_edit_petugas/', 'AdminController@post_edit_petugas');	
	Route::get('/admin/delete_petugas/{id}', 'AdminController@delete_petugas');	

	Route::get('/admin/data-masyarakat', 'AdminController@data_masyarakat');	
	Route::post('/admin/post_add_masyarakat', 'AdminController@post_add_masyarakat');	
	Route::post('/admin/post_edit_masyarakat/', 'AdminController@post_edit_masyarakat');	
	Route::get('/admin/delete_masyarakat/{nik}', 'AdminController@delete_masyarakat');	


	Route::get('/admin/pengaduan/pengaduan-baru', 'AdminController@pengaduan_baru');	
	Route::get('/admin/pengaduan/detail/{id}', 'AdminController@detail_pengaduan');	
	Route::post('/admin/pengaduan/action_pengaduan', 'AdminController@action_pengaduan');	
});	