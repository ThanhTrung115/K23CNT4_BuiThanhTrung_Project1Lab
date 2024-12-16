<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BttSinhVien;

class BttSinhVienController extends Controller
{
    // list / insert / into / update(edit) / delete
    public function bttList()
    {
        $bttSinhViens = BttSinhVien::all();
        return view('sinhvien.list', ['bttSinhViens'=>$bttSinhViens]);
    }
    
    public function bttCreate()
    {
        return view('sinhvien.create');
    }

    public function bttCreateSubmit(Request $request)
    {
        // lấy dữ liệu submit trên form gán cho các thuộc tính của đối tượng sinh viên
        $bttSinhVien = new BttSinhVien;
        $bttSinhVien->MaSV=$request->bttMaSV;
        $bttSinhVien->TenSV=$request->bttTenSV;
        $bttSinhVien->HoSV=$request->bttHoSV;
        $bttSinhVien->Phai=$request->bttPhai;
        $bttSinhVien->NgaySinh=$request->bttNgaySinh;
        $bttSinhVien->NoiSinh=$request->bttNoiSinh;
        $bttSinhVien->MaKH=$request->bttMaKH;
        $bttSinhVien->HocBong=$request->bttHocBong;
        $bttSinhVien->DiemTrungBinh=$request->bttDiemTrungBinh;
        $bttSinhVien->save();
        return back()->with('sinhVien_created','Đã thêm mới một sinh viên thành công');
    }
}
