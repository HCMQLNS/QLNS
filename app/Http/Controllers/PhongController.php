<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phong;
use Illuminate\Support\Facades\Auth;
class PhongController extends Controller
{
    //
    public function getPhong()
    {
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
        	$phong = phong::all();

        	return view('page.phong.phong',compact('phong'));	
        }
        else
            return redirect('loi');
    }
     
    public function getThemPhong(){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $phong = phong::all();
            return view('page.phong.them',compact('phong'));
         }
        else
            return redirect('loi');
    }
    public function postThemPhong(Request $request){
       
        $this->validate($request,[
            
            'txtTenPhong'=>'required|max:15',
        ],[
            'txtTenPhong.required'=>'Bạn chưa nhập tên phòng',
            'txtTenPhong.max'=>'Tên phòng không quá 15 ký tự',
        ]);
        $phong = new phong;
        $phong->tenphong = $request->txtTenPhong;      
        $phong->save(); 
        return redirect('phong/danhsach')->with('thongbao','Thêm thành công');

    }
    public function getSuaPhong($id){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $phong = phong::find($id);
            return view('page.phong.sua', compact('phong'));
        }
        else
            return redirect('loi');

    }
    public function postSuaPhong(Request $request,$id){
       
         $this->validate($request,[
            
            'txtTenPhong'=>'required|max:15',
        ],[
            'txtTenPhong.required'=>'Bạn chưa nhập tên phòng',
            'txtTenPhong.max'=>'Tên phòng không quá 15 ký tự',
        ]);
        $phong = phong::find($id);       
        $phong->tenphong = $request->txtTenPhong;      
        $phong->save(); 
        return redirect('phong/danhsach')->with('thongbao','Sửa thành công');
    }

     public function getXoaPhong($id){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        { 
            $phong = phong::find($id);
            $phong->delete();
            return redirect('phong/danhsach')->with('thongbao','Xóa thành công');
        }
        else
            return redirect('loi');
    }
}
