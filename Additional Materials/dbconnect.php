<?php

// Default to localhost values.
$host = "localhost";
$port = "8889"; // If 8889 doesn't work, try 3306.
$user = "root";
$pw = "root";
$dbname = "ecommerce";

// If we're on the PBCS server, use server values.
if (gethostname() == "server.pbcs.us") {
	$host = "localhost";
	$port = "3306";
	$user = "YOUR_CPANEL_NAME";
	$pw = "YOUR_CPANEL_PASSWORD";
	// The $dbname is usually YOUR_CPANEL_NAME
	// followed by an _ and then the dbname.
        // CPANEL user names are truncated to 8.
	$dbname = "YOUR_PBCS_DB_NAME";
}

// Make a connection string by concatenating the parts.
$connection_info = 
	"mysql"
    . ": host=" . $host 
    . ": " . $port
    . "; dbname=" . $dbname
    ;

// Connect with the appropriate credentials.
$db = new PDO( $connection_info, $user, $pw );
