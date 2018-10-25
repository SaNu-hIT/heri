<?php

  
   
  
 
  $admin_email = "info@heritageayurveda.de";  
  $name=$_REQUEST['name'];
  // $place=$_REQUEST['place'];
  $number = $_REQUEST['phone'];

  
    $email = $_REQUEST['email'];
 
	  
    $treatmentcentres = $_REQUEST['treatmentcentres'];
	    $dateFrom = $_REQUEST['dateFrom'];
		    $dateTo = $_REQUEST['dateTo'];
  
  // $email = $_POST['email'];
  $email = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
  if(  $email == ""){
      $response=array();
      $response['success']=false;
      $response['Message']="
      <div id='failed' class='alert alert-danger'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>
          Email-Id is invalid!.<br />
      </div>  
      " ;
  echo  json_encode($response);
	    // print "
        // <div id='failed' class='alert alert-danger'>
        //     <button type='button' class='close' data-dismiss='alert'>&times;</button>
        //     Email-Id is invalid!.<br />
        // </div>  
        // " ;
		return;
  }
  $subject = "Enquiry for ".$treatmentcentres;
  $comment = $_REQUEST['message'];

 
$headers ="From: Enquiry for ".$treatmentcentres .' - '. strip_tags($email) ." <$email> \r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";




//$EmailMessageContent=   "Name: &nbsp " . $name."<br/>". "Email: &nbsp " . $email . "<br/> Treatment Center : ".$treatmentcentres. "<br/> Phone: &nbsp " .$number. "<br/>Treatment Period : ". $dateFrom ."-".$dateTo."<br/> Comment: &nbsp " . $comment;


 
$EmailMessageContent=   "Name: &nbsp " . $name."<br/>". "Email: &nbsp " . $email . "<br/> Treatment Center : ".$treatmentcentres. "<br/> Phone: &nbsp " .$number. "<br/>Treatment Period : ". $dateFrom ." to ".$dateTo."<br/> Comment: &nbsp " . $comment;


/*
$EmailMessageContent=  .;
$EmailMessageContent =$EmailMessageContent. "<br/>Treatment Period : ". $dateFrom ."-".$dateTo;

$EmailMessageContent =$EmailMessageContent. "<br/> Comment: &nbsp " . $comment;

*/
  
  if ($admin_email ){
  // $success  = mail($headers , $admin_email, "$subject", "Name:" . $name."\n".  "Place:" . $place."\n". "Email:" . $email . "\n". "Phone" .$number. "\n". "Comment:" . $comment, "From:" . $admin_email);
  $success = $ok = @mail('jinoshaji@intellyze.com, febindominic@intellyze.com', $subject,$EmailMessageContent, $headers);
  $success = $ok = @mail($admin_email, $subject,$EmailMessageContent, $headers);
  if ( $success )
  {
            $response=array();
            $response['success']=true;
            $response['Message']="
            <div class='alert alert-success' role='alert' data-out='bounceOut'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>  Thank you very much for your enquiry.</strong> Our customer relations manager will get in touch with you shortly  <br />
            </div>";  
        echo  json_encode($response);
 
   }
  
   else
  {

    $response=array();
    $response['success']=false;
    $response['Message']="
    <div id='failed' class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Sorry your message <strong>failed</strong> to send. check the connection!<br />
    </div>  
    " ;
echo  json_encode($response);
 
   
   }
  
   }

   else
  {

    $response=array();
    $response['success']=false;
    $response['Message']="
    <div id='failed' class='alert alert-danger'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Sorry your message <strong>failed</strong> to send.invalidmail !<br />
    </div>  
";
echo  json_encode($response);

     
   
   }
?>