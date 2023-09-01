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
    public function edit($id) {
        return view('book.edit', [
            'book' => Book::findOrFail($id)
        ]);
    }
    public function update(Request $req, $id) {
        $book = Book::findOrFail($id);
        $book->fill($req->except('_token', '_method'))->save();
        return redirect('book/list')
                ->with('success_message', '更新に成功しました。');
    }
    public function show($id) {
        return view('book.show', [
            'book' => Book::findOrFail($id)
        ]);
    }
}
