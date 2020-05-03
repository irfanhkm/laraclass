<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $no = 1;
        // collection of array
//        $data = collect(['irfan', 'dimas', 'angga'])->map(function ($data, $key) use ($no) {
//            return ($no + $key) . '. ' . $data;
//        });

        // collcetion of object
        $data = collect([
            (object) [
                'name' => 'irfan',
                'age' => 19
            ],
            (object) [
                'name' => 'dimas',
                'age' => 13
            ],
        ]);

        return view('UserList', compact('data'));
    }
}
