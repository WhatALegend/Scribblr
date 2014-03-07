<!DOCTYPE HTML>
<html>
	<head>
		<title>Scribblr - A Place For Writers</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/noscript.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--HTML Video Player-->
			<link href="http://vjs.zencdn.net/4.4/video-js.css" rel="stylesheet">
			<script src="http://vjs.zencdn.net/4.4/video.js"></script>
			<style type="text/css">
			  .vjs-default-skin { color: #6c88d1; }
			</style>
		<!--End of Video Player-->
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#home" class="fa fa-home active"><span>Home</span></a>
						<a href="#about" class="fa fa-info"><span>About</span></a>
						<a href="#login" class="fa fa-key"><span>Login</span></a>
						
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- home -->
							<article id="home" class="panel">
								<header>
									<h1>Scribblr</h1>
									<span class="byline">A Social Experiment In Imagination</span>
								</header>
								<a href="#about" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>About Scribblr</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- About --> 
							<article id="about" class="panel">
								<header>
									<h2>About Scribblr</h2>
								</header>
								<p>
									Scribblr is a place for the creative, by the creative. Here at Scribblr we like to be different, we believe in creativity and community and ultimatly the power of teamwork.
								</p>
								<p>
									The idea is simple, use a community to create great works of fiction, start your own story with a title and an opening paragraph, then open it up to the rest of the community. Users are then given the chance to submit the rest of the story, these posts are then voted on and the winning paragraphs are added. 
									This will hopefully then lead us to some great work of fictions written by many people, and outcomes and plot developed in a demographic way via the voting system.
								</p>
								
								<h2>Video Example</h2>
								<section class="is-gallery">
								<center>
									<br><br>
									<video id="my_video_1" class="video-js vjs-default-skin" controls
									 preload="auto" width="640" height="264" poster="video/video-poster.jpg"
									 data-setup="{}">
									 <source src="video/my_video.mp4" type='video/mp4'>
									 <source src="video/my_video.webm" type='video/webm'>
									</video>
								</center>
								</section>
							</article>

						<!-- Login-->
						<?php require_once ('login.php'); ?>
					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; Scribblr 2014</li>
							<li>Images : <a href="#">Midway Production</a></li>
							<li>Design : <a href="#">Midway Production</a></li>
						</ul>
					</div>
		
			</div>

	</body>
</html>