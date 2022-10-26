<?php  
 
 if(isset($_POST['submit'])) {
     
    $success='';
    $failed='';
    
   $mailto = "Sethrolling560@gmail.com";  //My email address
   //getting customer data
   $name = $_POST['name']; //getting customer name
   $fromEmail = $_POST['email']; //getting customer email
   $phone = $_POST['Phone']; //getting customer Phome number
   $subject = $_POST['Subject'];
   $subject2 = "Confirmation: Message was submitted successfully | airesrelocations"; // For customer confirmation
 
   //Email body I will receive
   $message = " Name: " . $name . "\n"
   . "Phone Number: " . $phone . "\n"
    . "Email: " . $fromEmail . "\n"
   . "subject: " . $subject . "\n"
   . "Message: " . "\n" . $_POST['Message'];
   
  $headmsg = "Request for Quote";
   
   
   //Message for client confirmation
   $message2 = "Dear" . "\n" . $name . "\n"
   . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
   . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
   . "Regards," . "\n" . "- Shinecarstudio";
 
   //Email headers
   $headers = "From: " . $fromEmail; // Client email, I will receive
   $headers2 = "From: " . $mailto; // This will receive client
   
   //PHP mailer function
 
    $result1 = mail($mailto,$headmsg, $message, $headers); // This email sent to My address
    $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
   
   //  header("Location: form-submit.php",);
    //Checking if Mails sent successfully
   
    if ($result1 && $result2) {
      $success = "Your Message was sent Successfully!";
      echo "thank you";
    } else {
      $failed = "Sorry! Message was not sent, Try again Later.";
      echo $failed;
    }
    
  }
    ?> 
    <!-- <script>window.open('https://airesremovals.com.au/thank-you/', '_self')</script> -->
    
     <?php  
 
 if(isset($_POST['request'])) {
     
    $success='';
    $failed='';
    
   $mailto = "info@airesremovals.com.au";  //My email address
   //getting customer data
   $name = $_POST['name']; //getting customer name
   $fromEmail = $_POST['email']; //getting customer email
   $phone = $_POST['tel']; //getting customer Phome number
   $subject2 = "Confirmation: Message was submitted successfully | airesrelocations"; // For customer confirmation
 
   //Email body I will receive
   $message = " Name: " . $name . "\n"
   . "Phone Number: " . $phone . "\n"
    . "Email: " . $fromEmail . "\n";
   
  $headmsg = "Request a call back";
  
   
   //Message for client confirmation
   $message2 = "Dear" . "\n" . $name . "\n"
   . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
   . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
   . "Regards," . "\n" . "- airesrelocations";
 
   //Email headers
   $headers = "From: " . $fromEmail; 
   $headers2 = "From: " . $mailto; // This will receive client
   
   //PHP mailer function
 
    $result1 = mail($mailto,$headmsg, $message, $headers); // This email sent to My address
    $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
   
   //  header("Location: form-submit.php",);
    //Checking if Mails sent successfully
   
    if ($result1 && $result2) {
      $success = "Your Message was sent Successfully!";
      echo "<script>window.open('https://airesremovals.com.au/thank-you/', '_self')</script>";
    } else {
      $failed = "Sorry! Message was not sent, Try again Later.";
      echo $failed;
    }
    
  }
    ?> 
 