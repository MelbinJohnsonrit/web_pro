<html>
<body>
<form method="POST">
    Enter a Number: <input type="number" name="num" required>
    <input type="submit" name="submit" value="Sum of prime">
</form>
<?php
if (isset($_POST['submit'])) {
    $n = $_POST['num'];
    $sum = 0;
    for ($i = 2; $i < $n; $i++) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $sum += $i;
        }
    }
    echo "Sum of prime numbers less than $n is $sum.";
}
?>
</body>
</html>
