<?php
    //we need to get our variables first
    
    include 'config.php';
    $name     		=   $_POST['name'];  
    $email_from  	=   $_POST['email'];
	$telephone		=	$_POST['telephone'];
	$website		=	$_POST['website'];
    $subject  		=   $_POST['subject'];
    $message 		=   $_POST['message'];
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
	 
	 
	 /*	My custom PHP to beautify the mail by adding it to an array */
	 
		  $email_message = "=== Form details below ===\n\n";
	 
	 
		  function clean_string($string) {
	 
		  $bad = array("content-type","bcc:","to:","cc:","href");
	 
		  return str_replace($bad,"",$string);
	 
		}
	 
     
	 
		$email_message .= "Name: ".clean_string($name)."\n\n";
	 
		$email_message .= "Email: ".clean_string($email_from)."\n\n";
		
		$email_message .= "Telephone: ".clean_string($telephone)."\n\n";
		
		$email_message .= "Website: ".clean_string($website)."\n\n";
	 
		$email_message .= "Subject: ".clean_string($subject)."\n\n";
	 
		$email_message .= "Message: ".clean_string($message)."\n\n";
	 
	 
	  /* END of My custom PHP to beautify the mail */
	 
	 
	 
	 
			 
		// create email headers
		 
			$headers = 'From: '.$email_from."\r\n".
			 
			'Reply-To: '.$email_from."\r\n" .
			 
			'X-Mailer: PHP/' . phpversion();
    
	
		// mail function
	
		if(mail($email_to, $subject, $email_message, $headers)){
			echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
		}else{
			echo 'failed';// ... or this one to tell it that it wasn't sent    
		}
?>