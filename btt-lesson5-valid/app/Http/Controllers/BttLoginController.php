<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BttLoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // Validation form
        $validationData = $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'password' => 'required|min:6|max:12'
        ]);
        // Lấy giá trị trên các điều khiển của form
        $email=$request->input('email');
        $password=$request->input('password');

        $loginSession = [
            'email'=>$email,
            'password'=>$password
        ];

        $btt_json = json_encode($loginSession);
        
        if($email == "buitr1538@gmail.com" && $password == "123456@a"){
            $request->session()->put('K23CNT4-BuiThanhTrung',$email);
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Lỗi đăng nhập');
        // $res=$request->all();
        // return $res;
    }

    public function logout(request $request)
    {
        $request->session()->forget("K23CNT4-BuiThanhTrung");
        $request->session()->flush();
        return redirect('/');
    }
}