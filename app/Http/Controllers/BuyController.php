<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class BuyController extends Controller {
    public function orderList() {
        $orderModel = new OrderModel;
        $bookModel = new BookModel;
        
        $orderItems = $orderModel->getOrder();

        

        

        
        
        $newIdArray = [];
        $newAmountArray = [];
        $fullOrderList = [];
        $orderPrice = 0;

        for ($i = 0; $i < count($orderItems); $i++) {
            $itemArray = (array) $orderItems[$i];
            $itemId = $itemArray["bookId"];
            $amount = $itemArray["amount"];
            //array_push($newIdArray, $itemIds);
            //array_push($newAmountArray, $amounts);

            $bookArray = $bookModel->getBooks($itemId);

            $book = $bookArray[0];
            $amountPrice = $book->price * $amount;
            
            
            $newBook = ["bookId" => $itemId, "author" => $book->author, "title" => $book->title, "price" => $book->price, "amount" => $amount, "amountPrice" => $amountPrice];


            array_push($fullOrderList, $newBook);

            $orderPrice += $amountPrice;


        }      

        

        $orderPriceBlade = ["orderPrice" => $orderPrice];
        


        
        
        $properties = ["books" => $fullOrderList, "orderPrice" => $orderPrice];
        
        

        
        return view("buy", $properties);
    }    
}

?>