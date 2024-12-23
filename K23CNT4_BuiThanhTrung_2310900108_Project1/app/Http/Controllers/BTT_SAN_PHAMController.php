<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponde;
use Illuminate\Http\Request;
use App\Models\BTT_SAN_PHAM;
use Illuminate\Support\Facades\DB;

class BTT_SAN_PHAMController extends Controller
{
    public function bttList()
    {
        $bttSanPhams = BTT_SAN_PHAM::all();

        return view('bttAdmins.bttSanPham.btt-list',['bttSanPham'=>$bttSanPhams]);
    }

    public function bttCreate()
    {
        return view('bttAdmins.bttSanPham.btt-create');
    }

    public function bttCreateSubmit(request $request)
    {
        //ghi dữ liệu xuống db

        $bttLoaiSanPham = new BTT_SAN_PHAM;
        $bttLoaiSanPham->bttMaSanPham = $request->bttMaSanPham;
        $bttLoaiSanPham->bttTenSanPham = $request->bttTenSanPham;
        $bttLoaiSanPham->bttHinhAnh = $request->bttHinhAnh;
        $bttLoaiSanPham->bttSoLuong = $request->bttSoLuong;
        $bttLoaiSanPham->bttDonGia = $request->bttDonGia;
        $bttLoaiSanPham->bttMaLoai = $request->bttMaLoai;
        $bttLoaiSanPham->bttTrangThai = $request->bttTrangThai;
        
        $bttLoaiSanPham->save();

        return redirect()->route('bttadmins.bttsanpham');
    }
}
