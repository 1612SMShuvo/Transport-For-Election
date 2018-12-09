<?php 


require_once 'connection.php';
 
if($_GET) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM registration WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Style.css">
</head>

<body class="bodyss">
<br><br><br>
  <div class="form">

  <img src="logo.PNG" alt="logo" height="100" width="100">
  <h1>Transport for Election</h1>
				<a href="Index.php"><button>Home</button></a>
                <a href="Hire.php"><button>Hire Transport</button></a><br><br>
				<a href="Driver.php"><button>Log out</button></a>
				
				<br><br>
  <br><br>
    <br><br>
    <form class="login-form" action="add.php" method="POST">
	<h1 style="color:gray;">Add Transport Serial Number</h1>
	  <input type="text" name="id" value="<?php echo $data['id']?>" />
      <b>Name : </b><?php echo $data['name'] ?><br>
      <b>Phone No. : </b><?php echo $data['phone'] ?><br>
      <b>Holding No. : </b><?php echo $data['home'] ?><br>
      <b>Road No. : </b><?php echo $data['road'] ?><br>
      <b>Ward : </b><?php echo $data['ward'] ?><br>
      <b>Person : </b><?php echo $data['person'] ?><br>
      <b>Transport : </b><?php echo $data['transport'] ?><br>
      <input type="text" placeholder="Transport Serial Number" name="serial" value="<?php echo $data['serial'] ?>"/>
	  
      <button type="submit">Add</button><br><br><br>

    </form>
  </div>
  
  
  </body>
  </html>
<?php
}
?>