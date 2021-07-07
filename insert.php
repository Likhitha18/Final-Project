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
		
		// Taking all 5 values from the form data(input)
		$aadhar = $_REQUEST['aadhar'];
		$party_name = $_REQUEST['party_name'];
		$location = $_REQUEST['location'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO vote_list VALUES ('$aadhar',
			'$party_name','$location')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Your Vote is Casted Successfully</h3>";

			#echo nl2br("\n$aadhar\n $party_name\n "
			#	. "$location");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		echo "return to Home";
		header("location: final.html");
		?>
	</center>
</body>

</html>
