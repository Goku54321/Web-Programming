<?php
function factorial($num) {
    if ($num == 0) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

$number = 6;
echo "Factorial of $number is: " . factorial($number);
?>
