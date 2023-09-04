<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main class="mx-auto" style="width: 400px;">
        @if ($errors->any())
            <ul>
            @foreach($errors->all() as $err)
                <li class="text-danger">{{ $err }}</li>
            @endforeach
            </ul>
        @endif
        <h3>書籍編集フォーム</h3>
        <form action="/book/{{ $book->id }}" method="post">
            @csrf
            @method('PATCH')
            <div class="pl-2">
                <label for="isbn">ISBNコード: </label><br>
                <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn', $book->isbn )}}">
             </div>
            <div class="pl-2">
                <label for="title">書名: </label><br>
                <input type="text" name="title" id="title" size="30" value="{{ old('title', $book->title )}}">
             </div>
            <div class="pl-2">
                <label for="price">価格: </label><br>
                <input type="text" name="price" id="price" size="5" value="{{ old('price', $book->price )}}">
             </div>
            <div class="pl-2">
                <label for="publisher">出版社: </label><br>
                <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher', $book->publisher )}}">
             </div>
            <div class="pl-2">
                <label for="published">刊行日: </label><br>
                <input type="text" name="published" id="published" size="10" value="{{ old('published', $book->published )}}">
             </div>
             <div class="pl-2">
                <input type="submit" value="更新" />
             </div>
        </form>
    </main>
</body>
</html>