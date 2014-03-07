<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php#login");
    exit;
}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Scribblr - User Dashboard</title>
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
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#dashboard" class="fa fa-dashboard active"><span>Home</span></a>
						<a href="logout.php" class="fa fa-power-off"><span>Logout</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="dashboard" class="panel">
								<header>
									<h2>My Dashboard</h2>
								</header>
								<section>
									<p>Welcome <b><?= $fgmembersite->UserFullName(); ?></b>, this is Scribblr Dashboard!</p>
									| <a href='change-pwd.php'>Account Settings</a> | <a href='profile.php'>My Profile</a>  |
								</section>
							</article>
					</div>
					

		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; Jane Doe</li>
							<li>Images : <a href="#">Midway Production</a></li>
							<li>Design : <a href="#">Midway Production</a></li>
						</ul>
					</div>
		
			</div>

	</body>
</html>