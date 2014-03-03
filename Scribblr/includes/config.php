<?php
	/*
		This is the configuration file for the site, it contains the details on how to connect
		to the datbase, and anything else that is required globally across the whole site.
		
		It does not include the auth file for member pages as it was decided by WS to do this in 
		a seperate file as it is not needed on the public pages where as the config is
		
		- Created 03/03/2014 (WS)
	*/
	
	//Define Connection String (Host, Username, Password, Database)
	$mysqli=mysqli_connect("localhost","root","123456","scribblr");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
?>
