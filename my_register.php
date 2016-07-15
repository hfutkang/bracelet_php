
<?php include 'config.php'; ?>
<?php
//database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");

?>
<!-- php quary section -->
<?php
  if(isset($_POST['name']))
  {
   //geting the values from user input form index
   $email=$_POST['email'];
   $username=$_POST['name'];
   $password=$_POST['password'];
    //quary
   if ($db->query("INSERT INTO user_info
    (name,email,password)
    VALUES ('$username','$email','$password')"))
    print "<register><result>OK</result></register>";
   else {
	echo '<register><result>Fail</result></register>';
   }
  }
?>
