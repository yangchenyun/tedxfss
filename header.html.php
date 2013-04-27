<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Make IE8 works in IE7 standard mode -->
<meta http-equiv="X-UA-Compatible" content="IE=7;FF=3;OtherUA=4" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo "$title"; ?></title>
<link href="images/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/960.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
<link
	href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic"
	rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/external.js"> </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23094718-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--[if IE 6]>
<script src="DD_belatedPNG.js">
	fix('h2.title, h1#headlogo, a #footer');
  
  /* string argument can be any CSS selector */
  
</script>
<![endif]--> 
</head>
<body>
<div id="wrapper" class="container_16">
<div id="header" class="container_16">
<div id="firstrow" class="grid_16">
<h1 id="headlogo" class="grid_8 alpha"><a href="index.php">TEDxFiveStarSquare</a>
</h1>

<ul id="mainmenu" class="grid_6 push_2 omega">
	<!-- Highlight selected button -->
	<!-- Default selected section is event -->
	<li
		class="grid_2 alpha <?php if ($page != 'about' && $page != 'joinin') { echo 'selected';  } ?>"><a
		href="index.php">Event</a></li>
	<li class="grid_2 <?php if ($page == 'about') { echo 'selected';  } ?>"><a
		href="about.php">About</a></li>
<!-- 	<li
		class="grid_2 omega <?php if ($page == 'joinin') { echo 'selected';  } ?>"><a
		href="joinin.php">Join In</a></li> -->
</ul>
</div>
<!-- End of firstrow -->

<div id="secondrow" class="grid_11 push_5">
<ul id="social_media" class="grid_3 alpha">
	<li class="sociallink"><a id="weibo" 
		href="http://weibo.com/user/1998908530" rel='external'>Weibo</a></li>
	<li class="sociallink"><a id="twitter"
		href="http://twitter.com/#!/tedxfss" rel='external'>Twitter</a></li>
	<!-- <li class="sociallink"><a id="facebook" href="" rel='external'>Facebook</a></li> -->
</ul>

<!-- Display submenu items according to pages --> <!-- Index Page --> <?php if ($page !== 'about' && $page !== 'joinin') { ?>
<ul id="submenu" class="grid_8 omega">
	<li class="subitem grid_2 alpha"><a href="speaker.php">Speakers</a></li>
	<li class="subitem grid_2"><a href="index.php#schedule">Schedule</a></li>
	<li class="subitem grid_2"><a href="venue.php">Location</a></li>
	<li class="subitem grid_2 omega"><a href="form.php">Register</a></li>
</ul>
<?php } ?> <!-- About Page --> <?php if ($page == 'about') { ?>
<ul id="submenu" class="grid_6 omega suffix_2">
	<li class="subitem grid_2 alpha"><a href="about.php#aboutted">TED</a></li>
	<li class="subitem grid_2"><a href="about.php#aboutfss">TEDxFSS</a></li>
<!-- 	<li class="subitem grid_2 omega"><a href="member.php">Members</a></li> -->
</ul>
<?php } ?> <!-- Join in Page --> <?php if ($page == 'joinin') { ?>
<ul id="submenu" class="grid_8 omega">
	<li class="subitem grid_2 alpha"><a href="">Sponsor</a></li>
	<li class="subitem grid_2"><a href="">Speaker</a></li>
	<li class="subitem grid_2"><a href="">Media</a></li>
	<li class="subitem grid_2 omega"><a href="">Volunteer</a></li>
</ul>
<?php } ?> <?php if ($page == 'index') { ?>
<div id="dateflag">
<p id="date"><span>may</span></p>
<p id="day"><span>15</span></p>
<div id="flagtop"><img src="images/flagtop.png" alt="decoration"
	width="100px" /></div>
</div>
<?php } ?> <!-- Echo out the dataflag only on index.php --></div>
<!-- End of second row --></div>
<!-- End of Header -->