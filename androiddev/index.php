<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Android Development - Kenneth Solans</title>
		<link rel="shortcut icon" href="../favicon.png">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.2.min.css">
		<link rel="stylesheet" href="../_assets/css/jqm-kms.css">
		<script src="../js/jquery.js"></script>
		<script src="../_assets/js/index.js"></script>
		<script src="../js/jquery.mobile-1.4.2.min.js"></script>
	</head>
	<body>
		<!-- Google Analytics include -->
		<?php include_once("../analyticstracking.php") ?>
		<!-- /GA -->
		<div data-role="page" class="jqm-kms" data-quicklinks="true">
			<div data-role="header" class="jqm-header">
				<h2><a href="../" title="Kenneth Solans home">Kenneth Solans</a></h2>
				<p>Android Development</p>
				<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
			</div>
			<!-- /header -->
			<!-- main content -->
			<div role="main" class="ui-content jqm-content">
				<h1>The Fastest Growing OS</h1>
				<p>In 2011 I decided to expand my skills to include programming for smartphones. I saw the impact that mobile was having on the world and chose Android as my platform to build on.</p>
				<h2>The First Application</h2>
				<div class="ui-grid-a ui-responsive">
					<div class="ui-block-a">
						<div class="jqm-block-content-clear">
							<p>First came the idea for an application. Since a passion of mine is going to music festivals, I decided to create an app that would help solve a simple problem for Lollapalooza 2011. Who is playing right now and who is playing next.</p>
							<p>Once I had the idea of what I wanted to build, I had to learn the language needed to program and Android application. Android is built on Java, a language I had never developed in before. Over the next two weeks I taught myself the basics of Java and started building my app. During those couple weeks Lollapalooza announced a competition through <a href="http://hacklolla2011.challengepost.com/" target="_blank">ChallengePost</a> for the best application using their API.</p>
							<p>Once I had the structure of the application and the scheduling information from the API, I decided to solve another issue common to a user at Lollapalooza. The phone network on the festival grounds is usually slow or non-existent due to the sheer number of people with phones in the park over the weekend. I knew trying to access the API through the network at the show would be slow and drain the users battery. So I took the schedule from the API and created a json file to installed inside the application. I used the devices clock to compare set times and display the information needed. This way the user could put their phone in Airplane Mode and still be able to get the information they needed.</p>
							<p>In under four months I was able to learn enough of a new programming language to not only build an application, but also <a href="http://www.prweb.com/releases/2011/7/prweb8639822.htm" target="_blank" title="HackLolla 2011 Winners Press Release">win an award for it</a>. <a href="https://play.google.com/store/apps/details?id=wnwn.lollapalooza2011" target="_blank">Who's Now Who's Next</a> showed that an app focused on a single event was something people wanted.</p>
						</div>
					</div>
					<div class="ui-block-b">
						<div class="jqm-block-content-clear">
							<img src="../_assets/img/whosnext.jpg">
						</div>
					</div>
				</div>
				<h2>Android in the World Today</h2>
				<div class="jqm-block-content-clear">
					<p>In 2013 the Android OS was used on 79% of all smartphones worldwide. This is due to the variety of devices a user can get that runs on the OS. Since Android is built by Google, it also seamlessly integrates with your Google account allowing for a complete and customizable experience for the user.</p>
					<p>But the Android OS is not longer limited to just smartphones. Google Glass, Android Wear and Google Chromecast all use the OS. With all these options, plus Google's continuing innovation, having an Android developer on your team is a necessity for every development firm.</p>
					
					
				</div>
				<a href="#ui-page-top" class="jqm-deeplink ui-icon-carat-u ui-alt-icon">Top</a>
			</div>
			<!-- /main content -->
			<!-- Menu -->
			<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
				<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
					<li data-filtertext="KMS Ken Kenneth Solans home homepage" data-icon="home" class="ui-first-child"><a href=".././">Home</a></li>
					<li data-filtertext="Web Development"><a href="../webdev/" data-ajax="false">Web Development</a></li>
					<li data-filtertext="Android Development Mobile Apps Java"><a href="../androiddev/" data-ajax="false">Android Development</a></li>
					<li data-filtertext="Social Media"><a href="../socialmedia/" data-ajax="false">Social Media</a></li>
					<li data-filtertext="Resume Experience Projects"><a href="../resume/" data-ajax="false">Resume</a></li>
					<li data-filtertext="Contact"><a href="../contact/" data-ajax="false">Contact</a></li>
				</ul>
			</div>
			<!-- /Menu -->
			<!-- Footer -->
			<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
				<p>Kenneth M Solans</p>
				<p>Copyright 2014 Kenneth M Solans</p>
			</div>
			<!-- /Footer -->
			<!-- Google Analytics -->
			<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-50300740-1', 'ksolans.com');
			ga('send', 'pageview');
			</script>
			<!-- /GA -->
		</body>
	</html>