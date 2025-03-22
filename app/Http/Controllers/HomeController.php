<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function convertText(Request $request)
    {
        $convertText = $request->convert_text;
        $convertText = preg_replace('/</', '&lt;', $convertText);
        $convertText = preg_replace('/>/', '&gt;', $convertText);
        $convertText = preg_replace('/"/', '&quot;', $convertText);
        $convertText = preg_replace("/'/", '&#39;', $convertText);

        //$convertText = htmlentities($request->convert_text);
        $language = $request->language;

        return view('convert', compact(
            'convertText', 
            'language',
        ));
    }
}
