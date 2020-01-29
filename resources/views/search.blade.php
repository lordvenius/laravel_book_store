@extends('layout')
@section('content')

<h1>search</h1>

<table border>
    <form method="get" action="/result">
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="author">
            </td>
        </tr>
        <tr>
            <td>Title:</td>
            <td>
                <input type="text" name="title">
            </td>
        </tr>
        <tr><td colspan="2"><input type="submit" value="search"></td></tr>
    </form>
    <tr>
        <form action="/">
            <td colspan="2"><input type="submit" value="Main Menu"></td>
        </form>
    </tr>
</table>
@stop

