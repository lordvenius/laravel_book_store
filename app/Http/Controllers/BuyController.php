<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class BuyController extends Controller {
    public function orderList() {
        $orderModel = new OrderModel;
        $bookModel = new BookModel;
        
        $orderItems = $orderModel->getOrder();

        

        $array = (array) $orderItems;

        
        
        $newIdArray = [];
        $newAmountArray = [];
        $fullOrderList = [];

        for ($i = 0; $i <= count($array); $i++) {
            $itemArray = (array) $orderItems[$i];
            $itemId = $itemArray["bookId"];
            $amount = $itemArray["amount"];
            //array_push($newIdArray, $itemIds);
            //array_push($newAmountArray, $amounts);

            $book = $bookModel->getBooks($itemId);

            $book["amount"] = $amount;

            array_push($fullOrderList, $book);
            

        }      
        
        $newOrderArray = (array) $fullOrderList[0];
        
        
        print_r($newOrderArray);
        

        
        return view("buy");
    }    
}

?>