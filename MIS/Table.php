<?php require_once 'connection.php'; 



?>
<title>Driver Show</title>

<link rel="stylesheet" href="Style.css">

  
<body class="bodyss">

               
	<center><br><br><br><br>
                <div class="form" style="max-width: 800px;">
				<leftcorner>
				<img src="logo.PNG" alt="logo" height="100" width="100">
				</leftcorner>
				<h1>Transport for Election</h1>
				<a href="Index.php"><button>Home</button></a>
                <a href="Hire.php"><button>Hire Transport</button></a><br><br>
				<a href="Driver.php"><button>Log out</button></a> 
				<br><br>
				<table border="4" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Home Number</th>
                <th>Road Number</th>
                <th>Ward Number</th>
                <th>Number of person</th>	
                <th>Transort Type</th>
                <th>Serial No.</th>		
                <th>Option</th>
            </tr>
</thead>
<tbody>
            <?php
            $sql = "SELECT * FROM registration ";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']." </td>
                        <td>".$row['phone']."</td>
                        <td>".$row['home']."</td>
						<td>".$row['road']."</td>
                        <td>".$row['ward']."</td>
                        <td>".$row['person']."</td>
                        <td>".$row['transport']."</td>
                        <td>".$row['serial']."</td>
                        <td>
                            <a href='Serialadd.php?id=".$row['id']."'><button type='button'>Add</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='12'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>

</table>
<br><br><br><br>
		<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</div>
	</center>
</body>