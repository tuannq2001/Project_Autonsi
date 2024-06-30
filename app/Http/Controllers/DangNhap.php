<?php

namespace App\Http\Controllers;
use App\Http\Requests\DangNhapRequest;
use App\Http\Requests\TaiKhoanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
class DangNhap extends Controller
{
    public function main()
    {
        if(Auth()->check())
        {
            return view('homepage');
        }
        else
        return view('welcome');
    }
    public function dangNhap()
    {
        return view('welcome');
    }
    public function xuLyDangNhap(DangNhapRequest $request)
    {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            if(auth()->user()->role_id==1)
            {
                return view('homepage');
            }
            elseif(auth()->user()->role_id==2)
             {

             }
             else{
                return view('homepage');
             }
              }
        return back()->withErrors(['failed'=>"Vui lòng kiểm tra lại Username/password"]);
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }

    public function dangKi()
    {
        return view('signup');
    }

    public function xuLyDangKi(TaiKhoanRequest $request)
    {
        $tk= new TaiKhoan();
        $tk->name=$request->username;
        $tk->email=$request->email;
        $tk->role_id=1;
        $tk->password=Hash::make($request->password);
        if($request->repassword==$request->password)
        {
            $tk->save();
            return back()->withErrors(['failed'=>"Đăng kí thành công"]);
        }
        else
        {
            return back()->withErrors(['failed'=>"Mật khẩu không trùng khớp!!!!!"]);
        }
    }


}
