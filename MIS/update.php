<?php 
 
require_once 'connection.php';

 

if($_POST) {
	$id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $home = $_POST['home'];
    $road = $_POST['road'];
	$ward = $_POST['ward'];
    $person = $_POST['person'];
    $transport = $_POST['transport'];
    $serial = $_POST['serial'];
	
	
    
 
    $sql = "UPDATE registration SET name='$name', phone='$phone', home='$home', road='$road', ward='$ward', person='$person', transport='$transport', serial='$serial' WHERE id='$id'" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
		header('location:Show.php');
        //echo "<a href='../Edit.php?id=".$id."'><button type='button'>Back</button></a>";
        //echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}

 
?>