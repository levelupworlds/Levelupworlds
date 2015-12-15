<?php
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////
include (dirname(__FILE__) . "/config.php");
func_mysqlconnect();

$sql = 'CREATE TABLE `news` ( 
`subject` VARCHAR( 255 ) NOT NULL, 
`text` TEXT NOT NULL, 
`id` VARCHAR( 255 ) NOT NULL, 
`date` VARCHAR( 255 ) NOT NULL, 
PRIMARY KEY ( `id` )
)'; 
mysql_query( $sql, $connection ) or die ("<font face=verdana>Error installing tables, please make sure you have set the correct information in config.php: ".mysql_error()); 
echo "Successfully created table 'news'!<br>"; 


$sql = 'CREATE TABLE `comments` ( 
`comment` TEXT NOT NULL, 
`newsid` VARCHAR( 255 ) NOT NULL, 
`commentid` VARCHAR( 255 ) NOT NULL, 
`commentname` VARCHAR( 255 ) NOT NULL, 
`commentemail` VARCHAR( 255 ) NOT NULL, 
`commentwebsite` VARCHAR( 255 ) NOT NULL, 
`commentaim` VARCHAR( 255 ) NOT NULL, 
`commentposttime` VARCHAR( 255 ) NOT NULL, 
`commentip` VARCHAR( 255 ) NOT NULL, 
PRIMARY KEY ( `commentposttime` )
)'; 
mysql_query( $sql, $connection ) or die ("<font face=verdana>Error installing tables, please make sure you have set the correct information in config.php: ".mysql_error()); 
echo "Successfully created table 'comments'!"; 
?>