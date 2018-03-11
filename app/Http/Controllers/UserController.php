<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function getUser(){
        $user = User::all();
        return view('page.user.user',compact('user'));
    }
    public function getThemUser($id){
        $user = User::find($id);
        return view('page.user.them',compact('user'));
    }
    public function postThemUser(Request $request,$id){
       
        $this->validate($request,[
            
            'txtUsername'=>'required|max:50|unique:users,name',
            'pwPassword'=>'required|max:150',
            
            
        ],[
            'txtUsername.required'=>'Bạn chưa nhập username',
            'txtUsername.unique'=>'Username đã tồn tại',
            'txtUsername.max'=>'Username không quá 50 ký tự',
            'pwPassword.required'=>'Bạn chưa nhập password',
            'txtUsername.max'=>'Tên ca không quá 150 ký tự',

        ]);
        $user = new User;
        $user->name = $request->txtUsername;
        $user->password = bcrypt($request->pwPassword);
        $user->quyen = $request->selectQuyen;
        $user->idnv = $id; 
        $user->save(); 
        return redirect('user/danhsach')->with('thongbao','Thêm thành công');

    }
    public function getSuaUser($id){
 
        $user = User::find($id);
        
        return view('page.user.sua', compact('user'));
    }
    public function postSuaUser(Request $request,$id){
       
        $this->validate($request,[
            
            'txtUsername'=>'required|max:50|unique:users,name',
            'pwPassword'=>'required|max:150',
            
            
        ],[
            'txtUsername.required'=>'Bạn chưa nhập username',
            'txtUsername.unique'=>'Username đã tồn tại',
            'txtUsername.max'=>'Username không quá 50 ký tự',
            'pwPassword.required'=>'Bạn chưa nhập password',
            'txtUsername.max'=>'Tên ca không quá 150 ký tự',

        ]);
        $user = User::find($id);
        $user->name = $request->txtUsername;
        $user->password = bcrypt($request->pwPassword);
        $user->quyen = $request->selectQuyen;
        $user->save(); 
        return redirect('user/danhsach')->with('thongbao','Sửa thành công');
    }

     public function getXoaUser($id){ 
        $user = User::find($id);
        $user->delete();
        return redirect('user/danhsach')->with('thongbao','Xóa thành công');
    }
}
