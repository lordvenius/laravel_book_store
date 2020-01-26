<?php

namespace App\Http\Controllers;
use App\Models\BookModel;

class SearchController extends Controller {
    public function searchBooks() {
        $bookModel = new BookModel;
        $books = $bookModel->bookList();
        $properties = ["books" => $books];
        return view("result", $properties);
    }    
}

?>