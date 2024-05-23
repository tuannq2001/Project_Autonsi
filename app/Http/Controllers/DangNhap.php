<?php

namespace App\Http\Controllers;
use App\Http\Requests\DangNhapRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DangNhap extends Controller
{
    public function xuLyDangNhap(DangNhapRequest $request)
    {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            if(auth()->user()->role_id==1)
            {
               
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
}
