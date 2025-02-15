<?php

function testInput($num) {
    $num = trim($num);
    $num = stripslashes($num);
    $num = htmlspecialchars($num);
    return $num;
}

function validateCard($crdNum, $amnt) {
    $mstercrd = substr($crdNum, 0, 2);
    $visa = substr($crdNum, 0, 1);
    $amex = substr($crdNum, 0, 2);
    $lastFour = substr($crdNum, -4);

    if (($mstercrd === "51" || $mstercrd === "52" || $mstercrd === "53" || $mstercrd === "54" || $mstercrd === "55") && strlen($crdNum) === 16) {
        return "Your MASTERCARD ending in $lastFour has been charged \$$amnt. Thank you for shopping.";
    } elseif ($visa === "4" && (strlen($crdNum) === 13 || strlen($crdNum) === 16)) {
        return "Your VISA ending in $lastFour has been charged \$$amnt. Thank you for shopping.";
    } elseif (($amex === "34" || $amex === "37") && strlen($crdNum) === 15) {
        return "Your AMEX ending in $lastFour has been charged \$$amnt. Thank you for shopping.";
    } else {
        return "INVALID CARD!";
    }
}
