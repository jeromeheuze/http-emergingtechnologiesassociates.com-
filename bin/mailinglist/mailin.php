<?php
//join
include ('../db/config.php');
include ('../db/opendb.php');

//get values
$emailt = mysql_real_escape_string($_POST['email']);
if (filter_var($emailt, FILTER_VALIDATE_EMAIL)) {
    $email = $emailt;
} else { return false; }

//all good insert
$ijoin = "INSERT INTO mailinglist (email) VALUES ('$email')";
$result = mysql_query($ijoin);

include ('../db/closedb.php');

if ($result) { 

// multiple recipients (note the commas)
$to = "jeromeheuze@gmail.com, ";
//$to .= "$email";
//$to .= "somebody_else@example.com";

// subject
$subject = "Signup Confirmation";

// compose message
$message = "
<html>
  <head>
    <title>Signup Confirmation</title>
  </head>
  <body>
	<h2>You Signed Up for Emerging Technologies Associates Mailing list</h2>
	<p>Thank You</p>
  </body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: noreply@emergingtechnologiesassociates.com\r\n";
$headers .= "Reply-To: support@heuze-production.com\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// send email
mail($to, $subject, $message, $headers);

return true; } else { return false; }

?>