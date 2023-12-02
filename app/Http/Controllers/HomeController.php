<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function convertText(Request $request)
    {
        $convertText = htmlentities($request->convert_text);

        return view('convert', compact('convertText'));
    }
}
