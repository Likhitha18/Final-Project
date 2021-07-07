<?phpsession_start();$con=mysqli_connect('localhost','root','','datab');$email=$_POST['email'];$res=mysqli_query($con,"select * from user where email='$email'");$count=mysqli_num_rows($res);if($count>0){	$otp=rand(11111,99999);	mysqli_query($con,"update user set otp='$otp' where email='$email'");	$html="Your otp verification code is ".$otp;	$_SESSION['EMAIL']=$email;	if(smtp_mailer($email,'OTP Verification',$html)==0)		echo "yes";	else		echo "No";}else{	echo "not_exist";}function smtp_mailer($to,$subject, $msg){
	$sender="nihithanuthimadugu1@gmail.com";
	if(mail($to, $subject, $msg, $sender)){		return 0;
	}else{
		return 1;
	}
}?>