<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class OrderController extends Controller {
    public function addOrder($form) {
        
        $orderArray = array_values($form);
        print_r($orderArray);
        $length = count($form) / 2;
        print_r($length);
        print_r($orderArray[1]);


        for ($i = 0; $i <= $length; $i+=2) {

            $id = $orderArray[$i];
            $amount = $orderArray[$i +1];

            if ($amount || $amount != 0) {
                $orderModel = new OrderModel;
                $order = $orderModel->addOrder($id, $amount);
            
            } else { 

            }         
        }

        return view("booksAdded");
    }    
}

?>