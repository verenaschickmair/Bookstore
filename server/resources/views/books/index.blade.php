<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body>
<h1>Book Store</h1>
<ul>
    @foreach($books as $book)
        <a href="books/{{$book->id}}">
        <li>{{$book->isbn}}<br/>{{$book->title}}</li>
        </a>
    @endforeach
</ul>
</body>
</html>
