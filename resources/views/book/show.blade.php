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
        <a class="btn btn-info" href="/book/list">書籍一覧へ戻る</a>
        <h3>書籍削除</h3>
        <table class="table">
            <tbody>
                <tr><th>ISBNコード</th><td>{{ $book->isbn }}</td></tr>
                <tr><th>書名</th><td>{{ $book->title }}</td></tr>
                <tr><th>価格</th><td>{{ $book->price}}円</td></tr>
                <tr><th>出版社</th><td>{{ $book->publisher }}</td></tr>
                <tr><th>刊行日</th><td>{{ $book->published }}</td></tr>
            </tbody>
        </table>
        <form action="/book/{{ $book->id }}" method="post">
            @csrf
            @method("DELETE")
            <div>
                <input class="btn btn-danger" type="submit" value="削除">
            </div>
        </form>
    </main>
</body>
</html>