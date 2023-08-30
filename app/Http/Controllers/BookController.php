<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function list() {
        $data = [
            'books' => Book::all()
        ];
        return view('book.list', $data);
    }
    public function create() {
        return view('book.create');
    }
    public function save(Request $req) {
        $book = new Book();
        $book->fill($req->except('_token'))->save();
        return redirect('book/create')
                ->with('success_message', '登録に成功しました。');
    }
}
