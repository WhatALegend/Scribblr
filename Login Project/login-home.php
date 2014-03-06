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
		  <title>Scribblr - <?= $fgmembersite->UserFullName(); ?> - Dashboard</title>
		  <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
	</head>

	<body>
		<div id='fg_membersite_content'>
			<h2>User Dashboard</h2>
				Welcome <b><?= $fgmembersite->UserFullName(); ?></b>, this is Scribblr Dashboard!

			<li><a href='change-pwd.php'>Change password</a></li>
			<li><a href='profile.php'>View My Profile</a></li>
			<li><a href='logout.php'>Logout</a></li>
		</div>
	</body>
</html>
