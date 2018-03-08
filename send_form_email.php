<?php
 

 
   if(isset($_POST["submit"])){

 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "neeraj@eatechnologies.com";
 
    $email_subject = "Enquiry";
	$email_subject2 = "Acknowlegement";
 
     

     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $subject = $_POST['subject']; // required
 
    $message = $_POST['message']; // required
 
     
 

 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
 mail($email_to, $email_subject, $email_message, $headers);  
 mail($email_from, $email_subject2, $email_message, $headers); 
echo '<script language="javascript">';
echo 'alert("Your Message successfully sent, we will get back to you ASAP.");';
echo 'window.location.href="index.html";';
echo '</script>';

?>
 


 
 
 
<?php
 
}
 
?>