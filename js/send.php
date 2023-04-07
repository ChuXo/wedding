<?php
if(!$_POST) exit;

    $to 	  = 'schucktimo123@gmail.com';// 'christina_brand@outlook.de';
	$fname	  = $_POST['fname'];
	$lname	  = $_POST['lname'];	
	$email    = $_POST['email'];
	$lmessage    = $_POST['txtmessage'];
	$join    = $_POST['rsvp'];
	$noguests    = $_POST['cmbguests'];
	$guestnames    = $_POST['txtguestnames'];
	$song 		= $_POST["song"];
	$allergy    = $_POST["allergy"];
	$bringfood 	= $_POST["bringfood"];
	$other		= $_POST["other"];
	
	$subject  = 'New RSVP Submitted';
        
	if(get_magic_quotes_gpc()) { $lmessage = stripslashes($lmessage); $guestnames = stripslashes($guestnames);  }

	 $msg  = "First Name: $fname \r\n\n";
	 $msg .= "Last Name: $lname \r\n\n";
	 $msg .= "Email: $email \r\n\n";
	 $msg .= "Message: $lmessage \r\n\n";
	 $msg .= "Will Join?: $join \r\n\n";
	 $msg .= "No.of Guests: $noguests \r\n\n";
	 $msg .= "Name of Guests: $guestnames \r\n\n";	 
	 $msg .= "Songs: $song \r\n\n";
	 $msg .= "Allergy or Favos: $allergy \r\n\n";
	 $msg .= "Other: $other \r\n\n";
	 $msg .= "Bring Food: $bringfood \r\n\n";
	 $msg .= "-------------------------------------------------------------------------------------------\r\n";
								
	 if(@mail($to, $subject, $msg, "From: $email\r\nReturn-Path: $email\r\n"))
	 {
		 echo "<div class='success message'><span class='icon'></span>Thanks for Contacting Us, We will call back to you soon.</div>";
	 }
	 else
	 {
		 echo "<div class='error message'><span class='icon'></span>Sorry your message not sent, Try again Later.</div>";
	 }
?>