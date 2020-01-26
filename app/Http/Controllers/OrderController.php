<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class OrderController extends Controller {
    public function addOrder($form) {
        print_r($form);
        $id = $form["bookId"];
        $amount = $form["quantity"];

        $orderModel = new OrderModel;
        $order = $orderModel->addOrder($id, $amount);
        
        return view("booksAdded");
    }    
}

?>