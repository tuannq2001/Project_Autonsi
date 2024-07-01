<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NhapKho;
use App\Models\XuatKho;
use Illuminate\Support\Carbon;
class KhoController extends Controller
{
    public function layDanhSachNhapKho()
    {
        $nhapkho=NhapKho::all();
        return view('poinput',compact('nhapkho'));
    }
    public function layDanhSachXuatKho()
    {
        $xuatkho=XuatKho::all();
        return view('sooutput',compact('xuatkho'));
    }
}
