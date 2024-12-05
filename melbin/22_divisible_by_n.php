<html>
<body>
<form method="POST">
    Enter a Number: <input type="number" name="num"><br>
    Enter Divisor : <input type="number" name="div"><br>
    <input type="submit" name="submit" value="Check Divisibility">
</form>
<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $divisor = $_POST['div'];
    if ($num % $divisor == 0) {
        echo "$num is divisible by $divisor.";
    } else {
        echo "$num is not divisible by $divisor.";
    }
}
?>
</body>
</html>
