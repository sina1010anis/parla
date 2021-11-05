<?php
function dic($price , $dic){
    $discount = $dic / 100;
    $total_price = $price - ($price * $discount );
    return $total_price;
}
