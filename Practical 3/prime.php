<?php
function isPrime($num) {
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimesInRange($start, $end) {
    $primes = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

// Example usage
$start = 10;
$end = 50;
$primes = findPrimesInRange($start, $end);

echo "Luffy Shaikh: Prime numbers between $start and $end: " . implode(', ', $primes);
?>
