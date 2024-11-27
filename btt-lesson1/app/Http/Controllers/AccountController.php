<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        return "<h1> Account Controller; account index; return string";
    }
    public function create()
    {
        return view('account-create');
    }
    public function showData()
    {
        $data = array('2310900108', 'Bùi Thành Trung');
        return view('account-show', compact('data'));
    }
    public function list()
    {
        $data = array(
            ["id"=>1,"Username"=>"ThanhTrung","Password"=>"123456@","Fullname"=>"Bùi Thành Trung"],
            ["id"=>2,"Username"=>"Devmaster","Password"=>"123456@","Fullname"=>"Devmaster Academy"]
        );
        return view('account-list',compact('data'));
    }
    public function getAllAccount()
    {
        $data = DB::table('account')->get();
        return view('account-getall',compact('data'));
    }
}
