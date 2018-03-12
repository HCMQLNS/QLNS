<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function getUser(){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $user = User::all();
            return view('page.user.user',compact('user'));
        }
        else
            return redirect('loi');
    }
    public function getThemUser($id){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $user = User::find($id);
            return view('page.user.them',compact('user'));
        }
        else
            return redirect('loi');
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

        if(Auth::user()->quyen == 1)
        {
            $user = User::find($id);       
            return view('page.user.sua', compact('user'));
        }
        elseif(Auth::user()->nhanvien->idphong=='5' && (Auth::user()->id == $id ) && Auth::user()->quyen == 2)
            {
                return redirect('loi'); 
            }
            elseif(Auth::user()->quyen == 2)
            {
                $user = User::find($id);
        
                return view('page.user.sua', compact('user'));
            }
            else
                return redirect('loi');

        
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
        

        if(Auth::user()->quyen == 1)
        {
            $user = User::find($id);
            $user->delete();
            return redirect('user/danhsach')->with('thongbao','Xóa thành công');
        }
        elseif(Auth::user()->nhanvien->idphong=='5' && (Auth::user()->id == $id ) && Auth::user()->quyen == 2)
            {
                return redirect('loi'); 
            }
            elseif(Auth::user()->quyen == 2)
            {
                $user = User::find($id);
                $user->delete();
                return redirect('user/danhsach')->with('thongbao','Xóa thành công');
            }
            else
                return redirect('loi');
    }
}
