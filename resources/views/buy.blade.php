@extends('layout')
@section('content')

<h1>Buy</h1>

<p>Your orders have been sent</p>

<table border>
    <tr>
        <td>ID</td>
        <td>Author</td>
        <td>Title</td>
        <td>Price</td>
        <td>Number</td>
        <td>Sum</td>
    </tr>
    <form method="get" action="/orders">
        <tr>
        @foreach ($books as $book)
            <td>{{$book->id}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->number}}</td>
            <td></td>
        @endforeach
        </tr>
        <tr>
            <td colspan="5">Total sum:</td>
            <td></td>
        </tr>
    </form>
    <tr>
        <form action="/">
            <td colspan="6">
                <input type="submit" value="Main menu">
            </td>
        </form>
    </tr>
</table>
@stop