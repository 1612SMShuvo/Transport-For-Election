<?php 
 
require_once 'connection.php';

 

if($_POST) {
	$id = $_POST['id'];

    $serial = $_POST['serial'];
	
	
    
 
    $sql = "UPDATE registration SET serial='$serial' WHERE id='$id'" ;
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";

		header('location:Table.php');
        //echo "<a href='../Edit.php?id=".$id."'><button type='button'>Back</button></a>";
        //echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
