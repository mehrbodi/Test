<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function get_data()
    {
        $names = Test::all();
        return view('index',compact('names'));
    }
    public function post_data(Request $request)
    {
        $valid = $request->validate([
           'names' => 'required',
        ]);
        Test::create([
           'name' => $valid['names'],
        ]);

        return redirect('/');

    }
}
