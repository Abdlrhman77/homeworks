<?php

echo "<h2>1) Closure يحتفظ بمتغير العملة</h2>";

function makeCurrency($currency) {
    return function($price) use ($currency) {
        return $price . " " . $currency;
    };
}

$usd = makeCurrency("USD");
echo $usd(100) . "<br>";

$yr  = makeCurrency("YR");
echo $yr(2500) . "<br><br>";



echo "<h2>2) Currying Function (دالة الضريبة)</h2>";

function tax($percent) {
    return function($price) use ($percent) {
        return $price + ($price * ($percent / 100));
    };
}

$tax15 = tax(15);
echo "Price after 15% tax = " . $tax15(100) . "<br><br>";



echo "<h2>3) Lambda Function لحساب مربع الرقم</h2>";

$square = fn($x) => $x * $x;

echo "Square of 5 = " . $square(5) . "<br><br>";



echo "<h2>4) Higher-Order Function لتطبيق دالة على مصفوفة</h2>";

function applyToArray($arr, $func) {
    $result = [];
    foreach ($arr as $item) {
        $result[] = $func($item);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$double  = fn($n) => $n * 2;

$newArr = applyToArray($numbers, $double);

echo "<pre>";
print_r($newArr);
echo "</pre><br>";



echo "<h2>5) Function Composition لدمج دالتين</h2>";

function double($n) {
    return $n * 2;
}

function subtractFive($n) {
    return $n - 5;
}

function compose($f, $g) {
    return function($x) use ($f, $g) {
        return $g($f($x));
    };
}

$combo = compose("double", "subtractFive");

echo "Result = " . $combo(10); // (10 * 2) - 5 = 15

?>
