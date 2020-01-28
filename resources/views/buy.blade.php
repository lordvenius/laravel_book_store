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
        <td>Amount</td>
        <td>Sum</td>
    </tr>
    @foreach ($books as $book)
        <tr>
        
            <td>{{$book["bookId"]}}</td>
            <td>{{$book["author"]}}</td>
            <td>{{$book["title"]}}</td>
            <td>{{$book["price"]}}</td>
            <td>{{$book["amount"]}}</td>
            <td>{{$book["amountPrice"]}}</td>
        
        </tr>
    @endforeach
        <tr>
            <td colspan="5">Total sum:</td>
            <td>{{$orderPrice}}</td>
        </tr>
    
    <tr>
        <form action="/">
            <td colspan="6">
                <input type="submit" value="Main menu">
            </td>
        </form>
    </tr>
</table>
@stop