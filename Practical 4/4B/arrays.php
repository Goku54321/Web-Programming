<?php
// Create an array
$fruits = array("Apple", "Banana", "Orange");

// Add a new fruit to the array
array_push($fruits, "Mango");

// Create an associative array
$person = array("name" => "Luffy Shaikh", "age" => 17);

// Loop through the fruits array
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Loop through the associative array
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Remove the last element from the fruits array
array_pop($fruits);

// Display the modified fruits array
print_r($fruits);   // Outputs: Array ( [0] => Apple [1] => Banana [2] => Orange )
?>
