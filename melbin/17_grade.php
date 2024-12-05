<html>
<body>
<form method = "POST">
    Enter Marks:<input type ="number" name = "marks" >
   <input type ="submit" name = "submit" value = "check grade">
</form>
<?php
if(isset($_POST['submit'])){
$marks=$_POST['marks'];
if($marks>=60){
    echo "First Division";
}elseif($marks>=45){
    echo "Second Division";
}elseif($marks>=33){
    echo "Third Division";
}else{
    echo"Fail";
}
}
?>
</body>
</html>
