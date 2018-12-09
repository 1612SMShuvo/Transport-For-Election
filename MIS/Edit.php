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
				<a href="Admin.php"><button>Admin logout</button></a>
				
				<br><br>
  <br><br>
    <br><br>
    <form class="login-form" action="update.php" method="POST">
	<h1 style="color:gray;">Edit deal</h1>
	  <input type="text" name="id" value="<?php echo $data['id']?>" />
      <input type="text" placeholder="Name" name="name" value="<?php echo $data['name'] ?>"/>
      <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $data['phone'] ?>"/>
      <input type="text" placeholder="Home Number" name="home" value="<?php echo $data['home'] ?>"/>
      <input type="text" placeholder="Road Number" name="road" value="<?php echo $data['road'] ?>"/>
      <input type="text" placeholder="Ward Number" name="ward" value="<?php echo $data['ward'] ?>"/>
      <input type="text" placeholder="Number of person" name="person" value="<?php echo $data['person'] ?>"/>
      <input type="text" placeholder="Transport Type You Want" name="transport" value="<?php echo $data['transport'] ?>"/>
      <input type="text" placeholder="Transport Serial Number" name="serial" value="<?php echo $data['serial'] ?>"/>
	  
      <button type="submit">Save</button><br><br><br>

    </form>
  </div>
  

  
  </body>
  </html>
<?php
}
?>