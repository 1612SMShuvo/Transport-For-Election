<?php

$username=$_POST['uname'];
$password=$_POST['password'];
if($username==Admin && $password==root){
	header("Location: Show.php");
}
//$username = stripcslashes($username);
//$password = stripcslashes($password);

//$username = mysqli_real_escape_string($connect,$username);
//$password = mysqli_real_escape_string($connect,$password);

//$result = mysqli_query($connect,"SELECT * FROM driver where uname='$username' and password='$password' ") 
//or die (mysqli_error());
//$row=mysqli_fetch_array($result);


//if(($row['uname'] == $username) && ($row['password'] == $password))
//{
	
//header("Location: Table.php");
//}
else 
{
echo("You Enterred Wrong Username Or Password <br><br><a href='Driver.php'><button type='button'>Try again</button></a>");
}
 ?> 