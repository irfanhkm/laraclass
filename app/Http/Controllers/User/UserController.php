<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function input()
    {
        return view('Input');
    }

    public function penjumlahan(Request $request)
    {
        $firstNumber = $request->first_number;
        $secondNumber = $request->second_number;
        $hasil = $firstNumber + $secondNumber;
        return view('Penjumlahan', compact('hasil'));
    }
}
