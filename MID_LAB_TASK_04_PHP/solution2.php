<?php


function totalBill($amount)
{
    $totalAmount = $amount + 0.15;

    echo "<b>Total amount (15% VAT included):</b> $" . $totalAmount;
}

echo totalBill(200);
