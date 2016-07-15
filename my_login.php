<?php   
 session_start();
 include("config.php"); //include the config
?>
<?php
//create database connection
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");
?>
<!-- php quary section -->
 <?php
 if(isset($_POST['login']))
 {
   $username =$_POST['name'];
   $password=$_POST['password'];
   $query="SELECT * FROM user_info WHERE name = '$username' AND password = '$password'"; //quary
   $result=$db->query($query);
   $num_rows=$result->num_rows;
   for($i=0;$i<$num_rows;$i++)
   {   $row=$result->fetch_row();
	}
   if(($username==$row[0])&&($password==$row[1])) //checking the username and password if right
   {
	   $_SESSION['username']=$username;
	   echo '<login><result>OK</result></login>';
   }
   else
   {
     echo "<login><result>Fail</result></login>";
   }
}
//@mysql_close($con);
?>
