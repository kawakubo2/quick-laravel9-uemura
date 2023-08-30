<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HelloController extends Controller
{
    public function index() {
        return 'こんにちは、世界！';
    }

    public function view() {
        $data = [
            'msg' => 'こんにちは、Laravel！'
        ];
        return view('hello.view', $data);
    }

    
}
