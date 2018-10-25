<?php

 // $admin_email = "care@whitegooseindia.com";
  $admin_email = "info@heritageayurveda.de";
  $email=$_REQUEST['txtemailId'];
   
  
  // $email = $_POST['email'];
  $email = isset( $_POST['txtemailId'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['txtemailId'] ) : "";
  if(  $email == ""){
	    print "
        
      Please Enter a Valid Email-Id!.
        " ;
		return;
  }
  $subject = "Subject: Request to Contact from website ";
  $comment = $_REQUEST['message'];

 
$headers ="From: Latest News Subscription Request from heritageayurveda.de - ". strip_tags($email) ." <$email> \r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";




//$EmailMessageContent=   "Name: &nbsp " . $name."<br/>". "Email: &nbsp " . $email . "<br/> Treatment Center : ".$treatmentcentres. "<br/> Phone: &nbsp " .$number. "<br/>Treatment Period : ". $dateFrom ."-".$dateTo."<br/> Comment: &nbsp " . $comment;


 
$EmailMessageContent=   "Latest News Subscription Request from whitegooseindia.com <br/> Email: &nbsp " . $email."<br/> Dear Admin,<br/>An enquiry request is placed from your website www.whitegooseindia.com. You may get in touch with <Email/Mobile number> for more details.<br/>Regards,<br/>CRM<br/>Intellyze ";

/*
$EmailMessageContent=  .;
$EmailMessageContent =$EmailMessageContent. "<br/>Treatment Period : ". $dateFrom ."-".$dateTo;

$EmailMessageContent =$EmailMessageContent. "<br/> Comment: &nbsp " . $comment;

*/
  
  if ($admin_email ){
  // $success  = mail($headers , $admin_email, "$subject", "Name:" . $name."\n".  "Place:" . $place."\n". "Email:" . $email . "\n". "Phone" .$number. "\n". "Comment:" . $comment, "From:" . $admin_email);
 $success = $ok = @mail($admin_email, $subject,$EmailMessageContent, $headers);
  if ( $success )
        {
  print "
  Thank you for your interest. We will send you the latest news updates!!!.
    ";  
         }
  
   else
  {
    
   print "
        
            Sorry your message <strong>failed</strong> to send. check the connection!
        " ;
   
   }
  
   }

   else
  {
    
   print "
       
            Sorry your message <strong>failed</strong> to send.Please check your email-id !
    ";
   
   }
?>