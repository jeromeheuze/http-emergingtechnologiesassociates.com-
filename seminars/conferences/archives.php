<?php include("../../includes/globals.php");
include ('../../bin/db/config.php');
include ('../../bin/db/opendb.php');
	$getConf = "SELECT * FROM conferences WHERE archived='1' ORDER BY year DESC, month_num DESC";
	$result_getConf = mysql_query($getConf);
	//$num_rows = mysql_num_rows($result_getConf);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emerging Technologies Associates, Inc - Conferences Archives</title>
<meta name="description" content="" />
<meta name="abstract" content="" />
<?php include("../../includes/head.php"); ?>
<script type="text/javascript">
$(document).ready(function(){

});
</script>
<?php include("../../includes/ga.php"); ?>
</head>

<body>
<div id="all">
	<header id="headersub">
    <div id="header-top"><a href="/" id="logo" title="Emerging Technologies Associates"><img src="/graphics/logo-ETA.png" alt="Emerging Technologies Associates logo" /></a></div>
    </header>
    
	<?php include("../../includes/nav.php"); ?>
    
    <div id="content-bk">
    <div id="content">
    <a name="content"></a>
    <h1 class="th1">Conferences Archives</h1>
	<div class="mcolumn">
		<div class="cols width_l670">
            <div id="shead"><div><h2 class="th1 red">Past Conferences</h2></div></div>
            <div class="calendarlist">
            <?php
			if ($result_getConf) {
				while(list($id,$title,$desc,$in,$out,$map,$month,$month_num,$year,$featured,$boxed,$archived)= mysql_fetch_row($result_getConf)) {
				echo '<div class="callitem">';
                echo '<h2 class="cal">'.$month.' '.$year.'</h2>';
				if ($out != '0'){$out = ' - '.$out;} else {$out = '';}
				echo '<h3>'.$title.' - '.$month.' '.$in.$out.', '.$year.'</h3>';
				echo $desc;
				if ($map != '0'){echo '<ul><li class="seminars map">'.$map.'</li></ul>';}
				echo '</div>';
				}
			}
			?>
            </div>
        </div>
        <div class="cols width_r256">
			<?php include("../includes/upcoming.php"); ?>
        	<?php //include("../includes/pastConferences.php"); ?>
        </div>
    </div>

    </div>
    </div>
    
<?php include("../../includes/global-footer.php"); ?>
</div>
</body>
</html>
<?php include ('../../bin/db/closedb.php'); ?>