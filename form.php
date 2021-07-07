<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
	<title>Voting</title>
	<style>
	img{
  height: 200px;
	width:550px;
  }
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-right {
  float: right;
}</style>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Online E-Voting System</h1>
  <p>Cast Your Vote Here</p> 
</div>

<div class="topnav">
  <a class="active" href="fir1.php">Home</a>
  <!--<a href="#news">About Us</a>-->
  
  <div class="topnav-right">
    <a href="sec.html">Login</a>
    
  </div>
</div>
	<center>
		<br>
		<form action="insert.php" method="post">
			
			<p>
				<label for="aadhar">Aadhar Number:</label>
				<input type="text" name="aadhar" id="aadhar">
			</p>


			
			<p>
				<label for="party_name">Party Name:</label>
				<input type="text" name="party_name" id="party_name">
			</p>


			
			<p>
				<label for="location">Location:</label>
				<input type="text" name="location" id="location">
			</p>
<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
