<script type="text/javascript">
$(document).ready(function(){
	$("#frm_maillist_send").click(function(){
		//validate empty
		var mlerror;
		var mlemail = $("#fld-email").val();
		if ((mlemail != '') && (validateEmail(mlemail))){ 
		$("#fld-email").css({"border": "1px solid #ccc"});
		var mlerror = false; } 
		else { 
		$("#fld-email").css({"border": "1px solid #ff0000"});
		var mlerror = true; }
		//end validate empty 
		if ((mlerror == false)) { 				
			var dataString = 'email=' + mlemail;
			$.ajax({
			type: "POST",
			url: "/bin/mailinglist/mailin.php",
			data: dataString,
			success: function() {
				$("#frm_maillist").hide();
				$("#frm_result").html("<h3 style='padding: 25px;text-align:center;'>Sign up Complete!</h3>");
			}
			});
			return false; event.preventDefault();
		} else { return false; event.preventDefault(); }
		
	});
});
</script>
<div id="mlist"><a href="#signup" class="inline at">Sign up for our Weekly Mailing List</a>
<div style="display:none">
    <div id="signup" class="windowp" style="width: 400px;height: 100px; padding:25px;">
        <h2>Sign up for Our weekly mailing list</h2>
        <div id="frm_result">
        <p>Enter your email:</p>
        <form id="frm_maillist">
        <input type="text" class="" id="fld-email" value="" size="30" />
        <input type="submit" id="frm_maillist_send" value="Send" />
        </form>
        </div>
    </div>
</div>
</div>