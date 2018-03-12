<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\chucvu;
class ChucVuController extends Controller
{
    //
    public function getChucVu()
    {
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
        	$chucVu = chucvu::all();

        	return view('page.chucvu.chucvu',compact('chucVu'));
        }
        else
            return redirect('loi');	
    }
     
    public function getThemChucVu(){
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $chucVu = chucvu::all();
            return view('page.chucvu.them',compact('chucVu'));
        }
        else
            return redirect('loi');
    }
    public function postThemChucVu(Request $request){
       
        $this->validate($request,[
            
            'txtTenCV'=>'required|max:15',
            
        ],[
            'txtTenCV.required'=>'Bạn chưa nhập tên chức vụ',
            'txtTenCV.max'=>'Tên chức vụ không quá 15 ký tự',
            

        ]);
        $chucVu = new chucvu;
        $chucVu->tencv = $request->txtTenCV;
        

        $chucVu->save(); 
        return redirect('chucvu/danhsach')->with('thongbao','Thêm thành công');

    }
    public function getSuaChucVu($id){

        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $chucVu = chucvu::find($id); 
            return view('page.chucvu.sua', compact('chucVu'));
        }
        else
            return redirect('loi');
    }
    public function postSuaChucVu(Request $request,$id){
       
          $this->validate($request,[
            
            'txtTenCV'=>'required|max:15',
            
        ],[
            'txtTenCV.required'=>'Bạn chưa nhập tên chức vụ',
            'txtTenCV.max'=>'Tên chức vụ không quá 15 ký tự',
            

        ]);
        $chucVu = chucvu::find($id);       
        $chucVu->tencv = $request->txtTenCV;  
        $chucVu->save(); 
        return redirect('chucvu/danhsach')->with('thongbao','Sửa thành công');
    }

     public function getXoaChucVu($id){ 
        if(Auth::user()->quyen == '1' || Auth::user()->quyen == '2' )
        {
            $chucVu = chucvu::find($id);
            $chucVu->delete();
            return redirect('chucvu/danhsach')->with('thongbao','Xóa thành công');
        }
        else
            return redirect('loi');
    }
}
