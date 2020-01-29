<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\OrderModel;

class OrderController extends Controller {
    public function addOrder($form) {
        
        $length = count($form) / 2;
       
        for ($i = 1; $i <= $length; $i++) {

            $id = $form[$i];         
            $amount = $form[$id . "q"];

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