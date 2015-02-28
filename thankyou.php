<?php
if ( (isset($_POST['fld_name'])) && (isset($_POST['fld_email'])) && (isset($_POST['fld_subject'])) ) {
$fld_name = strip_tags($_POST['fld_name']);
$emailt = strip_tags($_POST['fld_email']);
if (filter_var($emailt, FILTER_VALIDATE_EMAIL)) {
    $fld_email = $emailt;
} else { return false; }
$fld_subject = strip_tags($_POST['fld_subject']);
$fld_topic = strip_tags($_POST['fld_topic']);
$fld_phone = strip_tags($_POST['fld_phone']);
$fld_bttcall = strip_tags($_POST['fld_bttcall']);
$fld_msg = strip_tags($_POST['fld_msg']);

if ($fld_email != '') { 

// multiple recipients (note the commas)
$to = "jeromeheuze@gmail.com, lees.eta@gmail.com, daryldejean@gmail.com";
//$to .= "$email";
//$to .= "somebody_else@example.com";

// subject
$subject = "ETA - Contact Form - ".$fld_subject;

// compose message
$message = "
<html>
  <head>
    <title>ETA - Contact Form</title>
  </head>
  <body>
    <h1>ETA - Contact Form</h1>
	<p>Your Name: $fld_name</p>
	<p>Your Email: $fld_email</p>
	<p>Subject: $fld_subject</p>
	<p>Discussion Topics: $fld_topic</p>
	<p>Phone Number: $fld_phone</p>
	<p>Best Time to Call: $fld_bttcall</p>
	<p>Your Message: $fld_msg</p>
  </body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: noreply@ETA.com\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// send email
mail($to, $subject, $message, $headers);
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emerging Technologies Associates, Inc - Contact us - Thank you</title>
<meta name="description" content="" />
<meta name="abstract" content="" />
<?php include("includes/head.php"); ?>
<?php include("includes/ga.php"); ?>
</head>

<body>
<div id="all">
	<header id="headersub">
    <div id="header-top"><a href="/" id="logo" title="Emerging Technologies Associates"><img src="/graphics/logo-ETA.png" alt="Emerging Technologies Associates logo" /></a></div>
    </header>
    
	<?php include("includes/nav.php"); ?>
    
    <div id="content-bk">
    <div id="content">
    <a name="content"></a>
    <h1 class="th1">Thank you</h1>  
	<p>Thank you for your interest in Emerging Technologies Associates!</p>
    <p>We welcome your questions and comments. Our services are listed <a href="#servicesNav" class="services">here</a> or click on the "SERVICES" in the menu.</p>

    </div>
    </div>
    
<?php include("includes/global-footer.php"); ?>
</div>
</body>
</html>
