<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User; 
use App\nhanvien;
class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $this->validate($request,[
            
            'txtUsername'=>'required|max:50',
            'password'=>'required|max:50',
            
        ],[
            'txtUsername.required'=>'Bạn chưa nhập Username',
            'txtUsername.max'=>'Username không quá 50 ký tự',
            'password.required'=>'Bạn chưa nhập password',
            'password.max'=>'Password không quá 50 ký tự',
        ]);
    	$username = $request['txtUsername'];
    	$password = $request['password'];
    	
    	 
    	if (Auth::attempt(['name'=>$username,'password'=>$password])) 
    	{   
            
            

            return redirect('trangchu')->with('thongbao','Đăng nhập thành công.');
        }
    	else 
    		return redirect('dangnhap')->with('loi','Đăng nhập không thành công. Username hoặc password không đúng. ');	
    	
    }
     public function getDangXuat()
     {
        Auth::logout();
        return redirect('dangnhap');
     }
    
}
