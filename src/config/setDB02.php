<?php
	/** database */
	$PHOST	= "__HOST__";
	$PNAME	= "__DB_NAMA__";
	$PUSER	= "__DB_USER__";
	$PPASS	= "__DB_PASS__";
	$PLINK 	= new PDO("mysql:host=".$PHOST.";dbname=".$PNAME, $PUSER, $PPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
