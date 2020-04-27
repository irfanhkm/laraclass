<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController
{
    public function index(Request $request)
    {
        $nama = $request->get('nama');
        return view('Hello', compact('nama'));
    }
}
