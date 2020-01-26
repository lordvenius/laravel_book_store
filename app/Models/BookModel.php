<?php
namespace App\Models;
use DB;

class BookModel {
    public function bookList() {
        $books = DB::table("books")->get();
        return $books;
    }
}
?>