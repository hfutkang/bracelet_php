<form action="" method="post">
 
Name:<input type="text" name="fname">
 
 
Age:<input type="text" name="age">
 
<br />
 
<input type="submit">
 
</form>
 
<?php
$a=$_POST['fname'];
 
$b=$_POST['age'];
 
echo $a."<br />";
 
echo $b."<br />";
$v1 = 00123;

$time = new DateTime();
$time_stamp = $time->format('mdHis');
$v2 = intval($time_stamp);
$v3 = pack("a32", chr(0));
var_dump($v3);
?>
