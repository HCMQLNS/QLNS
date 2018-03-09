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
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
//auth
Route::get('dangnhap',[
	'as'=>'profile',
	'uses'=>'PageController@getDangNhap'
]);
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
