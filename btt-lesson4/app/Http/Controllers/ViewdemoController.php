<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewdemoController extends Controller
{
    public function view4()
    {
        return view('view4')
            ->with('name', 'Thành Trung')
            ->with('company', 'Devmaster Academy');;
    }
    public function view5()
    {
        //dữ liệu
        $info = 'VIỆN CÔNG NGHỆ VÀ ĐÀO TẠO DEVMASTER';
        $emp = array(
            "Name"=>"Bùi Thành Trung",
            "Email"=>"buitr1538@gmail.com",
            "Phone"=>"0969021769",
        );
        if(View::exists('view5')){
            return view('view5',compact('info','emp'));
        }
        else{
            return "Không tồn tại view5";
        }
    }
}
