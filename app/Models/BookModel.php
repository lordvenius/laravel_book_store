<?php
namespace App\Models;
use DB;

class BookModel {
    public function bookList() {
        $books = DB::table("books")->get();
        return $books;
    }

    public function getBooks($itemId) {
        $orderedBook = DB::table("books")->where("bookId", "=", $itemId)->get();
        return $orderedBook;
    }
}


?>