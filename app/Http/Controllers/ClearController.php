<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;

class ClearController extends Controller {
    public function clearOrders() {

        $Model = new OrderModel;
        $lcearOrder = $Model->clearOrder();
        
        return view("clear");
    }    
}

?>