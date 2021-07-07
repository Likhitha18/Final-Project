<?php
$aadhar="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online E-voting System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
}

  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Online e-Voting System</h1>
  <p>Cast Your Vote Here</p> 
</div>

<div class="topnav">
  <a class="active" href="fir1.php">Home</a>
   
  <!--<a href="#news">About Us</a>-->
  
  <div class="topnav-right">
    <a href="sec.html">Login</a>
    
  </div>
</div>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
	
<form method="POST" >
        <div class="row">
            <div class="col-md-8">
			<h2>Check Status</h2>
                <label for="exampleInputEmail1">Enter Your Aadhar Number:</label>
                <input type="text" name="aadhar" >
				<small id="Help" class="form-text text-muted">We'll never share your Aadhar with anyone else.</small>
                
            </div>
           
            <div class="col-md-12 text-center">
                <br/>
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
		<?php
		
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
if ($result = $mysqli -> query("SELECT * FROM main_db where aadhar=$aadhar")) {
  if($result -> num_rows>0)
	echo "<br><h4>You already Casted Your Vote</h4>";
	else
		echo "<br><h4>You didn't vote yet</h4>";	
  
}

$mysqli -> close();

?>


      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>YOUR VOICE YOUR VOTE</h2>
      
	  <img src="voting.jpg" class="img-fluid" alt="Responsive image">
      
      </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>IF YOU DON'T VOTE YOU LOOSE THE RIGHT TO COMPLAIN</p>
</div>

</body>

</html>
