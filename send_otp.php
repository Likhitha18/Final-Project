<?php
	$sender="nihithanuthimadugu1@gmail.com";
	if(mail($to, $subject, $msg, $sender)){
	}else{
		return 1;
	}
}