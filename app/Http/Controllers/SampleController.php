<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function show(Request $request)
    {
        $data1 = $request->all();

        return view('news', compact('data1'));
    }
}
