<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tab, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary" href="/book/create">新規登録</a>
    <h3>書籍検索</h3>
    @if (session('success_message'))
        <div style="color: blue;">{{ session('success_message') }}</div>
    @endif
    <form action="/book/list" method="get">
        <span>価格</span>
        <select name="operand" id="operand">
            <option value=""></option>
            <option value="<">&lt;</option>
            <option value="<=">&lt;=</option>
            <option value="=">=</option>
            <option value=">">&gt;</option>
            <option value=">=">&gt;=</option>
        </select>
        <input type="number" name="price" id="price" min="0" />
        <input type="submit" value="検索" />
    </form>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->price }}円</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->published }}</td>
                <td>
                    <a class="btn btn-secondary" href="/book/{{ $book->id }}/edit">編集</a>&nbsp;&nbsp; 
                    <a class="btn btn-danger" href="/book/{{ $book->id }}">削除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>