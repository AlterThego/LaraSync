<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function switch(Request $request)
    {
        $theme = $request->theme === 'night' ? 'night' : 'winter';
        $request->session()->put('theme', $theme);
        return response()->json(['theme' => $theme]);
    }
}