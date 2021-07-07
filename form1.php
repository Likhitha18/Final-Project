<html>
<head>
  <title>Online e-Voting System</title>
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
  .container{
        max-width: 500px;
		
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
.nav-link{
border: 2px solid black;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Cast Your Vote</h1>
  
</div>

<div class="topnav">
  <a class="active" href="fir1.php">Home</a>
  <!--<a href="#news">About Us</a>-->
  
  <div class="topnav-right">
    <a href="sec.html">Login</a>
    
  </div>
</div>
<body>

<div class="container" style="margin-top:25px">
 <form method="post" action="ins_fin_det.php" >    

<?php
include("config.php");

$conn = mysqli_connect("localhost", "root", "", "datab");

$sqll="SELECT location FROM main_image WHERE flag='1'";
$result = $conn->query($sqll);
$row = $result->fetch_assoc();
$s=$row["location"];
$query_salutation_type = "SELECT username,password,location FROM candidates WHERE location='$s'";

$select_salutation_type=mysqli_query($conn, $query_salutation_type);
echo "Candidate Name | Party | Location<br><br>";
while($row1 = mysqli_fetch_array($select_salutation_type))
{
    echo '<input type="radio" name="data" value="'.$row1[0]." ".$row1[1]." ".$row1[2].'"/>'." ".$row1[0]." ".$row1[1]." ".$row1[2];
	echo "<br><br>";

}
?>
       <input type="submit" name="submit" value="Submit"/>
	   </div>
</form>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="grey" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,186.7C384,149,480,107,576,122.7C672,139,768,213,864,229.3C960,245,1056,203,1152,170.7C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</body>
</html>