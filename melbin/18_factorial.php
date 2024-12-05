<?php
$number = 5;
if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
    exit;
}
$result = 1;
for ($i = 1; $i <= $number; $i++) {
    $result *= $i;
}
echo "The factorial of " . $number . " is: " . $result;
?>
