<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    
    public function getThemUser($id){
        $user = User::find($id);
        return view('page.user.them',compact('user'));
    }
    public function postThemUser(Request $request,$id){
       
        $this->validate($request,[
            
            'txtUsername'=>'required|max:50',
            'pwPassword'=>'required|max:50',
            
            
        ],[
            'txtUsername.required'=>'Bạn chưa nhập username',
            'txtUsername.max'=>'Username không quá 50 ký tự',
            'pwPassword.required'=>'Bạn chưa nhập password',
            'txtUsername.max'=>'Tên ca không quá 50 ký tự',

        ]);
        $user = new User;
        $user->tenca = $request->txtTenCa;
        $user->tgbd = $request->timeGioBatDau;
        $user->tgkt = $request->timeGioKetThuc; 

        $ca->save(); 
        return redirect('ca/danhsach')->with('thongbao','Thêm thành công');

    }
    public function getSuaCa($id){
 
        $ca = ca::find($id);
        
        return view('page.ca.sua', compact('ca'));
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
        $ca = ca::find($id);
        $ca->delete();
        return redirect('ca/danhsach')->with('thongbao','Xóa thành công');
    }
}
