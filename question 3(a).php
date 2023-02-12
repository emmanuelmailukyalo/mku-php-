<?php

$item_cost = 12000;
$number_of_items = 4;
$vat_rate = 0.16;

$subtotal = $item_cost * $number_of_items;
$vat_amount = $subtotal * $vat_rate;
$total_cost = $subtotal + $vat_amount;

echo "Subtotal: KES " . number_format($subtotal) . "<br>";
echo "VAT Amount: KES " . number_format($vat_amount) . "<br>";
echo "Total Cost: KES " . number_format($total_cost);

?>
