<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BttProductController extends Controller
{
    public function bttindex()
    {
        $fruits = array("Apple", "Orange", "Mango", "Banana", "Pineapple");
        return view('welcome',['fruits'=>$fruits]);
    }
}
