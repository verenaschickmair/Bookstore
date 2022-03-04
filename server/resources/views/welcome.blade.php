<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
    <h1>Book Store</h1>
    <ul>
        @foreach($books as $book)
            <li>{{$book->isbn}} {{$book->title}}</li>
        @endforeach
    </ul>
    </body>
</html>
