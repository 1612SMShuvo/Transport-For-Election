<?php 
 
require_once 'connection.php';


session_start();

if($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $home = $_POST['home'];
    $road = $_POST['road'];
	$ward = $_POST['ward'];
    $person = $_POST['person'];
    $transport = $_POST['transport'];
 
    $sql = "INSERT INTO registration(name, phone, home, road, ward, person, transport) VALUES ('$name', '$phone', '$home', '$road','$ward','$person','$transport')";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
		
		header("Location:User.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>