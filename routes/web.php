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
Route::group(['middlewarei'=>'web'],function(){
	
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'nhanvien'],function(){
	Route::get('danhsach',[
	'as'=>'nhan-vien',
	'uses'=>'NhanVienController@getNhanVien'
	]);
	Route::get('profile/{id}',[
		'as'=>'profile',
		'uses'=>'NhanVienController@getProfile'
	]);
	Route::get('themnhanvien',[
		'as'=>'themnhanvien',
		'uses'=>'NhanVienController@getThemNhanVien'
	]);
	Route::post('themnhanvien',[
		'as'=>'themnhanvien',
		'uses'=>'NhanVienController@postThemNhanVien'
	]);
	Route::get('suanhanvien/{id}',[
		'as'=>'suanhanvien',
		'uses'=>'NhanVienController@getSuaNhanVien'
	]);
	Route::post('suanhanvien/{id}',[
		'as'=>'suanhanvien',
		'uses'=>'NhanVienController@postSuaNhanVien'
	]);
	Route::get('xoanhanvien/{id}',[
		'as'=>'xoanhanvien',
		'uses'=>'NhanVienController@getXoaNhanVien'
	]);
});

Route::group(['prefix'=>'phong'],function(){
	Route::get('danhsach',[
	'as'=>'phong',
	'uses'=>'PhongController@getPhong'
	]);
	Route::get('themphong',[
		'as'=>'themnhanvien',
		'uses'=>'PhongController@getThemPhong'
	]);
	Route::post('themphong',[
		'as'=>'themphong',
		'uses'=>'PhongController@postThemPhong'
	]);
	Route::get('suaphong/{id}',[
		'as'=>'suaphong',
		'uses'=>'PhongController@getSuaPhong'
	]);
	Route::post('suaphong/{id}',[
		'as'=>'suaphong',
		'uses'=>'PhongController@postSuaPhong'
	]);
	Route::get('xoaphong/{id}',[
		'as'=>'xoaphong',
		'uses'=>'PhongController@getXoaPhong'
	]);
});

Route::group(['prefix'=>'ca'],function(){
	Route::get('danhsach',[
	'as'=>'ca',
	'uses'=>'CaController@getCa'
	]);
	Route::get('themca',[
		'as'=>'themca',
		'uses'=>'CaController@getThemca'
	]);
	Route::post('themca',[
		'as'=>'themca',
		'uses'=>'CaController@postThemCa'
	]);
	Route::get('suaca/{id}',[
		'as'=>'suaca',
		'uses'=>'CaController@getSuaCa'
	]);
	Route::post('suaca/{id}',[
		'as'=>'suaca',
		'uses'=>'CaController@postSuaCa'
	]);
	Route::get('xoaca/{id}',[
		'as'=>'xoaca',
		'uses'=>'CaController@getXoaCa'
	]);
});

Route::group(['prefix'=>'user'],function(){
	Route::get('danhsach',[
	'as'=>'user',
	'uses'=>'UserController@getUser'
	]);
	Route::get('themuser/{id}',[
		'as'=>'themuser',
		'uses'=>'UserController@getThemUser'
	]);
	Route::post('themuser/{id}',[
		'as'=>'themca',
		'uses'=>'UserController@postThemUser'
	]);
	Route::get('suauser/{id}',[
		'as'=>'suauser',
		'uses'=>'UserController@getSuaUser'
	]);
	Route::post('suauser/{id}',[
		'as'=>'suauser',
		'uses'=>'UserController@postSuaUser'
	]);
	Route::get('xoauser/{id}',[
		'as'=>'xoauser',
		'uses'=>'UserController@getXoaUser'
	]);
	Route::get('dangnhap',[
	'as'=>'profile',
	'uses'=>'PageController@getDangNhap'
]);
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
//auth

Route::post('dangnhap','AuthController@login')->name('login');
// Điểm danh
Route::get('diemdanh',[
	'as'=>'diemdanh',
	'uses'=>'PageController@getDiemDanh'
]);
Route::get('NS_diemdanh',[
	'as'=>'NS_diemdanh',
	'uses'=>'PageController@getNS_DiemDanh'
]);
//thống kê
Route::get('thongke',[
	'as'=>'thongke',
	'uses'=>'PageController@getThongKe'
]);
});
