@extends('layout')
@section('content')

<h1>Result</h1>

<table border>
    <tr>
        <td>ID</td>
        <td>Author</td>
        <td>Title</td>
        <td>Price</td>
        <td>Amount</td>
    </tr>
    
    <form method="get" action="/add">
    @foreach ($books as $book)
        <tr>
        
            <td><input type="text" name="bookId" readonly value="{{$book->bookId}}"></td>
            <td>{{$book->author}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->price}}</td>
            <td><input type="number" name="quantity" min="0" max="5" default="0"></td>
        
        </tr>
    @endforeach
        <tr>
            <td colspan="5">
                <input type="submit" value="Add">
            </td>
        </tr>
    </form>
    <tr>
        <form action="/">
            <td colspan="5">
                <input type="submit" value="Main menu">
            </td>
        </form>
    </tr>
</table>
@stop