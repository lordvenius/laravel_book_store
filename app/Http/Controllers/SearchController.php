<?php

namespace App\Http\Controllers;
use App\Models\BookModel;

class SearchController extends Controller {
    public function searchBooks($form) {
        $author = $form["author"];
        $title = $form["title"];
        $bookModel = new BookModel;
        $books = $bookModel->bookList($author, $title);
        $properties = ["books" => $books];
        return view("result", $properties);
    }    
}

?>