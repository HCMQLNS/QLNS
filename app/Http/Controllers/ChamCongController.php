<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\diemdanh;
use App\ca;
class ChamCongController extends Controller
{
    //

    public function getDiemDanh(){
        $ca = ca::all();      
        return view('page.chamcong.diemdanh',compact('ca'));
    }
    public function postDiemDanh(Request $request){
       
        $this->validate($request,[
            
            'radioDiemDanh'=>'required',
        ],[
            'radioDiemDanh.required'=>'VUi lòng nhân để điểm danh',
            
        ]);
        $diemdanh = new diemdanh;
        $diemdanh->idca = $request->radioDiemDanh;
        $diemdanh->idnv = "1";
        $diemdanh->ngay = date("Y/m/d"); 

        $diemdanh->save(); 
        return redirect('chamcong/diemdanh')->with('thongbao','Điểm danh thành công');

    }
}
