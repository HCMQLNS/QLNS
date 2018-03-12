<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diemdanh;
use App\ca;
use App\phong;
use Illuminate\Support\Facades\Auth;
use App\nhanvien;
class ChamCongController extends Controller
{
    //

    public function getDiemDanh(){
        $ca = ca::all(); 
        $user = Auth::user();     
        return view('page.chamcong.diemdanh',compact('ca','user'));
    }
    public function postDiemDanh(Request $request){
       
        $this->validate($request,[
            
            'radioDiemDanh'=>'required',
        ],[
            'radioDiemDanh.required'=>'Vui lòng nhân để điểm danh',
            
        ]);
        

        $diemdanh = new diemdanh;
        $diemdanh->idca = $request->radioDiemDanh;
        $diemdanh->idnv = Auth::user()->idnv;
        $diemdanh->ngay = date("Y/m/d");
        $diemdanh->ghichu = ""; 

        $diemdanh->save(); 
        return redirect('chamcong/diemdanh')->with('thongbao','Điểm danh thành công');

    }

    // Nhân viên nhân sự điểm danh
	public function getNS_DiemDanh(){
        $phg = phong::all();
		$ca  = ca::all(); 
		$ns  = nhanvien::all();
        return view('page.chamcong.NS_diemdanh',compact('phg','ca','ns'));
    }
    public function postNS_DiemDanh(Request $request){
       
        $this->validate($request,[
            
            'radioDiemDanh'=>'required',
        ]);
        
        
        $diemdanh = new diemdanh;
        $diemdanh->idca = $request->radioDiemDanh;
        $diemdanh->idnv = Auth::user()->idnv;
        $diemdanh->ngay = date("Y/m/d");
        $diemdanh->ghichu = ""; 

        $diemdanh->save(); 
        return redirect('chamcong/diemdanh')->with('thongbao','Điểm danh thành công');

    }
}
