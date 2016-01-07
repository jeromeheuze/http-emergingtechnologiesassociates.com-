<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css' />
<link href='/css/theme.css' rel='stylesheet' media="screen" type='text/css' />
<link href='/css/theme-print.css' rel='stylesheet' media="print" type='text/css' />
<!-- fancybox2 -->
<link rel="stylesheet" type="text/css" href="/TIMEOFF/modules/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="/TIMEOFF/modules/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<!-- menu superfish -->
<link rel="stylesheet" type="text/css" href="/TIMEOFF/modules/superfishassets/superfish.css" media="screen">
<script type="text/javascript" src="/TIMEOFF/modules/hoverIntent.js"></script>
<script type="text/javascript" src="/TIMEOFF/modules/superfish.js"></script>
<script type="text/javascript" src="/TIMEOFF/modules/supersubs.js"></script>
<!-- content slider -->
<link rel="stylesheet" type="text/css" href="/TIMEOFF/modules/boxsliderassets/bx_styles.css" media="screen">
<script type="text/javascript" src="/TIMEOFF/modules/jquery.bxSlider.min.js"></script>
<!-- global use -->
<script type="text/javascript" src="/TIMEOFF/modules/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/TIMEOFF/modules/jquery.mousewheel-3.0.4.pack.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function(){
		automenu(window.location.pathname);
		$("ul.menu").supersubs({ 
            minWidth:    12,
            maxWidth:    27,
            extraWidth:  1
        }).superfish();
		//alert(navigator.userAgent);
		if (is_mobile()) {  }
		if (is_kindlefire()) { $(".menu").addClass("kindlefire"); }
		//fancybox ON
		$("a.popup").fancybox({'titlePosition':'inside'});
		$("a.inline").fancybox({'titleShow':'false'});
		$("a.services").fancybox({'titleShow':'false'});
		$("a.pbsvideo").fancybox({'titleShow':'false'});
});
function is_mobile() {
    var agents = ['android', 'webos', 'iphone', 'ipad', 'blackberry'];
    for(i in agents) {
        if(navigator.userAgent.match('/'+agents[i]+'/i')) {
            return true;
        }
    }
    return false;
}
function is_kindlefire() {
	if(navigator.userAgent.indexOf('Silk/') > -1 && navigator.userAgent.indexOf('Silk-Accelerated=') > -1) {
		return true;
	} else { return false; }
}
function automenu(location) {
	switch(location) {
		case "/":
			$('#home').addClass('current');
		break;
		case "/mission-statement.php":
			$('#home').addClass('current');
		break;
		case "/team/":
			$('#team').addClass('current');
		break;
		case "/news/":
			$('#news').addClass('current');
		break;
		case "/projects/":
			$('#projects').addClass('current');
		break;
		case "/projects/ENERGY_STAR_Energy_Management_and_Strategy.php":
			$('#projects').addClass('current');
		break;
		case "/projects/PROJECT_DEVELOPMENT.php":
			$('#projects').addClass('current');
		break;
		case "/seminars/":
			$('#seminars').addClass('current');
		break;
		case "/CALCTP.php":
			$('#calctp').addClass('current');
		break;
		case "/federal-agencies.php":
			$('#fed').addClass('current');
		break;
		case "/contactus.php":
			$('#contact').addClass('current');
		break;
	}
}
function validateEmail($emailtest) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if( !emailReg.test( $emailtest ) ) {
		return false;
	} else {
		return true;
	}
}
</script>