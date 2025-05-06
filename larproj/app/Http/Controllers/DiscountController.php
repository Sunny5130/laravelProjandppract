<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function calculateDiscount($price, $discount)
    {
        if ($this->isDiscountValid($discount)) {
            $finalPrice = $price - ($price * ($discount / 100));
            return "The final price after discount is: $finalPrice";
        }
        return "Invalid discount. No discount applied. The price remains: $price";
    }

    // Private method for internal validation logic
    private function isDiscountValid($discount)
    {
        return $discount >= 0 && $discount <= 50;
    }
}
