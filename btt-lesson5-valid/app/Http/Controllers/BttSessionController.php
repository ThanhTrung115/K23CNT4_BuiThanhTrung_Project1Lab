<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BttSessionController extends Controller
{
    //Đọc dữ liệu từ session
    public function bttGetSessionData(request $request)
    {
        if($request->session()->has("K23CNT4_BuiThanhTrung"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT4_BuiThanhTrung");
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    //Ghi dữ liệu vào session
    public function bttStoreSessionData(request $request)
    {
        $request->session()->put('K23CNT4_BuiThanhTrung','K23CNT4 - Bùi Thành Trung - 2310900108');
        echo "<h2> Dữ liệu đã được lưu vào session </h2>";
    }
    //Xóa dữ liệu trong session
    public function bttDeleteSessionData(request $request)
    {
        $request->session()->forget('K23CNT4_BuiThanhTrung');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
