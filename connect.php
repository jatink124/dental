<?php
	define('db_host', 'localhost');
	define('db_user', 'jk1234');
  define('db_pass', 'jk@1234');
	define('db_name', 'newang');
	// define('db_host', 'localhost');
	// define('db_user', 'root');
	// define('db_pass', '');
	// define('db_name', 'newang');
	// define('db_host', '148.66.136.54');
	// define('db_user', 'jk1234');
  // define('db_pass', 'jk@1234');
	// define('db_name', 'newang');
	$conn = new mysqli(db_host, db_user, db_pass, db_name);
	if(!$conn){
		die("Fatal Error: Can't connect to database");
	}

?>
