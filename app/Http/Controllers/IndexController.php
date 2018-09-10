<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class IndexController extends Controller
{
    public function welcome()
    {
        $abouts = About::all();
        return view('welcome',compact('abouts'));
    }
    public function page(Request $request, $id)
    {
        $about = About::find($id);
        if (!$about) {
            abort(404);
        }
        return view('about.page',compact('about'));
    }
}
