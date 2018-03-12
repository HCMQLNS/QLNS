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

	Route::group(['prefix'=>'chucvu'],function(){
		Route::get('danhsach',[
		'as'=>'chucvu',
		'uses'=>'ChucVuController@getChucVu'
		]);
		Route::get('themchucvu',[
			'as'=>'themChucVu',
			'uses'=>'ChucVuController@getThemChucVu'
		]);
		Route::post('themchucvu',[
			'as'=>'themChucVu',
			'uses'=>'ChucVuController@postThemChucVu'
		]);
		Route::get('suachucvu/{id}',[
			'as'=>'suachucvu',
			'uses'=>'ChucVuController@getSuaChucVu'
		]);
		Route::post('suachucvu/{id}',[
			'as'=>'suachucvu',
			'uses'=>'ChucVuController@postSuaChucVu'
		]);
		Route::get('xoachucvu/{id}',[
			'as'=>'xoachucvu',
			'uses'=>'ChucVuController@getXoaChucVu'
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
		
		
	});


//================
Route::get('dangxuat',[
	'as'=>'dangxuat',
	'uses'=>'AuthController@getDangXuat'
	]);

Route::get('trangchu',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);




// Điểm danh
	

Route::group(['prefix'=>'chamcong'],function(){
	Route::get('diemdanh',[
		'as'=>'diemdanh',
		'uses'=>'ChamCongController@getDiemDanh'
		]);
	Route::get('NS_diemdanh',[
		'as'=>'NS_diemdanh',
		'uses'=>'ChamCongController@getNS_DiemDanh'
	]);
	Route::post('diemdanh',[
		'as'=>'diemdanh',
		'uses'=>'ChamCongController@postDiemDanh'
	]);
	Route::post('NS_diemdanh',[
		'as'=>'NS_diemdanh',
		'uses'=>'ChamCongController@postNS_diemdanh'
	]);
	
});
//thống kê
Route::get('thongke',[
	'as'=>'thongke',
	'uses'=>'PageController@getThongKe'
]);

Route::get('dangnhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getDangNhap'
]);

Route::post('dangnhap','AuthController@login')->name('login');

Route::get('loi',[
	'as'=>'loi',
	'uses'=>'PageController@getLoi'
]);

Route::get('index',[
	'as'=>'index',
	'uses'=>'PageController@getDangNhap'
]);

//============================================
//Route::group(['middleware'=>'QuyenNhanVienMiddle'],function(){
//
//	Route::group(['prefix'=>'nhanvien'],function(){
//		
//		Route::get('profile/{id}',[
//			'as'=>'profile',
//			'uses'=>'NhanVienController@getProfileCaNhan'
//		]);
		
//	});

//});

//==============================================================================
