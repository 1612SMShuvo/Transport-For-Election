<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="Style.css">
</head>

<body class="bodyss">
<br><br><br>
  <div class="form">

  <img src="logo.PNG" alt="logo" height="100" width="100">
  <h1>Transport for Election</h1>
				<a href="Index.php"><button>Home</button></a>
                <a href="Hire.php"><button>Hire Transport</button></a><br><br>
				<a href="Admin.php"><button>Admin login</button></a>
				<a href="Driver.php"><button>Driver login</button></a>
				
				<br><br>
  <br><br>
    <form class="login-form" action="registration.php" method="POST">
	<h1 style="color:gray;">Hire Your Transport</h1>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="Phone Number" name="phone" required />
      <input type="text" placeholder="Home Number" name="home" required />
      <input type="text" placeholder="Road Number" name="road" required />
      <input type="text" placeholder="Ward Number" name="ward" required />
      <input type="text" placeholder="Number of person" name="person" required />
      <input type="text" placeholder="Transport Type You Want" name="transport" required />
      <button type="submit">Send Request</button><br><br><br>

    </form>
  </div>
  

  
  </body>
</html>