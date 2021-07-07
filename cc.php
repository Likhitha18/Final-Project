<?php 

$conn = mysqli_connect("localhost", "root", "", "datab");
$sqll="update main_image set flag=0,flag1=0 where aadhar='865690904332'";
if(mysqli_query($conn, $sqll))
	echo "Succeess";
else
	echo "fail";
?>
