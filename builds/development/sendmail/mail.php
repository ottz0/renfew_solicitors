<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your site secret key
        $secret = '6LdtngMTAAAAAEbyxdvvX-1qGSHwDIu7IcV8wGCo';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
		
		$name = !empty($_POST['name'])?$_POST['name']:'';
		$email = !empty($_POST['email'])?$_POST['email']:'';
		$message = !empty($_POST['message'])?$_POST['message']:'';
        if($responseData->success):
			//contact form submission code
			$to = 'admin@renfrewsolicitors.com.au';
			$subject = 'A new contact has been submitted';
			$htmlContent = "
				<h1>Contact details</h1>
				<p><b>Name: </b>".$name."</p>
				<p><b>Email: </b>".$email."</p>
				<p><b>Message: </b>".$message."</p>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
			//send email
			@mail($to,$subject,$htmlContent,$headers);
			
            $succMsg = header("Location: verify.php");
			$name = '';
			$email = '';
			$message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click the reCAPTCHA box to validate the form.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
	$name = '';
	$email = '';
	$message = '';
endif;
?>