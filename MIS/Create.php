<?php 
 
require_once 'connection.php';


session_start();

if($_POST) {
    $uname = $_POST['uname'];
    $licence = $_POST['licence'];
    $password = $_POST['password'];

 
    $sql = "INSERT INTO driver(uname, licence, password) VALUES ('$uname', '$licence', '$password')";
    if($connect->query($sql) === TRUE) {
		header("location:Driver.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>