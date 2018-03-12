<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ca;
use Illuminate\Support\Facades\Auth;
class CaController extends Controller
{
    //
    public function getCa()
    {
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
    	   $ca = ca::all();
    	   return view('page.ca.ca',compact('ca'));	
        }
        else
            return redirect('loi');
    }   
     
    public function getThemCa(){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $ca = ca::all();
            return view('page.ca.them',compact('ca'));
        }
        else        
            return redirect('loi');
        
    }
    public function postThemCa(Request $request){
       
        $this->validate($request,[
            
            'txtTenCa'=>'required|max:10',
            'timeGioBatDau'=>'required',
            'timeGioKetThuc'=>'required'
            
        ],[
            'txtTenCa.required'=>'Bạn chưa nhập tên ca',
            'txtTenCa.max'=>'Tên ca không quá 10 ký tự',
            'timeGioBatDau.required'=>'Bạn chưa chọn giờ bắt đầu',
            'timeGioKetThuc.required'=>'Bạn chưa chọn giờ kết thúc',

        ]);
        $ca = new ca;
        $ca->tenca = $request->txtTenCa;
        $ca->tgbd = $request->timeGioBatDau;
        $ca->tgkt = $request->timeGioKetThuc; 

        $ca->save(); 
        return redirect('ca/danhsach')->with('thongbao','Thêm thành công');

    }
    public function getSuaCa($id){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $ca = ca::find($id);
        
            return view('page.ca.sua', compact('ca'));
        }
        else
            return redirect('loi');
        
    }
    public function postSuaCa(Request $request,$id){
       
         $this->validate($request,[
            
            'txtTenCa'=>'required|max:10',
            'timeGioBatDau'=>'required',
            'timeGioKetThuc'=>'required'
        ],[
            'txtTenCa.required'=>'Bạn chưa nhập tên ca',
            'txtTenCa.max'=>'Tên ca không quá 10 ký tự',
            'timeGioBatDau.required'=>'Bạn chưa chọn giờ bắt đầu',
            'timeGioKetThuc.required'=>'Bạn chưa chọn giờ kết thúc',
        ]);
        $ca = ca::find($id);       
        $ca->tenca = $request->txtTenCa;
        $ca->tgbd = $request->timeGioBatDau;
        $ca->tgkt = $request->timeGioKetThuc;      
        $ca->save(); 
        return redirect('ca/danhsach')->with('thongbao','Sửa thành công');
    }

     public function getXoaCa($id){ 
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $ca = ca::find($id);
            $ca->delete();
            return redirect('ca/danhsach')->with('thongbao','Xóa thành công');
        }
        else
            return redirect('loi');
        
    }
}
