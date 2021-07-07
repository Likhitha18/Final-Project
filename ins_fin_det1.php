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
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "datab");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$data = $_REQUEST['data'];
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sqll="SELECT aadhar  FROM main_image WHERE flag1=1";
$result = $conn->query($sqll);
$row = $result->fetch_assoc();
  $sqli="UPDATE main_db1 SET data='$data' WHERE aadhar='".$row['aadhar']."' ";
	
		
		$sqll="update main_image set flag1=0";
		
		if(mysqli_query($conn, $sqli)){
			if(mysqli_query($conn, $sqll))
			header("location: final1.html");
			echo "<h3>Your Vote is Casted Successfully</h3>";

			#echo nl2br("\n$aadhar\n $party_name\n "
			#	. "$location");
		} else{
			echo "ERROR: Hush! Sorry $sqli. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		echo "return to Home";
		
		?>
	</center>
</body>

</html>
