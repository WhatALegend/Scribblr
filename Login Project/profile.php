<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Scribblr - <?= $fgmembersite->UserFullName(); ?> - Profile Page</title>
		<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
		<!-- bootstrap -->
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>  
		<!-- x-editable (bootstrap version) -->
		<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"/>
		<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/js/bootstrap-editable.min.js"></script>
		<script src="scripts/profile.js"></script>
	</head>
	
	<body>
		<div id='fg_membersite_content'>
			<h2>My Profile</h2>
			<li><a href='login-home.php'>Home</a></li>
			<li><a href='profile.php'>View My Profile</a></li>
			<li><a href='logout.php'>Logout</a></li>
		
			<p>Click on any of your details in your profile if you wish to update them.</p>
		
		      <div>
				<span>Username:</span>
				<a href="#" id="username" data-type="text" data-placement="right" data-title="Enter username">TestUser1</a>
			</div>
			<br>
			<div>
				<span>Full Name:</span>
				<a href="#" id="fullname" data-type="text" data-placement="right" data-title="Enter Fullname">Mr Test User</a>
			</div>
			<br>
			<div>
				<span>Location:</span>
				<a href="#" id="location" data-type="text" data-placement="right" data-title="Enter Your Location">Spain</a>
			</div>
			<br>
			<div>
				<span>Email:</span>
				<a href="#" id="email" data-type="text" data-placement="right" data-title="Enter Email Address">test.user@googlemail.com</a>
			</div>
			
			
		</div>
	</body>
</html>