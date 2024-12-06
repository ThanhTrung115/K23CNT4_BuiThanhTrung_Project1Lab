<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BttRegistrationController extends Controller
{
    public function index()
    {
        return view('BttRegistration');
    }

    public function registerSubmit(Request $request)
    {
        $validationData = $request->validate([
            'userid' => 'required|min:5|max:12',
            'pass' => 'required|min:7|max:12',
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'address' => 'nullable|string',
            'country' => 'required',
            'zipcode' => 'required|numeric',
            'email' => 'required|email',
            'sex' => 'required',
            'language' => 'required|array',
            'about' => 'nullable|string'
        ]);
        $userid=$request->input('userid');
        $pass=$request->input('pass');
        $name=$request->input('name');
        $address=$request->input('address');
        $country=$request->input('country');
        $zipcode=$request->input('zipcode');
        $email=$request->input('email');
        $sex=$request->input('sex');
        $language=$request->input('language');
        $about=$request->input('about');
        return "<h1>Xin chào: ". $name;
    }
}
