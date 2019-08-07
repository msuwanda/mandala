<?php
	 	define('_HOST_NAME','__HOST__');
     define('_DATABASE_NAME','__DB_NAMA__');
     define('_DATABASE_USER_NAME','__DB_USER__');
     define('_DATABASE_PASSWORD','__DB_PASS__');

     $PLINK = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);

     if($PLINK->connect_errno)
     {
       die("ERROR : -> ".$PLINK->connect_error);
     }
?>
