<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // アクションメソッド ---> URLに応じて呼び出されるメソッド
    /*
    public function list() {
        $data = [
            'books' => Book::all()
        ];
        return view('book.list', $data);
    }
    */
    public function list(Request $req) {
        if ($req->operand && $req->price) {
            $books = Book::where('price', $req->operand , $req->price)->get();
        } else if (!$req->operand && !$req->price) {
            $books = Book::all();
        } else {
            $books = [];
        }
        return view('book.list', [
            'books' => $books
        ]);
    }
    public function create() {
        return view('book.create');
    }
    public function store(Request $req) {
        // 入力値検証(バリデーション)
        $this->validate($req, Book::$rules);

        $book = new Book();
        // $bookインスタンスにidが格納されていない状態でsaveメソッドを
        // 呼び出すとinsert文が実行される。
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
        // 入力値検証(バリデーション)
        $this->validate($req, Book::$rules);

        // $bookインスタンスにidが格納されている状態でsaveメソッドを
        // 呼び出すとupdate文が実行される。
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
    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('book/list')
                ->with('success_message', '削除に成功しました。');
    }
}
