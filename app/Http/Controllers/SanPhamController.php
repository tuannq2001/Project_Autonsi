<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use Illuminate\Support\Carbon;

class SanPhamController extends Controller
{
    public function sanPham()
    {
        return view('Product');
    }
    public function xuLyThemSanPham(Request $request)
    {
        $sp= new SanPham();

       $sp->PRO_Name=$request->productname;
       $sp->PRO_Code=$request->productcode;
       $sp->PRO_CreateDate= now();
       $sp->PRO_Status= 1;
       $sp->PRO_Price= $request->productprice;
       $sp->PRO_Description= $request->productdescription;
       $sp->save();
        return back()->withErrors(['success'=>"Thêm sản phẩm thành công"]);
    }
    public function layDanhSachSanPham()
    {
        $sanpham=SanPham::all();
        return view('product',compact('sanpham'));
    }
    function xoaSanPham($id)
    {
        $sp=SanPham::where('PRO_ID',$id)->get();
        if($sp==null)
        {
            return redirect()->route('san-pham')->withErrors(['failed'=>"Không tìm thấy sản phẩm này"]);
        }
    else
    {
        $sp=SanPham::where('PRO_ID',$id)->delete();
        return redirect()->route('san-pham');

    }
        return back()->withErrors(['failed'=>"Không thể xóa sản phẩm này"]);
    }
}
