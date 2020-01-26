@extends('layout')
@section('content')
    <table border>
        <tr><td colspan="3"><h1>Small Bokus</h1></td></tr>
        <tr>
            <td>
                <form action="/search">
                <input type="submit" value="search">
                </form>
            </td>
            <td>
                <form action="/buy">
                <input type="submit" value="buy">
                </form>
            </td>
            <td>
                <form action="/clear">
                <input type="submit" value="clear">
                </form>
            </td>
        </tr>
    </table>
@stop    