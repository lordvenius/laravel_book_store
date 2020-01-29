<?php
namespace App\Models;
use DB;

class BookModel {
    public function bookList($author, $title) {
        if (!$author && !$title) {
            $books = DB::table("books")->get();
            
            return $books;
        } else {

            if (!$author) {
                $author = "***";
            }
            if (!$title) {
                $title = "***";
            }

            $books = DB::table("books")
                ->where(function($query) use ($title, $author) {
                    $query->where("title", "LIKE", "%" . $title . "%")
                          ->orWhere("author", "LIKE", "%" . $author . "%");
                })
                ->get();
                
            return $books;
        }
    }

    public function getBooks($itemId) {
        $orderedBook = DB::table("books")->where("bookId", "=", $itemId)->get();
        return $orderedBook;
    }
}


?>

