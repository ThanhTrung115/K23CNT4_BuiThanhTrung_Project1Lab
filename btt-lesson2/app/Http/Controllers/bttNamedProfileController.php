<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bttNamedProfileController extends Controller
{
    public function display()
    {
        return "<h1> Named Route Controller";
    }
    public function show()
    {
        return redirect()->route('display.profile');
    }
}
