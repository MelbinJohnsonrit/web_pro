<?php
$num=153;
$numStr=strval($num);
$numOfDig=strlen($numStr);
$sum=0;
for($i=0;$i<$numOfDig;$i++){
    $dig=$numStr[$i];
    $sum+=pow($dig,$numOfDig);
}
if($sum == $num) {
    echo $num . " is an Armstrong number.";
} else {
    echo $num . " is not an Armstrong number.";
}
?>
