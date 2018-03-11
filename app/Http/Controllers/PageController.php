<?php

namespace App\Http\Controllers;
use App\nhanvien;
use App\chucvu;
use App\phong;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $phong = phong::all();
       
        return view('page.trangchu');

    }
    
    public function getDangNhap(){
        return view('page.user.dangnhap');
    }
    public function getDiemDanh(){ 
    	return view('page.diemdanh');
    }
	public function getNS_DiemDanh(){ 
    	return view('page.NS_diemdanh');
    }
	public function getThongKe(){ 
    	return view('page.thongke');
    }
}
