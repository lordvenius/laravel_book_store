<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class OrderController extends Controller {
    public function addOrder($form) {
        print_r($form);
        $url = url()->full();
        $uri = \Request::getRequestUri();
        print_r($uri);
        $id = $form["bookId"];
        $amount = $form["quantity"];
        $list = explode("=", $uri);
        print_r($list);

        $orderModel = new OrderModel;
        $order = $orderModel->addOrder($id, $amount);
        
        return view("booksAdded");
    }    
}

?>