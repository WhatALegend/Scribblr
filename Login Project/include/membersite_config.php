<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Sitename being defined
$fgmembersite->SetWebsiteName('Scribblr');

//Email address for admin emails
$fgmembersite->SetAdminEmail('admin@scribblr.com');

//DB connection (host, username, password, database, table)
$fgmembersite->InitDB('localhost','root','','scribblr','users');

//For better security. Random string from this link: http://tinyurl.com/randstr
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>