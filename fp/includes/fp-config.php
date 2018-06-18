<?php
/*
big-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));
// site keys
$siteKey = "6LfhZVgUAAAAABn7O_NHDWI4pNOzszXo7KYgDTHo";
$secretKey ="6LfhZVgUAAAAAHsQod-cjCBWY_EjmNvIRSfMzt0i";

switch(THIS_PAGE){

	case 'index.php':
	    $title = "Law Firm";
	    $logo = 'fa-home';
	    $PageID = 'Welcome';
	break;

	case 'about.php':
	    $title = "About Us";
	    $logo = 'fa-fa-info';
	    $PageID = 'About Us';
	break;


	case 'practice.php':
	    $title = "Practice";
	    $logo = 'fa fa-envelope';
	    $PageID = 'Practice';
	break;

	
	default:
	     $title = THIS_PAGE;
	     $logo = 'fa-home';
	     $PageID = 'Welcome';

}

?>







?>