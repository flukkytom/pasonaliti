<?php
ob_start();
session_start();
include ("function.php");
include ("disc_email.php");

if (isset($_POST['send-me']))	{
	##echo $_SESSION['disc'][0];
	if (!isset($_POST['email']))	{
		$err=1;
	}
	
	$sendmailx = email($_POST['email'],$_SESSION['disc'][0],$_SESSION['disc'][1],$_SESSION['disc'][2],$_SESSION['disc'][3],$_SESSION['clientname']);
	if ($sendmailx)	{
		$err = "2";
	}
		else	{
		$err = "3";
	}
}
else	{
###relocate
}


?>
<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8" />

<title>Olutola Michael Obembe  |  DISC - Peronality Style Survey - the Assessment</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content=" PrimaxNG, smsBAG, MySchoolManager, flukkytom, WebsiteValue, StumbledLinks, NaijaGist, sms2Heart, NyscDiary" />
<link rel="stylesheet" type="text/css" href="http://www.olutolaobembe.com/wp-content/themes/whitelight/style.css" media="screen" />
<link rel="pingback" href="http://www.olutolaobembe.com/xmlrpc.php" />
<link rel="shortcut icon"  href="http://olutolaobembe.com/images/tom.gif"/>
<link rel="alternate" type="application/rss+xml" title="Olutola Michael Obembe &raquo; Feed" href="http://www.olutolaobembe.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Olutola Michael Obembe &raquo; Comments Feed" href="http://www.olutolaobembe.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Olutola Michael Obembe &raquo; My Projects Comments Feed" href="http://www.olutolaobembe.com/my-projects/feed/" />
<link rel='stylesheet' id='admin-bar-css'  href='http://www.olutolaobembe.com/wp-includes/css/admin-bar.min.css?ver=3.6' type='text/css' media='all' />
<link rel='stylesheet' id='woo-layout-css'  href='http://www.olutolaobembe.com/wp-content/themes/whitelight/css/layout.css?ver=3.6' type='text/css' media='all' />
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-includes/js/comment-reply.min.js?ver=3.6'></script>
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-content/themes/whitelight/includes/js/third-party.js?ver=3.6'></script>
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-content/themes/whitelight/includes/js/general.js?ver=3.6'></script>
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-content/plugins/yet-another-simple-gallery/yasg.js?ver=3.6'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.olutolaobembe.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.olutolaobembe.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='My Books' href='http://www.olutolaobembe.com/publications/' />
<link rel='next' title='My Notes' href='http://www.olutolaobembe.com/my-notes/' />
<meta name="generator" content="WordPress 3.6" />
<link rel='canonical' href='http://www.olutolaobembe.com/my-projects/' />
<link rel="stylesheet" href="http://www.olutolaobembe.com/wp-content/plugins/yet-another-simple-gallery/yasg.css" type="text/css" media="screen" />

<!-- Theme version -->
<meta name="generator" content="Whitelight 1.1.20" />
<meta name="generator" content="WooFramework 5.3.12" />

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!--  Mobile viewport scale | Disable user zooming as the layout is optimised -->
<meta content="initial-scale=1.0" name="viewport"/>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
<script type="text/javascript">
//<![CDATA[
	var screen_res = "1024 x 768"; 
//]]>
</script>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 28px !important; }
	* html body { margin-top: 28px !important; }
</style>
<!-- Woo Custom Styling -->
<style type="text/css">
#content { background: #ffffff !important; }
.ie #header { filter: none; }
#header { background: #dadce3 !important; }
</style>
<style type="text/css">
<!--
.style1 {font-size: 21px}
.style3 {font-size: 12px; font-family: Candara, Garamond, "Book Antiqua"; }
-->
</style>
<!-- Google Webfonts -->
<link href="http://fonts.googleapis.com/css?family=Signika:300,400,600" rel="stylesheet" type="text/css" />

<!-- Woo Custom Typography -->
<style type="text/css">
#header .site-title a {font:bold 28px/1em Palatino, "Palatino Linotype", serif;color:#222222;}
#header .site-description {font:normal 12px/1em "Myriad Pro", Myriad, sans-serif;color:#666666;}
</style>

<!-- Alt Stylesheet -->
<link href="http://www.olutolaobembe.com/wp-content/themes/whitelight/styles/default.css" rel="stylesheet" type="text/css" />
<!-- Options Panel Custom CSS -->
<style type="text/css">
#logo img { display:none; } .site-title { display:block!important; }
.site-description { display:block!important; }
</style>


<!-- Woo Shortcodes CSS -->
<link href="http://www.olutolaobembe.com/wp-content/themes/whitelight/functions/css/shortcodes.css" rel="stylesheet" type="text/css" />

<!-- Custom Stylesheet -->
<link href="http://www.olutolaobembe.com/wp-content/themes/whitelight/custom.css" rel="stylesheet" type="text/css" />
</head>

<body class="page page-id-71 page-template page-template-template-fullwidth-php logged-in admin-bar no-customize-support gecko layout-left-content">

<div id="wrapper">

	
	<header id="header">
	
		<div class="col-full">
		
					    
	    <hgroup>
	        
			<h1 class="site-title"><a href="http://www.olutolaobembe.com">Olutola Michael Obembe</a></h1>
			<h2 class="site-description">me, myself, and I &#8211; flukkytom</h2>
			<h3 class="nav-toggle"><a href="#navigation">Navigation</a></h3>
		      	
		</hgroup>

				
		<nav id="navigation" role="navigation">
			<ul id="main-nav" class="nav fl"><li id="menu-item-445" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-445"><a href="http://www.olutolaobembe.com/about-me/">About Olutola</a></li>
<li id="menu-item-444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-444"><a href="http://www.olutolaobembe.com/publications/">My Books</a></li>
<li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442"><a href="http://www.olutolaobembe.com/my-notes/">My Notes</a></li>
<li id="menu-item-443" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-71 menu-item-443"><a href="http://www.olutolaobembe.com/my-projects/">My Projects</a></li>
<li id="menu-item-488" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-421 current_page_item menu-item-488"><a href="http://www.olutolaobembe.com/welcome-to-disc-assessment-test/">DISC</a></li>
<li id="menu-item-441" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-441"><a href="http://www.olutolaobembe.com/buzz-me/">Buzz Me</a></li>
</ul>    	    		
		</nav><!-- /#navigation -->
		
				
		</div><!-- /.col-full -->
		
	</header><!-- /#header -->
	
		       
    <div id="content">
    
    	<div class="page col-full">
    	
    		    
			<section id="main" class="fullwidth">
	            
	                                                                     
	                <article class="post-71 page type-page status-publish hentry">
						
						<header>
							<h1>DISC - Peronality Style Survey - the Assessment</h1>
						</header>
	                    
	                    <section class="entry">
<body>

<div><a href="index.php" target="_self">Restart disc test</a></div>
<br />
<?php if ($err==1)	{?>
<div>
  <p>You gave us a wrong Email Address, we are unable to send you your full results </p>
  <p>Thank You  </p>
</div>
<?php } ?>
<?php if ($err==2)	{?>
<div>
  <p>We Were able to send you your Full dISC Personality Trait Test results</p>
  <p>Thank You  </p>
</div>
<?php } ?>
<?php if ($err==3)	{?>
<div>
  <p>Something went wrong and its my Fault: send me an email @ <a href="mailto:olutola.obembe@primaxng.com">olutola.obembe@primaxng.com</a> and i might be able to fix it.</p>
  <p>Thanks a Alot  </p>
</div>
<?php } ?>
<div>For any suggestions or enquiries, feel free to talk to me <a href="mailto:olutola.obembe@primaxng.com"> olutola.obembe@primaxng.com</a> </div>
<p>&nbsp; </p>
		               	</section><!-- /.entry -->
	
						<span class="small"><a class="post-edit-link" href="http://www.olutolaobembe.com/wp-admin/post.php?post=71&amp;action=edit" title="Edit Page">{ Edit }</a></span>	
	                </article><!-- /.post -->
	                                                    
				  
	        
			</section><!-- /#main -->
			
		</div>
		
    </div><!-- /#content -->
		
	<section id="footer-widgets" class="col-3 fix">
	
		<div class="col-full">

								
			<div class="block footer-widget-1">
	        			<div id="recent-posts-3" class="widget widget_recent_entries">		<h3>MyNotes</h3>		<ul>
					<li>
				<a href="http://www.olutolaobembe.com/budgeting-your-time-chapter-ii-building-a-successful-life/" title="BUDGETING YOUR TIME &#8211; Chapter II &#8211; Building a Successful Life">BUDGETING YOUR TIME &#8211; Chapter II &#8211; Building a Successful Life</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/timing-being-time-conscious-chapter-ii-building-a-successful-life/" title="TIMING &#8211; Being Time Conscious &#8211; Chapter II &#8211; Building a Successful Life">TIMING &#8211; Being Time Conscious &#8211; Chapter II &#8211; Building a Successful Life</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/after-26-months-i-found-a-revenue-leakage-due-to-software-bug/" title="After 26 months, I found a revenue leakage due to a Software Bug">After 26 months, I found a revenue leakage due to a Software Bug</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/timing-chapter-ii-building-a-successful-life/" title="TIMING &#8211; Chapter II, Building a Successful Life">TIMING &#8211; Chapter II, Building a Successful Life</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/building-a-successful-life-chapter-1-specifying-your-goals-iii/" title="Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S) III">Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S) III</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/building-a-successful-life-chapter-1-specifying-your-goals-ii/" title="Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S) II">Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S) II</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/building-a-successful-life-chapter-1-specifying-your-goals/" title="Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S)">Building a Successful Life: Chapter 1 – SPECIFYING YOUR GOAL(S)</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/building-a-successful-life-chapter-1-examining-your-goals/" title="Building a Successful Life: Chapter 1 – EXAMINING YOUR GOAL(S)">Building a Successful Life: Chapter 1 – EXAMINING YOUR GOAL(S)</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/building-a-successful-life-chapter-1-determining-your-goals/" title="Building a Successful Life: Chapter 1 &#8211; DETERMINING YOUR GOAL(S)">Building a Successful Life: Chapter 1 &#8211; DETERMINING YOUR GOAL(S)</a>
						</li>
					<li>
				<a href="http://www.olutolaobembe.com/police-bribery-police-officer-was-dismissed-for-trying-to-catch-a-briber-just-like-farouk/" title="Police Bribery &#8211; Police Officer was dismissed for trying to catch a briber just like Farouk">Police Bribery &#8211; Police Officer was dismissed for trying to catch a briber just like Farouk</a>
						</li>
				</ul>
		</div>			</div>
	
		        								
			<div class="block footer-widget-2">
	        	<div id="tag_cloud-3" class="widget widget_tag_cloud"><h3>MyCloud</h3><div class="tagcloud"><a href='http://www.olutolaobembe.com/tag/153-people/' class='tag-link-11' title='1 topic' style='font-size: 8pt;'>153 people</a>
<a href='http://www.olutolaobembe.com/tag/activating-your-potential/' class='tag-link-28' title='1 topic' style='font-size: 8pt;'>Activating your potential</a>
<a href='http://www.olutolaobembe.com/tag/air/' class='tag-link-7' title='1 topic' style='font-size: 8pt;'>Air</a>
<a href='http://www.olutolaobembe.com/tag/ammunitions/' class='tag-link-38' title='1 topic' style='font-size: 8pt;'>Ammunitions</a>
<a href='http://www.olutolaobembe.com/tag/art/' class='tag-link-27' title='1 topic' style='font-size: 8pt;'>Art</a>
<a href='http://www.olutolaobembe.com/tag/boko-haram/' class='tag-link-36' title='2 topics' style='font-size: 12.581818181818pt;'>Boko Haram</a>
<a href='http://www.olutolaobembe.com/tag/career/' class='tag-link-123' title='2 topics' style='font-size: 12.581818181818pt;'>career</a>
<a href='http://www.olutolaobembe.com/tag/christians/' class='tag-link-40' title='1 topic' style='font-size: 8pt;'>Christians</a>
<a href='http://www.olutolaobembe.com/tag/clubbing/' class='tag-link-21' title='1 topic' style='font-size: 8pt;'>clubbing</a>
<a href='http://www.olutolaobembe.com/tag/copenhagen/' class='tag-link-18' title='1 topic' style='font-size: 8pt;'>copenhagen</a>
<a href='http://www.olutolaobembe.com/tag/corruption/' class='tag-link-37' title='1 topic' style='font-size: 8pt;'>Corruption</a>
<a href='http://www.olutolaobembe.com/tag/crash/' class='tag-link-10' title='1 topic' style='font-size: 8pt;'>Crash</a>
<a href='http://www.olutolaobembe.com/tag/dana/' class='tag-link-6' title='1 topic' style='font-size: 8pt;'>Dana</a>
<a href='http://www.olutolaobembe.com/tag/digital/' class='tag-link-23' title='1 topic' style='font-size: 8pt;'>Digital</a>
<a href='http://www.olutolaobembe.com/tag/education/' class='tag-link-110' title='2 topics' style='font-size: 12.581818181818pt;'>Education</a>
<a href='http://www.olutolaobembe.com/tag/family/' class='tag-link-128' title='2 topics' style='font-size: 12.581818181818pt;'>family</a>
<a href='http://www.olutolaobembe.com/tag/forgiveness/' class='tag-link-13' title='1 topic' style='font-size: 8pt;'>forgiveness</a>
<a href='http://www.olutolaobembe.com/tag/future/' class='tag-link-44' title='3 topics' style='font-size: 15.636363636364pt;'>Future</a>
<a href='http://www.olutolaobembe.com/tag/genealogy/' class='tag-link-25' title='1 topic' style='font-size: 8pt;'>Genealogy</a>
<a href='http://www.olutolaobembe.com/tag/goal/' class='tag-link-32' title='1 topic' style='font-size: 8pt;'>Goal</a>
<a href='http://www.olutolaobembe.com/tag/goals/' class='tag-link-118' title='4 topics' style='font-size: 18.181818181818pt;'>goals</a>
<a href='http://www.olutolaobembe.com/tag/god/' class='tag-link-30' title='3 topics' style='font-size: 15.636363636364pt;'>God</a>
<a href='http://www.olutolaobembe.com/tag/heart/' class='tag-link-43' title='2 topics' style='font-size: 12.581818181818pt;'>Heart</a>
<a href='http://www.olutolaobembe.com/tag/ict/' class='tag-link-4' title='2 topics' style='font-size: 12.581818181818pt;'>ICT</a>
<a href='http://www.olutolaobembe.com/tag/islamists/' class='tag-link-39' title='1 topic' style='font-size: 8pt;'>Islamists</a>
<a href='http://www.olutolaobembe.com/tag/jonathan/' class='tag-link-35' title='2 topics' style='font-size: 12.581818181818pt;'>Jonathan</a>
<a href='http://www.olutolaobembe.com/tag/kakadu/' class='tag-link-20' title='1 topic' style='font-size: 8pt;'>kakadu</a>
<a href='http://www.olutolaobembe.com/tag/life/' class='tag-link-14' title='6 topics' style='font-size: 22pt;'>Life</a>
<a href='http://www.olutolaobembe.com/tag/love/' class='tag-link-42' title='4 topics' style='font-size: 18.181818181818pt;'>Love</a>
<a href='http://www.olutolaobembe.com/tag/mid-summer/' class='tag-link-19' title='1 topic' style='font-size: 8pt;'>mid-summer</a>
<a href='http://www.olutolaobembe.com/tag/mobile/' class='tag-link-26' title='2 topics' style='font-size: 12.581818181818pt;'>Mobile</a>
<a href='http://www.olutolaobembe.com/tag/muslims/' class='tag-link-41' title='1 topic' style='font-size: 8pt;'>Muslims</a>
<a href='http://www.olutolaobembe.com/tag/nigeria/' class='tag-link-5' title='6 topics' style='font-size: 22pt;'>Nigeria</a>
<a href='http://www.olutolaobembe.com/tag/people/' class='tag-link-15' title='1 topic' style='font-size: 8pt;'>People</a>
<a href='http://www.olutolaobembe.com/tag/plane/' class='tag-link-8' title='1 topic' style='font-size: 8pt;'>Plane</a>
<a href='http://www.olutolaobembe.com/tag/potential/' class='tag-link-29' title='1 topic' style='font-size: 8pt;'>Potential</a>
<a href='http://www.olutolaobembe.com/tag/purpose/' class='tag-link-31' title='2 topics' style='font-size: 12.581818181818pt;'>Purpose</a>
<a href='http://www.olutolaobembe.com/tag/search/' class='tag-link-24' title='1 topic' style='font-size: 8pt;'>Search</a>
<a href='http://www.olutolaobembe.com/tag/success/' class='tag-link-33' title='6 topics' style='font-size: 22pt;'>Success</a>
<a href='http://www.olutolaobembe.com/tag/sweden/' class='tag-link-22' title='1 topic' style='font-size: 8pt;'>sweden</a>
<a href='http://www.olutolaobembe.com/tag/technology/' class='tag-link-3' title='1 topic' style='font-size: 8pt;'>Technology</a>
<a href='http://www.olutolaobembe.com/tag/time/' class='tag-link-142' title='2 topics' style='font-size: 12.581818181818pt;'>time</a>
<a href='http://www.olutolaobembe.com/tag/tivoli/' class='tag-link-17' title='1 topic' style='font-size: 8pt;'>tivoli</a>
<a href='http://www.olutolaobembe.com/tag/tragedy/' class='tag-link-9' title='1 topic' style='font-size: 8pt;'>Tragedy</a>
<a href='http://www.olutolaobembe.com/tag/war/' class='tag-link-34' title='1 topic' style='font-size: 8pt;'>War</a></div>
</div>			</div>
	
		        								
			<div class="block footer-widget-3">
	        	<div id="linkcat-16" class="widget widget_links"><h3>MyWebSpace</h3>
	<ul class='xoxo blogroll'>
<li><a href="http://www.connectbb.net" rel="me" title="A free Blackberry listing Website" target="_blank">ConnectBB</a>
A free Blackberry listing Website</li>
<li><a href="http://www.myschoolman.com" rel="me" title="A complete End-2-End School Managment Application" target="_blank">MySchoolManager</a>
A complete End-2-End School Managment Application</li>
<li><a href="http://www.flukkytom.com" rel="me" title="My Technology Blog" target="_blank">MyTechBlog &#8211; flukkytom</a>
My Technology Blog</li>
<li><a href="http://www.naijagist.com" rel="me" title="A Naija Forum for gists and general discussion..real time Naija Updates" target="_blank">NaijaGist</a>
A Naija Forum for gists and general discussion..real time Naija Updates</li>
<li><a href="http://www.putaquote.com" rel="me" title="A Free Quotes Website" target="_blank">Put-A-Quote</a>
A Free Quotes Website</li>
<li><a href="http://message.smsbag.com" rel="me" title="Free messages and sms text " target="_blank">sms2Heart</a>
Free messages and sms text </li>
<li><a href="http://www.smsbag.com" rel="me" title="a Web2SMS Platform" target="_blank">smsBAG</a>
a Web2SMS Platform</li>
<li><a href="http://www.stumbledlinks.com" rel="me" title="A free social bookmarking website" target="_blank">StumbledLinks</a>
A free social bookmarking website</li>
<li><a href="http://www.websitevalueng.com" rel="me" title="A website value Calculation for Website Worth" target="_blank">WebsiteValueNG</a>
A website value Calculation for Website Worth</li>

	</ul>
</div>
			</div>
	
		        					
		</div>

	</section><!-- /#footer-widgets  -->
	<footer id="footer">
	
		<div class="col-full">

			<div id="copyright" class="col-left">
							<p>Olutola Michael Obembe &copy; 2013. All Rights Reserved.</p>
						</div>
	
			<div id="credit" class="col-right">
			
							<p> </p>
						</div>
			
		</div>
		
	</footer><!-- /#footer  -->

</div><!-- /#wrapper -->
<!--
<p class="small"> WassUp 1.8.3.1 timestamp: 2013-09-06 10:53:52PM UTC (11:53PM)<br />
If above timestamp is not current time, this page is cached.</p> -->
<!--[if lt IE 9]>
<script src="http://www.olutolaobembe.com/wp-content/themes/whitelight/includes/js/respond-IE.js"></script>
<![endif]-->
<script type='text/javascript' src='http://www.olutolaobembe.com/wp-includes/js/admin-bar.min.js?ver=3.6'></script>
	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs" role="navigation">
			<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://www.olutolaobembe.com/wp-admin/about.php" title="About WordPress"><span class="ab-icon"></span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item"  href="http://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item"  href="http://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item"  href="http://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item"  href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://www.olutolaobembe.com/wp-admin/">Olutola Michael Obembe</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/customize.php?url=http%3A%2F%2Fwww.olutolaobembe.com%2Fmy-projects%2F">Customize</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/nav-menus.php">Menus</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-updates"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/update-core.php" title="2 Plugin Updates, 3 Theme Updates"><span class="ab-icon"></span><span class="ab-label">5</span><span class="screen-reader-text">2 Plugin Updates, 3 Theme Updates</span></a>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://www.olutolaobembe.com/wp-admin/post-new.php" title="Add New"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-link"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/link-add.php">Link</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-portfolio"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php?post_type=portfolio">Portfolio Item</a>		</li>
		<li id="wp-admin-bar-new-features"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php?post_type=features">Feature</a>		</li>
		<li id="wp-admin-bar-new-slide"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php?post_type=slide">Slide</a>		</li>
		<li id="wp-admin-bar-new-feedback"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post-new.php?post_type=feedback">Feedback Item</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/post.php?post=71&#038;action=edit">Edit Page</a>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://www.olutolaobembe.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="http://www.olutolaobembe.com/wp-admin/profile.php" title="My Account">Howdy, flukkytom<img alt='' src='http://0.gravatar.com/avatar/451fd9b59847b22e8573c73cd4c090f7?s=16&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D16&amp;r=G' class='avatar avatar-16 photo' height='16' width='16' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://www.olutolaobembe.com/wp-admin/profile.php"><img alt='' src='http://0.gravatar.com/avatar/451fd9b59847b22e8573c73cd4c090f7?s=64&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>flukkytom</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item"  href="http://www.olutolaobembe.com/wp-login.php?action=logout&#038;_wpnonce=9c44116de5">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://www.olutolaobembe.com/wp-login.php?action=logout&#038;_wpnonce=9c44116de5">Log Out</a>
					</div>

		</body>
</html>