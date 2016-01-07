<?php include("includes/globals.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emerging Technologies Associates, Inc - Contact us</title>
<meta name="description" content="Contact us" />
<meta name="abstract" content="Contact us" />
<?php include("includes/head.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
	<?php if ($ENABLED_FORM == 1) { ?>
	$("#btn_submit").click(function(){
		//validate empty
		var nerror; var eerror; var serror;
		var fld_name = $("#fld_name").val();
		var fld_email = $("#fld_email").val();
		var fld_subject = $("#fld_subject").val();
		
		if ((fld_name != '')){ 
		$("#fld_name").css({"border": "1px solid #ccc"});
		var nerror = false; } 
		else { 
		$("#fld_name").css({"border": "1px solid #ff0000"});
		var nerror = true; }
		
		if ((fld_subject != '')){ 
		$("#fld_subject").css({"border": "1px solid #ccc"});
		var serror = false; } 
		else { 
		$("#fld_subject").css({"border": "1px solid #ff0000"});
		var serror = true; }
		
		if ((fld_email != '') && (validateEmail(fld_email))){ 
		$("#fld_email").css({"border": "1px solid #ccc"});
		var eerror = false; } 
		else { 
		$("#fld_email").css({"border": "1px solid #ff0000"});
		var eerror = true; }
 
		if ((nerror == false)&&(eerror == false)&&(serror == false)) { 				
			
			return true;
		} else { return false; event.preventDefault(); }
	});
	<?php } ?>
});
</script>
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
    <h1 class="th1">Contact us</h1>  
	<p>Thank you for your interest in Emerging Technologies Associates!</p>
    <?php if ($ENABLED_FORM == 1) { ?>
    <p>We welcome your questions and comments. Our services are listed <a href="#servicesNav" class="services">here</a> or click on the "SERVICES" in the menu.</p>
    <p>Please let us know if you have an area of particular interest that you would like us to address.</p>
    <p>For a proposal or inquiries, please fill in the fields below.</p>
        <div id="cont_form">
        <form method="post" action="thankyou.php" id="frm_contact">
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_name">Your Name</label></div> 
        <div class="cols"><input type="text" name="fld_name" id="fld_name" size="55" value=""/></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_email">Your Email</label></div> 
        <div class="cols"><input type="text" name="fld_email" id="fld_email" size="55" value=""/></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_subject">Subject</label></div> 
        <div class="cols"><select name="fld_subject" id="fld_subject">
        	<option value="Training">Training</option>
            <option value="Technology Assessment">Technology Assessment</option>
            <option value="Energy Management Consulting">Energy Management Consulting</option>
            <option value="Energy Projects Management">Energy Projects Management</option>
            <option value="Energy benchmarking/ENERGY STAR Certification">Energy benchmarking/ENERGY STAR Certification</option>
            <option value="Others">Others</option>
        </select></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_topic">Discussion Topics</label></div> 
        <div class="cols">
        <select name="fld_topic" id="fld_topic"><option value="Project Idea">Project Idea</option>
            <option value="Seminars Information">Seminars Information</option>
            <option value="Comments &amp; Suggestions">Comments &amp; Suggestions</option>
            <option value="Feedback">Feedback</option>
            <option value="Just Because">Just Because...</option>
            <option value="Others">Others</option>
        </select></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_phone">Phone Number</label></div> 
        <div class="cols"><input type="text" name="fld_phone" id="fld_phone" size="55" value=""/></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="fld_bttcall">Best Time to Call</label></div> 
        <div class="cols"><input type="text" name="fld_bttcall" id="fld_bttcall" size="55" value=""/></div>
        </div>
        <div class="mcolumn">
        <div class="cols width_lbl"><label for="msg">Your Message:</label></div> 
        <div class="cols"><textarea name="fld_msg" cols="40" rows="5"></textarea></div>
        </div>
        <p><input type="submit" name="submit" id="btn_submit" class="btn" value="Send" /></p>
        </form>
        </div>
        <?php } else { ?>
        <p>We have disabled the contact form for the moment. Sorry for the inconvenience.</p>
        <?php } ?>
    </div>
    </div>
    
<?php include("includes/global-footer.php"); ?>
</div>
</body>
</html>
