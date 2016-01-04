<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emerging Technologies Associates, Inc - NEWS</title>
<meta name="description" content="" />
<meta name="abstract" content="" />
<?php include("../includes/head.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
	//init
	$("#yearclicked").html("2014");
	$("#v2014").show();
	$("#v2013").show();
	$("#v2012").show();
	$("#v2011").show();
	$("#v2010").show();
	$("#v2009").show();

	$(".i2014").show();
	$(".i2013").hide();
	$(".i2012").hide();
	$(".i2011").hide();
	$(".i2010").hide();
	$(".i2009").hide();

	$(".t2014").show();
	$(".t2013").hide();
	$(".t2012").hide();
	$(".t2011").hide();
	$(".t2010").hide();
	$(".t2009").hide();
	//events
	$("#l2014").click(function() {
		$("#yearclicked").html("2014");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").show();
		$("#v2010").show();
		$("#v2009").show();

		$(".i2014").show();
		$(".i2013").hide();
		$(".i2012").hide();
		$(".i2011").hide();
		$(".i2010").hide();
		$(".i2009").hide();

		$(".t2014").show();
		$(".t2013").hide();
		$(".t2012").hide();
		$(".t2011").hide();
		$(".t2010").hide();
		$(".t2009").hide();
	});
	$("#l2013").click(function() {
		$("#yearclicked").html("2013");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").show();
		$("#v2010").show();
		$("#v2009").show();

		$(".i2014").hide();
		$(".i2013").show();
		$(".i2012").hide();
		$(".i2011").hide();
		$(".i2010").hide();
		$(".i2009").hide();

		$(".t2014").hide();
		$(".t2013").show();
		$(".t2012").hide();
		$(".t2011").hide();
		$(".t2010").hide();
		$(".t2009").hide();
	});
	$("#l2012").click(function() {
		$("#yearclicked").html("2012");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").hide();
		$("#v2011").show();
		$("#v2010").show();
		$("#v2009").show();

		$(".i2014").hide();
		$(".i2013").hide();
		$(".i2012").show();
		$(".i2011").hide();
		$(".i2010").hide();
		$(".i2009").hide();

		$(".t2014").hide();
		$(".t2013").hide();
		$(".t2012").show();
		$(".t2011").hide();
		$(".t2010").hide();
		$(".t2009").hide();
	});
	$("#l2011").click(function() {
		$("#yearclicked").html("2011");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").hide();
		$("#v2010").show();
		$("#v2009").show();
		$(".i2014").hide();
		$(".i2013").hide();
		$(".i2012").hide();
		$(".i2011").show();
		$(".i2010").hide();
		$(".i2009").hide();
		$(".t2014").hide();
		$(".t2013").hide();
		$(".t2012").hide();
		$(".t2011").show();
		$(".t2010").hide();
		$(".t2009").hide();
	});
	$("#l2010").click(function() {
		$("#yearclicked").html("2010");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").show();
		$("#v2010").hide();
		$("#v2009").show();
		$(".i2014").hide();
		$(".i2013").hide();
		$(".i2012").hide();
		$(".i2011").hide();
		$(".i2010").show();
		$(".i2009").hide();
		$(".t2014").hide();
		$(".t2013").hide();
		$(".t2012").hide();
		$(".t2011").hide();
		$(".t2010").show();
		$(".t2009").hide();
	});
	$("#l2009").click(function() {
		$("#yearclicked").html("2009");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").show();
		$("#v2010").show();
		$("#v2009").hide();
		$(".i2014").hide();
		$(".i2013").hide();
		$(".i2012").hide();
		$(".i2011").hide();
		$(".i2010").hide();
		$(".i2009").show();
		$(".t2014").hide();
		$(".t2013").hide();
		$(".t2012").hide();
		$(".t2011").hide();
		$(".t2010").hide();
		$(".t2009").show();
	});
	$("#lall").click(function() {
		$("#yearclicked").html("");
		$("#v2014").show();
		$("#v2013").show();
		$("#v2012").show();
		$("#v2011").show();
		$("#v2010").show();
		$("#v2009").show();
		$(".i2014").show();
		$(".i2013").show();
		$(".i2012").show();
		$(".i2011").show();
		$(".i2010").show();
		$(".i2009").show();
		$(".t2014").show();
		$(".t2013").show();
		$(".t2012").show();
		$(".t2011").show();
		$(".t2010").show();
		$(".t2009").show();
	});
	$(".nii").click(function() {
		var itemnewsid = $(this).attr("id");
		var itemnewsyrs = $(this).attr("rel");
		var vallON = $("#yearclicked").html();
		//alert(vallON);
		if (vallON == '') {
			for (j=2009;j<=2014;j++){
				if (j != itemnewsyrs){ $('.i'+j).hide(); $('.t'+j).hide(); }
			}
		} else {
			$('.i'+itemnewsyrs).hide();
		}
		$('.t'+itemnewsyrs).show();
		$('#i'+itemnewsid).show();
		$('#v'+itemnewsyrs).show();
		$("#yearclicked").html(itemnewsyrs);
	});
});
</script>
<?php include("../includes/ga.php"); ?>
</head>

<body>
<div id="all">
	<header id="headersub">
    <div id="header-top"><a href="/" id="logo" title="Emerging Technologies Associates"><img src="/graphics/logo-ETA.png" alt="Emerging Technologies Associates logo" /></a></div>
    </header>
    
	<?php include("../includes/nav.php"); ?>
    
    <div id="content-bk">
    <div id="content">
    <a name="content"></a>
    <h1 class="th1">NEWS</h1>
	<div class="mcolumn">

	<div class="cols width_100p">
    <div id="shead"><h2 class="th1 red">Most Recent <span id="yearclicked">2014</span> News</h2></div>
    <div class="subhead row">
    <div id="v2014"><a href="javascript:void(0);" id="l2014">View 2014</a></div> <div id="v2013"><a href="javascript:void(0);" id="l2013">View 2013</a></div> <div id="v2012"><a href="javascript:void(0);" id="l2012">View 2012</a></div> <div id="v2011"><a href="javascript:void(0);" id="l2011">View 2011</a></div> <div id="v2010"><a href="javascript:void(0);" id="l2010">View 2010</a></div> <div id="v2009"><a href="javascript:void(0);" id="l2009">View 2009</a></div> <div id="vall"><a href="javascript:void(0);" id="lall">View All</a></div>
    </div>
    <div class="newslist">
    	<!-- 2014 -->
        <div class="newsitem i2014" id="i100514">
        <h2 class="newscal">October 5, 2014</h2>
        <h3>What is going on in New Orleans?</h3>
        <a href="http://nolaba.org/prosperitynola/" target="_blank">http://nolaba.org/prosperitynola/</a>
		<p><a href="http://nolaba.org/prosperitynola/" target="_blank"><img src="/graphics/nola.jpg" alt="" style="width: 40%;"></a></p>
        </div> 
        <div class="newsitem i2014" id="i070114">
        <h2 class="newscal">July 1st, 2014</h2>
        <h3>California Energy Commission adopted the 2013 Building Energy Efficiency Standards commonly known as Title 24.</h3>
        <a href="http://www.energy.ca.gov/title24/2013standards/" target="_blank">http://www.energy.ca.gov/title24/2013standards/</a>
		<p>The major changes to the Standards are highlighted at, <a href="http://www.energy.ca.gov/title24/2013standards/Changes_for_the_2013_Update_to_Building_Energy_Efficiency_Standards.pdf" target="_blank">Changes for the 2013 Update to Building Energy Efficiency Standards</a></p>
        </div> 
    	<!-- 2013 -->
        <div class="newsitem i2013" id="i111313b">
        <h2 class="newscal">November 13, 2013</h2>
        <h3>Emerging Technologies Associates Inc. is certified as a "Service Disabled Veteran-Owned Small Business" (SDVBO) by the US Department of Veteran Affairs.</h3>
        <a href="https://www.vip.vetbiz.gov/Public/Search/ViewSearchResults.aspx?SCID=1547225" target="_blank"><img src="/graphics/news/i111313b_logo.jpg" alt="Service Disabled Veteran-Owned Small Business"></a>
        <p>Please click on the following link to find ETA's listing on the US Center for Veterans Enterprise (<a href="http://www.vetbiz.gov" target="_blank">www.vetbiz.gov</a>) website</p>
		<p><a href="https://www.vip.vetbiz.gov/Public/Search/ViewSearchResults.aspx?SCID=1547225" target="_blank">https://www.vip.vetbiz.gov/Public/Search/ViewSearchResults.aspx?SCID=1547225</a></p>
        </div>
        <div class="newsitem i2013" id="i111313a">
        <h2 class="newscal">November 13, 2013</h2>
        <h3>Emerging Technologies Associates, Inc has been certified as a Disabled Veteran Business Enterprise (DVBE) with the State of California.</h3>
        <p>ETA is now able to entitled to compete for the State’s spending of three percent annual contracting dollars with DVBE businesses. State agencies will be able to look up our certification on line at,
<a href="http://www.eprocure.dgs.ca.gov" target="_blank">http://www.eprocure.dgs.ca.gov</a></p>
		<p>by entering Supplier <a href="http://www.bidsync.com/DPXBisCASB?ac=supplierprofile&supplieroid=1825771" target="_blank">#1758355</a></p>
        <p>Emerging Technologies Associates, Inc.</p>
        <p>The Certification period is from November 13, 2013 to November 30, 2014.</p>
        </div>
        <div class="newsitem i2013" id="i110613">
        <h2 class="newscal">November 6, 2013 and December 6, 2013</h2>
        <h3>NEW Energy Efficiency Executive Seminars</h3>
        <p>Daryl DeJean has created a new Energy Efficiency Executive seminar for PG&amp;E and The City College of San Francisco under the California Statewide Workforce Education &amp; Training Initiative launched by the California Public Utilities Commission, the investor-owned utilities and higher education leaders under the Statewide Workforce Education and Training Program (2013-2014). Please refer to the following link for additional information,
<a href="http://www.cpuc.ca.gov/NR/rdonlyres/0CE9A9D9-1B71-41E7-BF1E-5356A8F29A75/0/201314WETFactSheet.pdf" target="_blank">http://www.cpuc.ca.gov/NR/rdonlyres/0CE9A9D9-1B71-41E7-BF1E-5356A8F29A75/0/201314WETFactSheet.pdf</a></p>
		<p>Please <a href="http://www.cpuc.ca.gov/NR/rdonlyres/0CE9A9D9-1B71-41E7-BF1E-5356A8F29A75/0/201314WETFactSheet.pdf" target="_blank">download</a> the attached flyer for a description of this brand new essential resource.</p>
        </div>
        
        <div class="newsitem i2013" id="i011413">
        <h2 class="newscal">January 14, 2013</h2>
        <h3>Daryl DeJean in partnership with San Diego State University has completed a new workshop for Faculty</h3>
        <p>Hurry and click on the following link to view the You Tube video just released by SDSU on the exciting new first of its kind Workshop, Here is the video link.</p>
		<iframe width="420" height="315" src="http://www.youtube.com/embed/hyB7meOpoWw?rel=0" frameborder="0" allowfullscreen></iframe> 
		<p>Here is the link to the SDSU web site announcement of the infusion course.</p>
		<p><a href="http://crs.sdsu.edu/dus/regionalsustainability/archives.aspx" target="_blank">http://crs.sdsu.edu/dus/regionalsustainability/archives.aspx</a></p>
		<p>The new "Infusion" Workshop will disseminate high level knowledge within any higher education institution by allowing professors to incorporate fundamental concepts of sustainability in their curricula.</p>
        <p>The synthesized knowledge that the faculty at SDSU will arm themselves with will frame their courses in the context of real world challenges that students care deeply about. We expect faculty leaders to embrace the infusion of their classes rapidly and attract more knowledge-hungry students to all classes on any university/college campus around the world.</p>
        <p>The creation of the Workshop was spearheaded Dean Geoffrey Chase, PhD, Division of Undergraduate Studies, San Diego State University. For more information on Dean Chase, background, publications and sustainability initiatives, please click on, <a href="http://dus.sdsu.edu/dus/chase.aspx" target="_blank">http://dus.sdsu.edu/dus/chase.aspx</a></p>
        </div>
        <div class="newsitem i2013" id="i010813">
        <h2 class="newscal">January 08, 2013</h2>
        <h3>Order Adopting Regulations AB 1103 Commercial Building Energy Use Disclosure Program  Effective January 8, 2013.</h3>
		<p>AB 1103 and AB 531requires nonresidential building owners throughout the state to benchmark and disclose their building's energy use in advance of the sale, leasing of the entire building, or financing of the entire building. It also requires utilities and other energy service providers to release energy use data in order to allow building owners to comply with benchmarking and disclosure requirements.</p>
<p>A building owner shall comply according to the following schedule:</p>
<p>(a) On and after July 1, 2013, for a building with total gross floor area measuring more than 50,000 square feet.<br />
(b) On and after January 1, 2014, for a building with a total gross floor area measuring more than 10,000 square feet and up to 50,000 square feet.<br />
(c) On and after July 1, 2014, for a building with a total gross floor area measuring at least 5,000 square feet and up to 10,000 square feet.</p>
<p>For more details, please click on the following link, <a href="http://www.energy.ca.gov/ab1103/index.html" target="_blank">http://www.energy.ca.gov/ab1103/index.html</a></p>
        </div>
    	<!-- 2012 -->
        <div class="newsitem i2012" id="i031212">
        <h2 class="newscal">December 03, 2012</h2>
        <h3>Benchmarking and Energy Savings DataTrend</h3>
        <p>We are very pleased to tell you about the new ENERGY STAR Portfolio Manager DataTrends series, which examines energy and water benchmarking trends for the thousands of buildings in Portfolio Manager. The diverse sample of buildings offers insights into the key drivers of energy use and the savings potential of benchmarking. You can find all of the DataTrends documents at <a href="http://www.energystar.gov/DataTrends" target="_blank">www.energystar.gov/DataTrends</a>.</p>
        <p><a href="http://www.energystar.gov/DataTrends" target="_blank">Read more at energystar.gov</a></p>
        </div>
        <div class="newsitem i2012" id="i021112">
        <h2 class="newscal">November 02, 2012</h2>
        <h3>CALCTP Business Development Seminar Sponsored by Pacific Gas &amp; Electric, San Francisco, CA</h3>
        <p>Daryl DeJean and Lee Stevens will be giving the first CALCTP Business Development seminar at Pacific Gas &amp; Electric's Pacific Energy Center, downtown San Francisco, CA</p>
        <p>ETA gave the ﬁrst seminar at the Paciﬁc Energy Center to close to 30 attendees.We had an outstanding CALCTP New Business Development Seminar Friday! The session was highly interactive with lighting designers, HVAC contractors, lighting contractors, experienced sales executives as well as professionals outside of the energy efﬁciency ﬁeld evaluating the control market before committing resources.</p>
		<p>Several attendees shared successful customer presentations with other attendees. Networking began within an hour of the start of the seminar and went on throughout the day. For ETA, this was a huge success as our goal is to foster networking among attendees and ensure success for the businesses who took time away from their business to attend the seminar.</p>
        <p><a href="/pdf/PG_E_11-2-12_CALCTP_Seminar_announcement.pdf" target="_blank" class="icons pdf">PG&amp;E Announcement</a></p>
        </div>
        <div class="newsitem i2012" id="i103012">
        <h2 class="newscal">October 30, 2012</h2>
        <h3>ENERGY STAR Benchmarking sponsored by San Diego Gas &amp; Electric Energy Innovation Center, San Diego, CA</h3>
        <p>Daryl DeJean and Lee Stevens will be giving a seminar on ENERGY STAR Energy performance benchmarking.</p>
        <p>We introduced energy performance benchmarking to the audience of 25 + attendees from IREM. We did a live demonstration of Portfolio Manager while sharing with attendees ways to engage building owners on the upcoming carbon disclosure legislation for commercial buildings, AB1103.</p>
        </div>
        <div class="newsitem i2012" id="i241012">
        <h2 class="newscal">October 24, 2012</h2>
        <h3>CALCTP Business Development Sponsored By Southern California Edison. Location: Energy Education Center, Irwindale, CA</h3>
        <p>Twenty two attendees joined us in a highly interactive session. Seasoned electrical contractors, trainers, energy consultants, manufacturer among other professions joined us to better understand and hone in on the marketing and selling skills.</p>
        <p>Examples of successfully completed sales were shared with all attendees. In addition, many attendees began networking right away to go after new business.</p>
            <div class="galleries">
            <p class="gallery"><a href="/graphics/seminars/sem-102412-01b.jpg" class="popup" title=""><img src="/graphics/seminars/sem-102412-01t.jpg" alt="" /></a></p>
            <p class="gallery"><a href="/graphics/seminars/sem-102412-02b.jpg" class="popup" title=""><img src="/graphics/seminars/sem-102412-02t.jpg" alt="" /></a></p>
            </div>
        <!--<p>Please join us on October 25 at the Energy Center for the latest business strategies to roll out a new advanced lighting control business.</p>
        <p>Call 800 336-2822 to sign up or click on the following link for more classes at the Center.</p>
        <p><a href="http://www.sce.com/b-sb/energy-centers/workshops-classes.htm" target="_blank">http://www.sce.com/b-sb/energy-centers/workshops-classes.htm</a></p>-->
        </div>
        <div class="newsitem i2012" id="i211012">
        <h2 class="newscal">October 21-24, 2012</h2>
        <h3>ASTM International E06.81 Building Economics Technical Committee Meeting in Atlanta, Georgia</h3>
        <p>Daryl DeJean will meet with other Committee members to review and vote on the next revisions of the Building Economics Standards and next textbook  sections of the E06.81 Standards that make up the E06.81 Building Economics Standards.</p>
        <p>ETA's objective is to share this vital set of standards with  the sustainability community nationally and contribute to any updates of the economic evaluation tools that are critical to properly assessing sustainability projects in buildings. The global representation of the Committee members makes for a dynamic exchange of information and practical viewpoints.  Lessons learned from bridge, highway and other construction projects are covered in the next publication of the Standards.</p>
        <p>If you wish to buy the entire set of Standards, click on the following link to purchase the entire book of Standards entitled ASTM Standards on Building Economics: 7th Edition Published 2012.</p>
        <p><a href="http://www.astm.org/BOOKSTORE/COMPS/BLDGECON12.htm" target="_blank"><img src="/graphics/news/be7.jpg" alt="" /><br />http://www.astm.org/BOOKSTORE/COMPS/BLDGECON12.htm</a></p>
        </div>
        <div class="newsitem i2012" id="i141012">
        <h2 class="newscal">October 14-17, 2012</h2>
        <h3>AASHE LA Conference Expo, Los Angeles Convention Center, LA</h3>
        <p><a href="/pdf/AASHE_2012_schedule_studentsummit_posters_aashe_2012_conference-program.pdf" target="_blank"><img src="/graphics/news/aashe2012.jpg" alt="AASHE 2012" /><br />For a program please click here</a></p>
        <p>The Association for the Advancement of Sustainability in Higher Education (AASHE) has invited Daryl DeJean to speak at this national annual conference. The theme this year is "Invest In The Future".</p>
        <p>Daryl will be part of the Monday October 15 Student Panel on Engaging Students. The Title of the presentation by Daryl DeJean and Mariah Hudson, Sustainability Coordinator, Center for Regional Sustainability, San Diego State University is: <em>Setting Ideas into Action: An Example of Student Leadership.</em></p>
        <p>If you are in the Higher Education field, come and join all Sustainability Stakeholders at this annual national conference. Register at, <a href="http://conf2012.aashe.org/program/conference-schedule" target="_blank">http://conf2012.aashe.org/program/conference-schedule</a></p>
        </div>
        <div class="newsitem i2012" id="i041012">
        <h2 class="newscal">October 04, 2012</h2>
        <h3>San Diego State University PowerSave Green Campus Networking Event</h3>
        <p>Daryl DeJean and Lee Stevens will participate in this student-led Green Campus event to support the Green Workforce initiative. For more information on attendance, please click on the following link, <a href="http://www.sdsupowersave.org/" target="_blank">http://www.sdsupowersave.org/</a></p>
        <p>You can view the video created by the SDSU Green Campus, a student-led organization sharing how student leadership can make sustainability happens quickly on an over 5 million square foot campus! The Green Campus was involved in the ENERGY STAR webinar that US EPA hosted on May 14. An ENERGY STAR course was created through the effort and leadership of Green Campus in 2011.</p>
        <iframe width="560" height="315" src="http://www.youtube.com/embed/kdmh5Dq5GHY?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="newsitem i2012" id="i011012">
        <h2 class="newscal">October 01, 2012</h2>
        <h3>Human Footprint Interactive</h3>
        <p>Did you know that you can find out what your human footprint is with the food that you consume? Thanks to National Geographic magazine and Channel, you can go to the following link to the National Geographic website and determine your "human footprint"</p>
        <p><a href="http://education.nationalgeographic.com/education/multimedia/human-footprint-interactive/kd/?ar_a=3&utm_source=NatGeocom&utm_medium=Email&utm_content=education_20120928&utm_campaign=Content" target="_blank">Read Article: Human Footprint Interactive</a></p>
        <p><img src="/graphics/news/Human_Footprint_Interactive.jpg" alt="Human Footprint Interactive" /></p>
        </div>
        
        <div class="newsitem i2012" id="i070812">
        <h2 class="newscal">August 07, 2012</h2>
        <h3>San Diego restaurant Hodad's sees the light - Restaurant Hospitality</h3>
		<p>LED lighting fixtures can slash electricity costs by up to half.</p>
        <p><a href="http://restaurant-hospitality.com/operations/san-diego-restaurant-hodads-sees-light" target="_blank">Read Article: San Diego restaurant Hodad's sees the light - Restaurant Hospitality</a></p>
        </div>
        
        <div class="newsitem i2012" id="i250612">
        <h2 class="newscal">June 25, 2012</h2>
        <h3>LED lighting project by owner Mike Hardin of Hodad's Restaurant</h3>
        <p>Another ETA assessment hits the news: a rave review of the LED lighting project by owner Mike Hardin of Hodad's Restaurant are in the interview. His candid comments are food for thought for manufacturers, utility, and other lighting experts. (No pun intended!)</p>
        <p><a href="http://www.qsrmagazine.com/news/leds-shed-light-big-savings-san-diego-s-hodad-s" target="_blank">Read Article: LEDs Shed Light on Big Savings at San Diego's Hodad's</a></p>
        </div>
        <div class="newsitem i2012" id="i170612">
        <h2 class="newscal">June 17, 2012</h2>
        <h3>VA San Diego Full Profile is Approved on the ENERGY STAR website!</h3>
        <p><a href="http://www.energystar.gov/index.cfm?fuseaction=labeled_buildings.showProfile&ZIP=&S_CODE=ALL&CITY=san%20diego&BUILDING_TYPE_ID=7001&STR=&MINI=&VIEW=&YEAR=&PROFILES=0&STARTNUM=1&FILTER_B_ID=&OWNER_ID=&PAGE=1&profile_id=1019492" target="_blank">Read more from ENERGY STAR website</a></p>
        </div>
        <div class="newsitem i2012" id="i140612">
        <h2 class="newscal">June 14, 2012</h2>
        <h3>CALCTP in the Electrical News!</h3>
		<p>With over nine billion square feet of commercial building space in California, the State has approved the following goals in its September 2008 Long-Term Energy Efficiency Strategic Plan:</p>
        <p>1. New construction will increasingly embrace zero net energy performance (including clean, distributed generation), reaching 100 percent penetration of new starts in 2030.</p>

        <p>2. 50 percent of existing buildings will be equivalent to zero net energy buildings by 2030 through achievement of deep levels of energy efficiency and clean distributed generation:250 million square feet (1/20th of existing space) per year through 2030 reach deep levels of energy efficiency improvements and clean, distributed generation through whole building approaches.</p>
        
        <p>3. The commercial lighting industry will undergo substantial transformation through the deployment of high-efficiency and high-performing lighting technologies, spurred by State and national codes and standards and leading-edge incentive strategies.</p>
        
        <p>As sustainability plans are further integrated into corporations and organizations’ business plans, more long lasting and cost effective energy efficiency solutions are being sought the commercial building markets.</p>
        
        <p>The lighting transformation has begun and CALCTP has been preparing electrical contractors for this brand new world for the last four years!</p>
        
        <p>What is the California Advanced Lighting Control Program (CALCTP)? Created by a coalition of industry and government stakeholders in 2008, the award- winning California Advanced Lighting Controls Training Program (CALCTP) is training over 2,200 state-certified general electricians and C-10 electrical contractors on the proper installation and commissioning of lighting controls.</p>
        
        <p>At the IES Product Fair on February 23, 2012, many lighting specifiers, lighting manufacturers and other members of the lighting community presented some terrific ideas and comments on the need for training. Southern California Edison‘s Energy Education Center offers many lighting control courses every quarter including the CALCTP course. For contractors, please sign up on SCE’s Contractor’s Directory for news flashes on lighting rebates and incentives prior to the general public.</p>
        
        <p>Have your customers asked about advanced lighting controls lately? Have you looked at Title 24 2013 proceedings lately? Don’t miss the boat!</p>
        
        <p>Set yourself apart from your competition; ensure successful lighting projects for your clients!</p>
        
        <p>Come and join the stakeholders who have identified advanced lighting control systems as the next technological innovation to deliver the deep energy saving needs of the commercial building market.</p>
        
        <p>Upcoming events: CALCTP Booth – IES San Francisco Light Affair June 21, 2012 Pacific Energy Center</p>
        <p>Check out CALCTP at the website www.calctp.org or contact Mark Ouellette at (818) 325-3125.</p>
        <p>CALCTP once again makes the headline: ETA submitted the article as part of building awareness of the training program.</p>
        <p><a href="http://www.electricalnews.com/pacific-southwest/calctp-enters-marketplace-ies-los-angeles-product-fair/" target="_blank">Read more from Electrical News</a></p>
        </div>
        
        <div class="newsitem i2012" id="i140512">
        <h2 class="newscal">May 14, 2012</h2>
        <h3>EPA's ENERGY STAR college course</h3>
        <p>Please join us on Monday, May 14 at 3:00PM EST to learn about EPA's ENERGY STAR college course. This 90-minute session will highlight how colleges and universities, as well as high schools, can use EPA's ENERGY STAR college-level curriculum, An Introduction to Commercial Building Energy Efficiency through EPA's ENERGY STAR Program, to teach their students about energy efficiency in commercial buildings. The session will feature Daryl DeJean, instructor at San Diego State University, CA, who will discuss his experiences teaching a course this semester based on the curriculum.</p>
        <p>Highlights will include:</p>
        <ul class="ullist">
        <li>Student experiences in and outside the classroom;</li>
        <li>Examples of how the course complements other university offerings; and</li>
        <li>Results of campus energy benchmarking efforts using Portfolio Manager, EPA's ENERGY STAR measurement and tracking tool.</li>
        </ul>
        <p>The session will also discuss other helpful ENERGY STAR tools and resources for higher education. After the presentation, attendees will have an opportunity to ask questions of EPA and our speaker.</p>
        <p>Register now for this presentation by completing the following steps:</p>
        <ul class="ullist">
        <li>Visit <a target="_blank" href="https://energystar.webex.com">https://energystar.webex.com</a>.</li>
        <li>Click on Higher Education Spring Networking Webcast in the "Topic" column.</li>
        <li>Click on Register and complete the registration form.</li>
        <li>Save the confirmation email (sent by messenger@webex.com) with the information needed to participate in the presentation, which will be sent to the e-mail address you have specified. (Please check your spam email filter if the message does not appear in your inbox.)</li>
        <li>Click on the link provided in the confirmation email to join us at least 10 minutes prior to the start of the presentation.</li>
        </ul>
        <p>If you have any questions about this presentation or the registration process, please contact Nils Klinkenberg at nils.klinkenberg@cadmusgroup.com.</p>
        </div>
        <div class="newsitem i2012" id="i010512">
        <h2 class="newscal">May 01, 2012</h2>
        <h3>J. L. Pettis Memorial VA Medical Center earned the ENERGY STAR 2012</h3>
		<p>The J. L. Pettis Memorial VA Medical Center,Loma Linda, CA  earned the ENERGY STAR label year 2012. Lee Stevens worked with the Facility team to verify the energy performance already begun by the Energy Management team. Additional energ efficiency measures were identified following the ENERGY STAR methodology and Building Upgrade Manual.</p>
        </div>
        
        <div class="newsitem i2012" id="i060412">
        <h2 class="newscal">April 06, 2012</h2>
        <h3>San Diego burger joint saves electricity with LED lighting</h3>
		<p>Even though Hodad's second location is twice the size of its original restaurant, it uses the same amount of electricity.</p>
        <p><a href="http://www.zdnet.com/blog/green/san-diego-burger-joint-saves-electricity-with-led-lighting/20880" target="_blank">Read Article: San Diego burger joint saves electricity with LED lighting</a></p>
        </div>
        
        <div class="newsitem i2012" id="i200312">
        <h2 class="newscal">March 20, 2012</h2>
        <h3>Lighting Controls Technology Certification</h3>
		<p>Lighting Controls Technology Certification Straw Man Presentation and Brainstorming Sponsored by Southern California Edison - March 20, 2012</p>
        <p>Lee Stevens represented ETA at this conference due to ETA's involvement in the marketing outreach of the program.</p>
        <p>Background:<br />
The need for increased energy efficiency, demand response and rapid adoption of new technologies in lighting has focused new attention on the importance of advanced training and certification in lighting and controls, installation, and commissioning. Based on existing certifications, licenses, and other recognitions throughout the lighting applications industry, this program will explore a new generation of lighting related certification that will dramatically improve lighting project outcomes as fast as possible, with significant impact well before 2017.</p>
		<p>Over 50 attendees participated in the process of program concept, development and implementation. The potential for a new Certification for Lighting & Controls technology, a new Lighting Installation Certification,  and a new Lighting Commissioning Certification  is being developed with the input of the International Association of Lighting Designers, the Illuminating Engineering Society, the International Brotherhood of Electrical Workers, and the National Electrical Contractors Association. Historical background and  a straw man proposal will be presented by Southern California Edison, Lighting Design Alliance, and Benya Lighting Design with background data and support provided by the California Lighting Technology Center, UC Davis.</p>
        </div>
        
        <div class="newsitem i2012" id="i120312">
        <h2 class="newscal">March 12, 2012</h2>
        <h3>Upcoming Events March 2012</h3>
		<p>The seminar LED Basics had 150 attendees at the SDG&E Energy Innovation Center on January 31, 2012.</p>
        <p>The seminar Lighting Controls had 114 attendees at the SDG&E Energy Innovation Center on February 15, 2012</p>
            <div class="galleries">
            <p class="gallery"><a href="/graphics/seminars/sem-021512-01b.jpg" class="popup" title=""><img src="/graphics/seminars/sem-021512-01t.jpg" alt="" /></a></p>
            <p class="gallery"><a href="/graphics/seminars/sem-021512-02b.jpg" class="popup" title=""><img src="/graphics/seminars/sem-021512-02t.jpg" alt="" /></a></p>
            <p class="gallery"><a href="/graphics/seminars/sem-021512-03b.jpg" class="popup" title=""><img src="/graphics/seminars/sem-021512-03t.jpg" alt="" /></a></p>
            </div>
        <p>Presented to NECA National Business Development and Chapter Managers in Las Vegas on February 28 on the business paradigm shift (something like this)</p>
        <h4>Upcoming seminars:</h4>
        <p>On March 13 Cost Effectiveness of Energy Efficiency Projects sponsored by the CCSE from 08:30 - 10:00</p>
        <p>On March 20 Advanced Lighting Technologies In Action sponsored by SMUD from 08:00 - 11:30</p>
        <p><a href="http://www.greenjobsconference.org/los-angeles" target="_blank"><img src="/graphics/news/greenjobs-logo.jpg" alt="" /></a></p>
        <p>Panelist with the UC Berkeley Labor Center for the <a href="http://www.greenjobsconference.org/los-angeles" target="_blank">Good Jobs Green Jobs West Conference</a> (March 15-16, Westin Bonaventure Hotel & Suites in LA)</p>
        </div>
        
        <div class="newsitem i2012" id="i010312">
        <h2 class="newscal">March 01, 2012</h2>
        <h3>LEDs Magazine - LED lighting highlights the food at San Diego burger restaurant (MAGAZINE)</h3>
		<p>Announcing a major breakthrough in energy efficiency: LED T8 linears that work in a restaurant! Go to Hodad's in San Diego for your next scrumptious mouth-watering burger and see the light! Click on this link and hear what Mike says about what this change did for his customers!</p>
        <p><a href="http://ledsmagazine.com/features/9/3/6#.UKZ-e-G13Og.email" target="_blank">LEDs Magazine - LED lighting highlights the food at San Diego burger restaurant (MAGAZINE)</a></p>
        </div>
        
        <div class="newsitem i2012" id="i240212">
        <h2 class="newscal">February 24, 2012</h2>
        <h3>Energy Efficiency Financing Proposal made to the CPUC</h3>
		<p>On February 24, 2012, ETA filed a comment to the Energy Efficiency Financing Proposal made to the CPUC.</p>
        <p><a href="http://docs.cpuc.ca.gov/proceedings/R0911014.htm" target="_blank">http://docs.cpuc.ca.gov/proceedings/R0911014.htm</a></p>
		<p><a href="http://docs.cpuc.ca.gov/efile/MOTION/160276.pdf" target="_blank">160276.pdf - Motion filed by Emerging Technologies Associates Inc. on 02/24/2012</a></p>
		<p><a href="http://docs.cpuc.ca.gov/efile/MOTION/160277.pdf" target="_blank">160277.pdf - Motion filed by Emerging Technologies Associates Inc. on 02/24/2012</a></p>
        <p><a href="http://docs.cpuc.ca.gov/efile/CM/160396.pdf" target="_blank">http://docs.cpuc.ca.gov/efile/CM/160396.pdf</a></p>
        </div>
        
        <div class="newsitem i2012" id="i110112">
        <h2 class="newscal">January 11, 2012</h2>
        <h3>Benchmarking Results for 2011</h3>
		<p>As of 12/31/2011, ETA's accomplishments within the ENERGY STAR program are as follows:</p>
        <ol class="ollist">
        <li>ETA has completed ten ENERGY STAR benchmarking or energy management and strategies seminars sponsored by IFMA, San Diego Gas & Electric, the California Center for Sustainable Energy and the Port of San Diego. ETA has assisted many seminar attendees in benchmarking the following during 2011:
        <ol class="ollist">
        <li>Total number of square feet : 6.3 million representing 115 buildings</li>
        <li>The attendees planned to benchmark an additional 3.5 million square feet within six months .   All statistics are available for viewing for verification.</li>
        </ol>
        </li>
        <li>ETA's clients received three new ENERGY STAR's in 2011.</li>
        <li>One client was able to implement an energy management plan and strategies for all of its California buildings in readiness for an initial public offering.</li>
        <li>We completed a benchmarking project for a major retailer and completed a Staged Approach assessment.</li>
        <li>Finally, through the Sustainable Energy Sales Seminars, three new buildings were benchmarked by graduates of a five-day seminar entitled Sustainable Energy Sales sponsored by the IBEW , NECA and TomKat Foundation.</li>
        <li>BRAND NEW UNIVERSITY COURSE based on the newly released ENERGY STAR University Course: <a href="http://www.energystar.gov/index.cfm?c=higher_ed.bus_highereducation" target="_blank">ENERGY STAR for Higher Education</a> and <a href="http://www.energystar.gov/index.cfm?c=higher_ed.bus_highered_comm_bldgs_course" target="_blank">Give Your Students an Edge: Add ENERGY STAR to Your Course Catalog</a></li>
        <li>DARYL IS SHARING KNOWLEDGE WITH STUDENTS AT UNIVERSITY OF CALIFORNIA BERKELEY EXTENSION PROGRAM: in November, 2011, Daryl, as a guest instructor, taught a class at UC Berkeley Extension Program  entitled, "Energy Use and Climate Change". He has built awareness of the financial benefits of starting with ENERGY STAR Energy Management Guide as a cost- effective enterprise-wide initiative for institutions, corporations and government agencies employees who participated in his class.</li>
        </ol>
        </div>
        
        <div class="newsitem i2012" id="i100112">
        <h2 class="newscal">January 10, 2012</h2>
        <h3>The Results Are In: 2011 Game Day Challenge Winners</h3>
		<p>WASHINGTON – The U.S. Environmental Protection Agency (EPA) is announcing the winners of the 2011 Game Day Challenge, a competition among U.S. colleges and universities with the goal of lowering waste generated at college football games and increasing participation in and awareness of waste reduction programs. As part of the challenge, more than 75 schools across the nation designed a waste reduction plan for one 2011 regular season home football game, measured their results and submitted them to EPA.</p>
        <p>“Reducing, reusing, and recycling moves our nation towards an environmentally and economically greener, sustainable tomorrow," says Mathy Stanislaus, assistant administrator for EPA’s Office of Solid Waste and Emergency Response. “These schools and fans have taken the lead through the Game Day Challenge, and now they are ready and equipped with tools and resources to continue to reduce waste across all campus activities and beyond.”</p>
        <p>The winners of the 2011 Game Day Challenge are:</p>
        <ul class="ullist">
        <li>Waste Minimization Champion (Least amount of waste generated per attendee) - Central Connecticut State University</li>
        <li>Diversion Rate Champion (Highest combined recycling and composting rate) - University of California, Davis</li>
        <li>Greenhouse Gas Reduction Champion (Greatest greenhouse gas reductions from diverting waste) - University of Virginia</li>
        <li>Recycling Champion (Highest recycling rate) - University of Virginia</li>
        <li>Organics Reduction Champion (Highest organics reduction rate) - Marist College</li>
        </ul>
        <p>This past fall, 78 participating colleges and universities including 2.7 million fans diverted more than 500,000 pounds of waste from football games, prevented nearly 810 metric tons of carbon dioxide emissions equivalent to the annual emissions from 159 passenger vehicles.</p>
        <p>The participating colleges and universities including the fans took one step further to green the gridiron and help build awareness around the importance of recycling, reducing, and reusing. In 2010, Americans kept 85 million tons of waste out of landfills by recycling and composting, boosting the U.S. recycling rate to 34 percent. Out of the 165 million tons of waste that went into landfills, food scraps made up 20 percent. Food is the single largest waste stream that ends up in landfills. To address food waste, EPA’s Food Recovery Challenge under the Sustainable Materials Management program encourages schools to donate surplus and wholesome fresh food from sporting venues and cafeterias, instead of throwing it away.</p>
        <p>There are many other opportunities to reduce waste and save energy while reducing greenhouse gas emissions and protecting the environment. The competition was sponsored by EPA’s WasteWise program, a voluntary program through which organizations eliminate costly municipal solid waste and select industrial wastes, benefiting their bottom line and the environment.</p>
        <p>More information on participant results: <a href="http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/results.htm" target="_blank">http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/results.htm</a></p>
        <p>More information on how the results are determined: <a href="http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/measure.htm" target="_blank">http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/measure.htm</a></p>
        <p>For a list of participating schools: <a href="http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/schools.htm" target="_blank">http://www.epa.gov/epawaste/partnerships/wastewise/challenge/gameday/schools.htm</a></p>
        <p>More information on the Food Recovery Challenge: <a href="http://www.epa.gov/epawaste/partnerships/wastewise/challenge/foodrecovery/index.htm" target="_blank">http://www.epa.gov/epawaste/partnerships/wastewise/challenge/foodrecovery/index.htm</a></p>
        </div>
        
        <div class="newsitem i2012" id="i090112">
        <h2 class="newscal">January 09, 2012</h2>
        <h3>New Year, New Attitude</h3>
		<p>By: Brittney Gordon</p>
		<p>We are now one week into 2012. Are you working on a New Year’s Resolution yet? Every year I join countless Americans in making a resolution. Usually my goals revolve around two main topics: losing weight and saving money. I have had some success—and an equal amount of failure. Luckily I am not alone. According to studies by psychologist Richard Wiseman, 52 percent of resolution makers were confident that they would achieve their goals, yet only 12 percent actually succeeded. According to Wiseman, the difference is in how they went about accomplishing their goals. Those who set defined goals and told their friends and family about it were the most likely to succeed. In addition, Wiseman found that revisiting previous goals was often a recipe for disappointment. Lastly, he concluded that those who make only one resolution fared much better than those with a long list of lofty ideas.</p>
		<p>Did you know that ENERGY STAR can help improve your chances of achieving your New Year’s Resolution? The <a href="https://www.energystar.gov/index.cfm?fuseaction=globalwarming.showPledgeHome" target="_blank">ENERGY STAR website</a> not only gives lots of money-saving resolution ideas, but allows you to make a public pledge to that goal. From pledging to turn off the lights when you leave the room to always looking for the ENERGY STAR when you shop, ENERGY STAR’s easy, everyday resolutions can help you save money on your utility bills and help protect the environment.</p>
        <p>And the best part: You can use those savings earned through your new energy-efficient ways to join a gym!</p>
        <p>About the author: Brittney Gordon is a member of EPA’s ENERGY STAR program communications team. The Baltimore native has worked for EPA since 2010.</p>
        <p>Editor’s Note: The opinions expressed in Greenversations are those of the author. They do not reflect EPA policy, endorsement, or action, and EPA does not verify the accuracy or science of the contents of the blog.</p>
        <p>Source: <a href="http://blog.epa.gov/blog/2012/01/09/new-year-new-attitude/" target="_blank">http://blog.epa.gov/blog/2012/01/09/new-year-new-attitude/</a></p>
        </div>
        
        <!-- 2011 -->
        <div class="newsitem i2011" id="i291211">
        <h2 class="newscal">December 29, 2011</h2>
        <h3>BRAND NEW University Course!</h3>
        <p>Come join Daryl on January 23 at San Diego Sate University where he will be teaching a brand new course entitled Greening the Built Environment Through Energy Management: Creating Effective Strategy and Implementation. Students will receive three full credits within the Open University under the Service Learning.</p>
        <p>Please contact SDSU to register. The course number is GENS 400.</p>
        <p>Daryl is also reaching out to executives at UC Berkeley Extension Program where he taught a class entitled Energy Use and Climate Change.</p>
        </div>
        
        <div class="newsitem i2011" id="i221111">
        <h2 class="newscal">November 22, 2011</h2>
        <h3>UC Berkeley Extension Sustainability Courses</h3>
        <p>Daryl has started teaching at UC Berkeley Extension Program at UC Berkeley main campus as of the week of November 7, 2011. If you are  near Berkeley, please check out the Extension Certificate and Professional Programs. You can view the description of the UC Berkeley full offering at the following link:</p>
        <p><a href="http://extension.berkeley.edu/cert/" target="_blank">UC Berkeley Extension Certificate and Professional Programs Webpage</a></p>
        <p>Daryl DeJean's course is named " Energy Use and Climate Change"</p>
        <p>For more information, please refer to the following link:  <a href="http://extension.berkeley.edu/catalog/course1965.html" target="_blank">Energy Use and Climate Change Course at UC Berkeley Extension</a></p>
        
        <h3>Roadmap to Zero Net Energy (ZNE) Conference Sponsored by NECA, IBEW, USGBC, IFMA, BOMA International and AIA October 19, 2011</h3>
        <p>Daryl DeJean was one of three guests speakers invited by Labor Management Cooperation Council, NECA- IBEW, to present the folowing crucial topics for all stakeholders interested in the Zero Net Energy Roadmap of the State of California and the strategies that are critical in developing cost- effective energy management strategies to attain energy neutrality.</p>
        <ul class="ullist">
        <li>Integration of building technologies for efficiency gains.</li>
        <li>Assessing and validating technology transfer for the customer.</li>
        <li>Benchmarking</li>
        </ul>
        <p>Having assessed many emerging technologies under the mircroscope and in situ, Daryl DeJean shed insight into the decision making process that has to occur before jumping into any projects. He emphasized the need for proper assessment through cost effectiveness evaluation, measurement and verification, idientification of the end-users needs and applying the all too imprtant State of California Strategi Loading Order.</p>
        <p><a href="http://www.engage360.com/index.php?option=com_k2&view=itemfacet&layout=generic&tag=know%2Czero+net+energy&task=tag&Itemid=191&lang=en" target="_blank">October 19, 2011 Zero Net Energy Conference</a></p>
        <p>Members of LA Chapters of IFMA, BOMA, USGBC, NECA, IBEW and AIA attended. A lively discussion occurred between speakers who appeared after the presentation on a discussion panel.</p>
        
        <h3>San Diego Veteran Affairs Medical Center Receives the ENERGY STAR in 2011</h3>
        <p>The San Diego VA Medical Center receives the ENERGY STAR in 2011( the second year in a row) with the assistance of Lee Stevens. With the changes in benchmarking hospitals occurring in November 2011, the Medical Center worked very closely with ETA to ensure the integrity of all records pre-modification of the Portfolio Manager tool. The entire Engineering , Energy and Electrical  teams at the San Diego VA Medical Center contributed to this major accomplishment.</p>
        <p><a href="/pdf/Hospitals_in_California_that_received_the_ENERGY_STAR_in_2011.pdf" target="_blank">Hospitals in California that received the ENERGY STAR in 2011</a></p>
        <p>The Medical Center's investment in a highly effective Combined Heat & Power System that not only delivers higher efficiency for the Central Plant but can be controlled to reduce demand the grid during peak hours of the day. The facility is completing an assessment of Advanced Lighting Control Technologies under a project managed by ETA. The results of the study will be published on the Emerging Technologies Coordinating Council website in 2012. ( please refer to www.etcc-ca.com) for publication of this report. The assessment is innovative and will include a staged approach to the assessment of individual control devices within any advanced lighting control system.</p>
        <p>Heretofore, most advanced lighting control system projects measured all control devices at the same time; it was difficult to assess the effectiveness of  a system device by device vs the whole system. Segregating the performance of devices within a lighting control system allows you to quantify the energy savings and also select which devices are needed during the design phase of the system. Lessons were learned by all stakeholders during this two year assessment project.</p>
        <p>The VA San Diego Medical Center gave tremendous feedback throughout the process:occupants, electrical , engineering , interior design and IT were among a few of the teams that gave input to the Energy Management project manager and task force for the VA facility.</p>
        </div>
        
        <div class="newsitem i2011" id="i300811">
        <h2 class="newscal">August 30, 2011</h2>
        <h3>East Lyme LED Outdoor Lighting Hits the News!</h3>
        <p>The East Lyme LED outdoor lighting project is featured on August 30, 2011  in a Business Wire article that Yahoo Finance, Teletrader, allbusiness.com and LED Magazine have  published.</p>
        <p>For more details on how ETA worked with its client, the Town of East Lyme, CT, please refer to:</p>
        <p style="display:none;"><a href="http://www.astm.org/BOOKSTORE/COMPS/BLDGECON07.htm" target="_blank">East Lyme, CT Looks at Downtown in New Light from Hubbell Lighting Conservation, better light, aesthetics, drive decision</a></p>
        <p style="display:none;"><a href="http://www.astm.org/BOOKSTORE/COMPS/BLDGECON07.htm" target="_blank">Teletrader.com East Lyme Story</a></p>
        <p>See the BUZZ created by The Town of East Lyme in LED Magazine:</p>
        <p><a href="http://www.ledsmagazine.com/products/32380" target="_blank">LED Magazine Article on East Lyme Lighting Project Sept 2, 2011</a></p>
        </div>
        
        <div class="newsitem i2011" id="i220811">
        <h2 class="newscal">August 22, 2011</h2>
        <h3>E06 Meeting Tampa, FL October 30-November 2</h3>
        <p>ETA has been invited to join the E06.81 Subcommittee on Buildings Economics. As voting members, Daryl and Lee are continuing to work as volunteers on global standards relating to buildings.</p>
        <p>From October 30 through November 2, 2011, the sE06.81Sub-committee met in Tampa, FL. ETA and Kingport attended three days of  meetings and voted on a several parts of the massive project of revising ASTM Standards on Building Economics 6th Edition. <a href="http://www.astm.org/BOOKSTORE/COMPS/BLDGECON07.htm" target="_blank">ASTM Standards on Building Economics 6th Edition Book 2007</a>. You can purchase this terrific Handbook at the above link.</p>
        <p>Lee Stevens has volunteered to spearhead a public relations and marketing outreach for the Sub-committee as much as her time will allow.  Some of the basic principles of Building Economics are being conveyed in the training initiatives of ETA and Kingport Corporation. Cost effectiveness of energy-related projects whether renewable energy or energy efficiency projects is a vital criteria for all end-users. Traditional simple payback and Internal Rate of Return and only some quick screening tools for the stakeholders involved.</p>
        <p>The large corporate and government markets have adopted building economics for over 50 years in new construction and large retrofit projects. In the area of energy efficiency, the crucial importance of generating operating cash flow and ensuring the liquidity of a firm or organization has been largely ignored by the various stakeholders.</p>
        <p>With the input from several building engineers and economists working on the Sub Committee, ETA and Kingport are hoping to convey to its clients the importance of analyzing the impact of energy efficiency projects on the operating cash flow and overall financial performance of a firm or organization.  This methodology helps the building owner and operator justify the up front investments with their board, top management as well as the lenders who look to enhanced cash flow stream  as the primary soucre of repayment of their loans.</p>
        </div>
        
        <div class="newsitem i2011" id="i250511">
        <h2 class="newscal">May 25, 2011</h2>
        <h3>San Diego State University Green Campus Intern February 2011</h3>
        <p>As of February, 2011, Daryl DeJean has created an exciting Green Campus Strategy and Implementation Roadmap for a new Green Team of Students including:</p>
        <ul class="ullist">
        <li>environmental engineering students</li>
        <li>business students</li>
        <li>Physical Plant engineering team</li>
        </ul>
        <p>The Green Team is led by Kenzie McDonald, a passionate and highly effective student leader who has taken on the role of project coordinator for the entire student body!</p>
        <p>Kenzie, congratulations on your phenomenal accomplishment, getting everyone to volunteer time to plan this project within the budgetary constraint of the University!</p>
        </div>
        
        <div class="newsitem i2012" id="i270411">
        <h2 class="newscal">April 27, 2011</h2>
        <h3>Ocean Beach burgers head to deployed troops - FOX 5 San Diego Reporter</h3>
		<p>Mike Hardin, thank you for being such a patient customer and for sharing the advancement in technology with the general public! 
Thank you for caring so much and for feeding our troops overseas! YOU ARE THE BEST!</p>
        <p><a href="http://www.vacationstarter.com/topic/kswb-hodads-troops,0,4758856.story" target="_blank">Ocean Beach burgers head to deployed troops - FOX 5 San Diego Reporter</a></p>
        </div>
        
        <div class="newsitem i2011" id="i310311">
        <h2 class="newscal">March 31, 2011</h2>
        <h3>National Facilities Management & Technology Conference March 13-17, 2011</h3>
        <p>As the country's #1 conference and exposition for non-residential building owners, facility managers, maintenance engineers, directors of sustainability, planning, operations and management, NFMT gives the attendees access to the people, future-forward products and information within the perspective of Facilities Management as opposed to building technologies. The purpose of the conference is to enhance the value of the facility, streamline operations, establish best practices, purchase innovative facility products and systems.</p>
        <p>On June 8, 2011 Daryl gave a seminar to 46 attendees on new green lighting technologies.</p>
        <p>Lighting systems are among the most frequently targeted in sustainability initiatives in the built environment. Thanks to emerging technologies and methods such as LEDs, daylighting and induction, there are a plethora of opportunities to reduce electricity energy use, improve lighting quality and decrease a building’s carbon footprint. So how can facility managers best select from the breadth and variety of choices that seem to crop up continually? This webcast will inform attendees about the applications and benefits of new (and up-and-coming) devices that provide energy savings in a variety of facilities.</p>
        <p><a href="http://www.nfmt.com/virtual/" target="_blank">Virtual Greening Buildings</a></p>
        <p>The presentations will be made available if you register online at the above link.</p>
        </div>
        
        <div class="newsitem i2011" id="i300311">
        <h2 class="newscal">March 30, 2011</h2>
        <h3>ASTM E60 Committee April 12-14, 2011</h3>
        <p>Lee Stevens represented ETA and Kingport at the ASTM International E60 Committee in Anaheim, CA on April 12-14, 2011. The work of the Committee  spans every part and use of a building , no matter how large or small and purpose.</p>
        <p>We are reviewed and voted on new standards for global meeting venues with standards to drive more adoption of Sustainable Meeting Best Practices globally. Lee Stevens submitted her comments and votes to the Committee in light of her previous work with the hospitality industry.</p>
        <p>Thinking Beyond Building Components by Christopher Mathis Part 2 of 2</p>
        <p>"ASTM International technical committees have long developed standards for building components, but the future lies in viewing structures as interactive systems."</p>
        <p>The following rendering of a Building illustrates the massive work of the E60 ASTM Committee. Courtesy of ASTM International E60 Committee.</p>
        <p>From: <a href="http://www.astm.org/SNEWS/JA_2010/mathis_ja10.html" target="_blank">http://www.astm.org/SNEWS/JA_2010/mathis_ja10.html</a></p>
        <p><img src="/graphics/news/astmE60.jpg" alt="" /></p>
        
        <h3>Press Conference Governor Arnold Schwarzenegger, Tom Steyer and San Francisco Mayor Gavin Newsom November 17, 2010</h3>
        <p><img src="/graphics/news/pressgovarsch.jpg" alt="" /></p>
        <p>Mayor Newsom Joins Governor Arnold Schwarzenegger and Tom Steyer to Announce New Funding For Green Collar Job Training Program</p>
        <p>Mayor Gavin Newsom joined Governor Arnold Schwarzenegger and Tom Steyer, Co-Managing Partner of Farallon Capital Management, to announce a $250,000 donation to create the new Sales Training Module of the California Advanced Lighting Controls Training Program (CALCTP), a public and private collaboration of statewide utilities, University of California at Davis, the community college system, and electrical workers and contractors that will provide hands-on green jobs training. The event took place at Levi’s Global Headquarters where significant energy efficiency building retrofits were a result of a CALCTP project and green jobs training initiative by a NECA member.</p>
        <p><a href="http://ielmcc.com/calctp.html" target="_blank">How to Develop and Operated a Successful Advanced Light Controls Business by Bernie Kotlier</a></p>
        </div>
        
        <div class="newsitem i2011" id="i260311">
        <h2 class="newscal">March 26, 2011</h2>
        <h3>East Lyme Story Book Historic Streetlight Project Design First ARRA Project Successfully Completed!</h3>
        <p>As of March, 2010, one of ETA's key 2010 projects was completed successfully! ETA assisted the Town of East Lyme  with one of the first streetlight design and retrofit projects funded under the American Recovery & Reinvestment Act successfully. The historical preservation of the town ambience was key in this project. The historical streetlight combined with the longevity and tremendous energy savings of the US-made LED streetlights was a real appeal to a discriminating engineering and purchasing committee. A key requirement of the town was the "Made In America" label. The town selected Architectural Area Lighting (AAL) as their fixtures are made in California.</p>
        <p>Bill Scheer, Town Engineer, said about the project:</p>
        <p>"There has been no complaints and everything has been positive. The town was audited for compliance with the terms and consitions of the ARRA funding: no issue or errors were found by the auditors. This was the first audit conducted and due to ETA's guidance on meeting the letter of the law, the town went flawlessly"</p>
        <p><img src="/graphics/news/eastlyme01.jpg" alt="" /><br /><img src="/graphics/news/eastlyme02.jpg" alt="" /></p>
        
        <h3>Euroluce 2011-The Lighting Design Show in Milan April 12-15, 2011</h3>
        <p>ETA will be in Milan at the EUROLUCE Trade Show in Milan, Italy. Please see the Euroluce link below.</p>
        <p><a href="http://www.euroluce.com.au/" target="_blank">Euroluce 2011, Milan, Italy</a></p>
        <p><img src="/graphics/news/euroluce01.jpg" alt="" /> <img src="/graphics/news/euroluce02.jpg" alt="" /></p>
        </div>
        
        <div class="newsitem i2011" id="i220311">
        <h2 class="newscal">March 22, 2011</h2>
        <h3>Daryl led a Lunch and Learn Seminar at Yale University New Haven, CT</h3>
        </div>
        
        <div class="newsitem i2011" id="i300111">
        <h2 class="newscal">January 30, 2011</h2>
        <h3>ETA Named by US EPA Service & Product Provider (SPP) of the Quarter</h3>
		<p>The US Environmental Protection Agency (US EPA)  recognizes Emerging Technologies Associates, Inc. (ETA) as the latest Featured SPP of the Quarter. Read about how ETA leveraged ENERGY STAR tools to assist a customer, Sharp Grossmont Hospital, in achieving a 9 percent reduction in energy intensity in two years.</p>
		<p>Please click on the following link for the article published on the ENERGY STAR website in January 2011.</p>
		<p><a href="http://emergingtechnologiesassociates.com/images/stories/What_We_Do/ENERGY_STAR_SPP_of_the_Qtr/Success_Story_ETA.pdf" target="_blank">ETA Named SPP of the Quarter In January 2011 for the Energy Management Consulting Successful Project with Sharp Grossmont</a></p>
        </div>
        
        <!-- 2010 -->
        <div class="newsitem i2010" id="i291110">
        <h2 class="newscal">November 29, 2010</h2>
        <h3>Celebrating US EPA 40th Anniversary</h3>
		<p>The US EPA is celebrating its 40th anniversary with a terrific webpage full of tips for all of us at the office and at home!</p>
        <p>Take a look at these free resources and tips to save money!</p>
        <p><a href="http://epa.gov/40th/" target="_blank">EPA40 Healthier Families. Cleaner Communities. Stronger America</a></p>
        <p>Check out the Pick 5 ideas link <a href="http://epa.gov/pick5/" target="_blank">Exciting Pick 5 Campaign!</a></p>
        </div>
        
        <div class="newsitem i2010" id="i231110">
        <h2 class="newscal">November 23, 2010</h2>
        <h3>ENERGY STAR Best Practices in the News! November 2010</h3>
		<p>Chuck Colgan of The California Center for Sustainability attended one of Daryl DeJean ENERGY STAR Best Practices seminars and wrote an article about the presentation. Check it out and see the value of establishing or rviewing your best practices in any energy management initiatives.</p>
        <p><a href="http://blog.cleantechies.com/2010/11/23/affordable-steps-boost-energy-star-building-rating/" target="_blank">Cleantechies blog Nov 23, 2010 Looking For Affordable Steps to Energy Efficiency?</a></p>
        <p>This article is written by  Chuck Colgan, Public Relations Director of the California Center for Sustainability, San Diego, CA. Chuck articulates to a tee Daryl DeJean cost effective recommendations to anyone managing buildings whether it's a restaurant, an office or a hospital.</p>
        <p>Before spending money on any major building systems, read this one minute tip from a Center whose mission is to consult, promote, teach and conduct community outreach with the consumer as well as business. Chuck could not echo Daryl's message any better!</p>
        </div>
        
        <div class="newsitem i2010" id="i210510">
        <h2 class="newscal">May 21, 2010</h2>
        <h3>Tennis Champions</h3>
		<p>John DeJean, father of ETA President Daryl DeJean, swept the gold medals at the Baton Rouge Louisiana Senior Olympic tennis tournament. John and his partner, Dyer LaFleur, won the men's doubles bracket. John went on to capture the singles title. As the gold medal winners they qualified to move on to the Louisiana State Senior Olympics. Watch out world, the cajun duo is on the move in the Senior Olympic scene.</p>
        </div>
        
        <div class="newsitem i2010" id="i210310">
        <h2 class="newscal">March 21, 2010</h2>
        <h3>US DOE &amp; EPA Strengthen ENERGY STAR</h3>
		<p>March 19, 2010 - The US EPA and US DOE announce new action steps to strengthen the ENERGY STAR ® program . " This action comes at a critical time for American consumers, many of whom struggle to keep up with their monthly energy bills. " according to the US DOE and US EPA . The two agencies are taking aggressive action in expanding testing of ENERGY STAR qualified products and enforcement of energy effciency standards.</p>
		<p>A two-step process of qualifying ENERGY STAR labeled products has already begun requiring that all products seeking the ENERGY STAR label be tested in approved laboratories and that an ongoing verification testing program be implemented to ensure that efficiency standards are complied with continually. Residential Light Fixtures whether Compact Fluorescent Light or LED's are all tested by accredited third party laboratories to receive the ENERGY STAR label.</p>
        <p>A key to strenghthening the value of the trusted brand is the enforcement actions to require compliance with miminum appliance efficiency standards.  For example, on January 25, 2010, the US DOE removed 34 Compact Fluorescent Light models from 24 manufacturers from the list of ENERGY STAR qualified list of products. The specific enforcement steps are:</p>
        <ul class="ullist">
        <li>formation of an enforcement team within the Office of the General Counsel to pursue violations of certifications issued by the US DOE and compliance with ENERGY STAR  criteria.</li>
        <li>enforcement actions  are imposition of civil penalty, removal of labels and immediate corrective actions.</li>
        </ul>
		<p>For further details, please see the following: <a href="http://yosemite.epa.gov/opa/admpress.nsf/f0d7b5b28db5b04985257359003f533b/f721f69419064539852576eb0065e109" target="_blank">http://yosemite.epa.gov/opa/admpress.nsf/f0d7b5b28db5b04985257359003f533b/f721f69419064539852576eb0065e109</a></p>
        </div>
        <div class="newsitem i2010" id="i040310">
        <h2 class="newscal">March 04, 2010</h2>
        <h3>US DOE New Frontier in Lighting Video</h3>
		<p>US Deparment of Energy released a video on LED technology in February.</p>
		<p>Video: <a href="http://www1.eere.energy.gov/buildings/ssl/raleigh-video.html" target="_blank">http://www1.eere.energy.gov/buildings/ssl/raleigh-video.html</a></p>
        
        <h3>ENERGY STAR Benchmarking Update</h3>
		<p>Update of ENERGY STAR Benchmarking by Emerging Technologies Associates</p>
		<p>We are one of the Most Active ENERGY STAR Service Provider. Please click on the following link on the ENERGY STAR website to find us.</p>
        <p><a href="http://www.energystar.gov/index.cfm?current_sort_column=points&current_sort_order=DESC&resultsPerPage=20&fuseaction=spp_activity.showSPPResults&letter=ALL&activity=0&comp_name=emerging" target="_blank">ENERGY STAR Most Active Service Provider Directory</a></p>
        <p>We have benchmarked 43 buildings as of October 30, 2010  totaling 8,329,000 square feet. In addition, we achieved the following:</p>
        <ol class="ollist">
        <li><p>Five buildings have received the ENERGY STAR in 2010:</p>
        <ul class="ullist">
        <li>Travelers Claim University, Hartford area, CT</li>
		<li>Travelers Hartford Building, Harford, CT</li>
		<li>Travelers Building ,Fall River, MA</li>
		<li>Sharp Medical Center, Chula Vista, CA</li>
		<li>VA Medical Center La Jolla, La Jolla, CA</li>
        </ul>
        </li>
        <li>
        <p>We have assisted three clients and their consultants implement ENERGY STAR recommended energy management Strategy and Guidelines resulting in better               improvement in energy efficiency but more importantly increasing productivity of the Facilities and Engineering teams.</p>
        <p>On October 26, 2010, Mr. Armando Montes, Central Plant Manager, Sharp Memorial Hospital shared his experience with benchmarking his 1.2million square foot hospital in ENERGY STAR with the help of Lee Stevens. The audience of 40 Facilities Managers, Directors of Facilities and other sustainability stakeholders heard first hand the year long project to improve the energy performance of a massive building and how the Sharp Green team rose to the challenge and continually track several energy efficiency measures in ENERGY STAR benchmarking tool, Portfolio Manager. Mr. Montes, practitioner's viewpoint resonated with many attendees who could relate directly with the energy manager of a large building attempting to put his arms around energy consumption in one of the highest energy intense spaces.</p>
        </li>
        <li>
        <p>San Diego Gas & Electric retained  in February 2010 Emerging Technologies Associates Inc (ETA) to teach  eleven ENERGY STAR seminars from hands on Benchmarking labs to the Tools to the Best Practices recommended by the national program.</p>
        <p>As of October 30, 2010, ETA has helped <strong>304 attendees</strong> benchmark <strong>112 buildings, a phenomenal accomplishment!</strong> The attendees who are mostly Facilities Managers and Directors of Engineering as well as energy consultants were so engaged in the process that they have exceeded our expectations with the benchmarking results to date.</p>
        <p>Since February 2010, <strong>8.6million square feet</strong> have been benchmarked either manually or in SDG&E brand new Automated Benchmarking Services.  An additional 178 buildings will be added within the next six months representing approximately <strong>4.2 million square feet</strong>.</p>
        <p>ENERGY STAR is not just about doing but it is also about building the level of awareness of your energy management strategy and plan with others internally and externally.</p>
        <p>Two key energy and plant managers from Sharp HealthCare shared their year-long energy management program with over 70 attendees. Robert Guthrie, Central Plant Manager, CEM for Sharp Grossmont Hospital  phenomenal presentation included the recently announced Sharp "All Ways Green Initiative" which includes planning and implementing energy efficiency measures. Robert's presentation included ENERGY STAR graphs showing a steady decline in the Source Energy Use Intensity( kBTU's/sqft), the nationally use metric for determining a building's true energy performance.</p>
        <p>Mr. Armando Montes mentioned above was so inspired by his successful presentation that he is now ready to share the results of his year- long energy efficiency projects on January 26, 2011 at the SDG&E Building Upgrade Part 2 Seminar.</p>
        <p>San Diego County is where the first ENERGY STAR labeled building was awarded the prestigious ENERGY STAR plaque. Congratulations San Diego for leading the way with your passion and sense of urgency to use energy more wisely!</p>
        <p>Thank you San Diego Gas & Electric for the outstanding job of building awareness of the most comprehensive energy management program in the world and for leading the way with your innovative approach to sustainability!</p>
        <p>The little utility that could! Please take a look at San Diego Gas & Electric national rank as #1 in the country, <a href="http://www.environmentalleader.com/2010/08/03/sempre-energy-pegged-as-smart-grid-leader/" target="_blank">San Diego Gas, the most intelligent utility according to UtiliQ annual survey!</a></p>
        </li>
        <li>
        <p>One building The Mark Twain House & Museum, Hartford, CT is featured on ENERGY STAR as a Success Story on the ENERGY STAR website. The Story can be viewed in its entirety at, <a href="http://www.energystar.gov/index.cfm?c=entertainment.bus_entertainment" target="_blank">ENERGY STAR for Entertainment webpage</a>. Please scroll all the way down to the bottom of the page and click on the link for the Mark Twain House Museum along with the four other featured Partners stories.</p>
        <p>The story of the Mark Twain House & Museum is a compelling story of how the Museum avoided closing its doors and saved jobs by reducing its energy bills with the right steps. Daryl DeJean consulted with the Museum on the proper selection of ligthing technologies. The Museum found warm color LED lamps heretofore unavailable that were custom-designed for the Museum. Shortly after that, Lee Stevens began benchmarking the Museum and tracking the energy savings for Jeff Nichols and the entire Museum Green Team <a href="http://www.energystar.gov/ia/business/entertainment/Success_Story_MarkTwainHouse_Museum.pdf" target="_blank">Mark Twain House & Museum Success Story on ENERGY STAR website.</a></p>
        </li>
        </ol>
        <p><img src="/graphics/news/dreamstimemaximum_2985454.jpg" width="369" height="237" alt="" /></p>
        </div>
        
        <!-- 2009 -->
        <div class="newsitem i2009" id="i211209">
        <h2 class="newscal">December 21, 2009</h2>
        <h3>Ten Green Building Trends for 2010</h3>
		<p>The Earth Advantage Institute has released a list of the top ten “green” building trends in 2010 that range from energy “scores” for homes to web-based displays that track energy usage in real time.</p>
		<p>The smart grid and connected home is expected to grow in 2010 as utilities continue to make upgrades to the grid for more effective generation, storage and distribution of power, and as smart-grid manufacturers develop custom and web-based display panels that show real-time home energy use, says the Earth Advantage Institute.</p>
		<p>Sources: <a href="http://www.environmentalleader.com/2010/01/11/ten-green-building-trends-for-2010/" target="_blank">http://www.environmentalleader.com/2010/01/11/ten-green-building-trends-for-2010/</a></p>
        
        <h3>Greener Pastures for Commercial Real Estate</h3>
		<p>Concerns have been building about weakness in commercial real estate, but Matthew J. Kotchen of Yale University notes new research that points to a potential bright spot in the sector.</p>
		<p>Good news about commercial real estate is in short supply these days, so it may be surprising to hear that going “green” can earn some “green.”</p>
		<p>New research shows that green-certified buildings command substantially higher rents and selling prices. Economists Piet Eichholtz, Nils Kok, and John Quigley estimate just how much in a forthcoming paper in the American Economic Review. They consider the federal government’s Energy Star certification and the U.S. Green Building Council’s LEED certification.</p>
        <p>Source: <a href="http://blogs.wsj.com/environmentalcapital/2009/12/16/greener-pastures-for-commercial-real-estate/" target="_blank">http://blogs.wsj.com/environmentalcapital/2009/12/16/greener-pastures-for-commercial-real-estate/</a></p>
        </div>
    </div>
    </div>

    </div>
    
    </div>
    </div>
    
<?php include("../includes/global-footer.php"); ?>
</div>
</body>
</html>
