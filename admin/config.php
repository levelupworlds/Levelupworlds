<?php
/////////////////////////////////
//13 news by jakez		        /
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////
//SETTINGS
$scripturl = "http://yoursite.com/news"; //The URL to this script (No trailing slash)
$login = "admin";                         //Name to use when logging into the news system
$password = "aerono";                      //Password to the name above
$dbname = "levelupworlds";                      //Mysql database name where 13 news is
$sqlhost = "localhost";                  //Host name for mysql (Usually 'localhost')
$sqlusername = "levelup";                 //Username for the mysql database
$sqlpassword = "dqei901du890y2h";                 //Password to the mysql database
$linkcolor = "656565";                   //Color of the links in the news
$fontcolor = "000000";                   //Color of the font in the news
$tablebgcolor1 = "8F98A0";               //Background color of the news title table
$tablebgcolor2 = "D6D6D6";               //Background color of the news body table
$bordercolor = "003060";                 //Color of the tables borders
$bgcolor = "D1D6DB";                     //Background color of the news page
$newsnum = "2";                          //Number of news items to show on the news page
$email = "you@email.com";                //Your email address
$name = "name";                          //Your name
$font = "verdana";                       //Font to use in the news
$fontsize = "8";                         //Size of the font to use in the news
$tablewidth = "600";                     //Width of the news table
$commentwidth = "650";                   //Width of the comments window
$commentheight = "420";                  //Width of the comments window

//Connects to the database, do not edit this
function func_mysqlconnect ()
 {
 global $dbname;
 global $sqlhost;
 global $sqlusername;
 global $sqlpassword;
 global $connection;
 $connection = mysql_connect($sqlhost,$sqlusername,$sqlpassword) or die ("<font face=verdana>Error: ".mysql_error());
 $db = mysql_select_db($dbname) or die ("<font face=verdana>Error: ".mysql_error());
 }
?>