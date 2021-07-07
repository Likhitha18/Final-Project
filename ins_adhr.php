<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// datab name => staff
		$conn = mysqli_connect("localhost", "root", "", "datab");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
			$aadhar="";
$mysqli = new mysqli("localhost","root","","datab");
if(isset($_POST['aadhar']))
$aadhar = $_POST['aadhar'];
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM main_db where aadhar=$aadhar") or $result = $mysqli -> query("SELECT * FROM main_db1 where aadhar=$aadhar")) {
  if($result -> num_rows>0)
  {
	  header("location: not_elig.html");
  }
	else
	{
		$aadhar = $_REQUEST['aadhar'];
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO main_db VALUES ('$aadhar','','')";
		$sqlll = "INSERT INTO main_db1 VALUES ('$aadhar','','')";
		
		$sqll="update main_image set flag=1,flag1=1 where aadhar=$aadhar";
		
		if(mysqli_query($conn, $sql)){
			if(mysqli_query($conn, $sqll))
				if(mysqli_query($conn, $sqlll))
					echo "";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		echo "return to Home";
		header("location: index2.php");
	}
  
}
		
		?>
	</center>
</body>

</html>
