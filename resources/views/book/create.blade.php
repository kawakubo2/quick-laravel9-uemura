<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
        <a class="btn btn-info" href="/book/list">書籍一覧へ戻る</a>
        <h3>書籍登録フォーム</h3>
        @if (session('success_message'))
            <div style="color: blue;">{{ session('success_message') }}</div>
        @endif
        <form action="/book/store" method="post">
            @csrf
            <div class="pl-2">
                <label for="isbn">ISBNコード: </label><br>
                <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn') }}" />
            </div>
            <div class="pl-2">
                <label for="title">書名: </label><br>
                <input type="text" name="title" id="title" size="30" value="{{ old('title') }}" />
            </div>
            <div class="pl-2">
                <label for="price">価格: </label><br>
                <input type="text" name="price" id="price" size="5" value="{{ old('price') }}" />
            </div>
            <div class="pl-2">
                <label for="publisher">出版社: </label><br>
                <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher') }}" />
            </div>
            <div class="pl-2">
                <label for="published">刊行日: </label><br>
                <input type="text" name="published" id="published" size="10" value="{{ old('published') }}" />
            </div>
            <div class="pl-2">
                <input type="submit" value="送信" />
            </div>
        </form>
    </main>
</body>
</html>