<?php
namespace App\Models;
use DB;

class OrderModel {
    public function addOrder($id, $amount) {

        return DB::table("orders")->insert(["bookId" => $id, "amount" => $amount]);
        
    }
}
?>