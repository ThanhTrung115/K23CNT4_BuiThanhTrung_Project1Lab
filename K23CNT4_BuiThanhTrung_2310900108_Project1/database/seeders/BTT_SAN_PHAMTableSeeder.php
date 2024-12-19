<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BTT_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'VP001',
            'bttTenSanPham'=>'Cây phú quý',
            'bttHinhAnh'=>'images/san-pham/VP001.jpg',
            'bttSoLuong'=>100,
            'bttDonGia'=>699000,
            'bttMaLoai'=>1,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'VP002',
            'bttTenSanPham'=>'Cây đại phú gia',
            'bttHinhAnh'=>'images/san-pham/VP002.jpg',
            'bttSoLuong'=>200,
            'bttDonGia'=>550000,
            'bttMaLoai'=>1,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'VP003',
            'bttTenSanPham'=>'Cây hạnh phúc',
            'bttHinhAnh'=>'images/san-pham/VP003.jpg',
            'bttSoLuong'=>150,
            'bttDonGia'=>250000,
            'bttMaLoai'=>1,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'VP004',
            'bttTenSanPham'=>'Cây vạn lộc',
            'bttHinhAnh'=>'images/san-pham/VP004.jpg',
            'bttSoLuong'=>300,
            'bttDonGia'=>799000,
            'bttMaLoai'=>1,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'PT001',
            'bttTenSanPham'=>'Cây thiết mộc lan',
            'bttHinhAnh'=>'images/san-pham/PT001.jpg',
            'bttSoLuong'=>150,
            'bttDonGia'=>590000,
            'bttMaLoai'=>3,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'PT002',
            'bttTenSanPham'=>'Cây trường sinh',
            'bttHinhAnh'=>'images/san-pham/PT002.jpg',
            'bttSoLuong'=>100,
            'bttDonGia'=>150000,
            'bttMaLoai'=>3,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'PT003',
            'bttTenSanPham'=>'Cây hạnh phúc',
            'bttHinhAnh'=>'images/san-pham/PT003.jpg',
            'bttSoLuong'=>200,
            'bttDonGia'=>299000,
            'bttMaLoai'=>3,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_SAN_PHAM')->insert([
            'bttMaSanPham'=>'PT004',
            'bttTenSanPham'=>'Cây hoa nhài',
            'bttHinhAnh'=>'images/san-pham/PT004.jpg',
            'bttSoLuong'=>300,
            'bttDonGia'=>199000,
            'bttMaLoai'=>3,
            'bttTrangThai'=>0
        ]);
    }
}
