<?php
include("config1.php");
$sql = "select filename from image where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['filename'];
$image_src = "upload/".$image;

?>
<img src='<?php echo $image_src;  ?>' >