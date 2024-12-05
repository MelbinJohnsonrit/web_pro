<?php
$array = [12, 5, 3, 19, 8, 7];
$n = count($array);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo "Sorted array in reverse order: ";
//print_r($array);
for ($i = 0; $i < $n; $i++) {
    echo "   ".$array[$i];
}
?>
