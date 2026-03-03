<?php
function fibo($number) {
    if ($number <= 1) {
        return $number;
    } else {
        return fibo($number - 1) + fibo($number - 2);
    }
}

$number = 8; // Length of the Fibonacci sequence
for ($i = 0; $i < $number; $i++) {
    echo fibo($i) . " ";
}
?>
