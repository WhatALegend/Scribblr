$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('#username').editable();
	
	//make full name editable   
	$('#fullname').editable();
	
	//make  email editable
	$('#email').editable();	
    
	//make location editable
	$('#location').editable();	
});