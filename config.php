<?php

error_reporting(0);

// db bits here
include_once("db_connect.php");

// site details
$site_name  = "Your Site Name";             // site name/title
$site_url   = "www.yourdomain.com";    // site url. Lowercase. Including the www. Remove any ending forward slash '/'. i.e. 'mysitename.com'.
$site_admin = "info@yourdomain.com";        // email address used for the contact page

// other bits
$default_header = "Over 22,000 free recipes online now!";  // used a default title text when one is not set
$logo_slogan    = "Over 22,000 free recipes online now!";  // shown beneath the main logo

//DO NOT MODIFY THE LINE BELOW
include_once("function-library.php");

?>