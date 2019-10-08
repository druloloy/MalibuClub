<?php
	define('dbServer', 'localhost:3306');
	define('dbUser', 'root');
	define('dbPassword', 'druloloy');
	define('database', 'malibuclub');

	$db = mysqli_connect(dbServer,dbUser,dbPassword,database);
?>