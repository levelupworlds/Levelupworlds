<?php 
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////
include (dirname(__FILE__) . "/config.php");
func_mysqlconnect();
include "style.php";

if($action == "deletecomments")
 {
  $auth = 0; 
  if (($PHP_AUTH_USER == $login ) && ($PHP_AUTH_PW == $password )) $auth = 1; 
  if ( $auth != 1 ) { 
      header( "WWW-Authenticate: Basic realm=\"Authorization Required!\"" ); 
      header( "HTTP/1.0 401 Unauthorized" ); 
      echo 'Authorization Required!'; 
      exit; 
  }
   echo "<table width=$tablewidth align=center cellspacing=0 cellpadding=2 border=0>";
   $sql = "SELECT * FROM news WHERE id='$newsid'";
   $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
   while ($row = mysql_fetch_array($sql_result))
    {
     $subject = $row["subject"];
     $text = $row["text"];
     $id = $row["id"];
     $date = $row["date"];
     $text = str_replace("'", "&#39;", $text);
     echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='$date' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor'><font>&nbsp;$date <a href='mailto:$email'>$name</a> says: <i>$subject</i></td></tr>\n";
     echo "<tr><td bgcolor=#$tablebgcolor2 align=justify width=100% style='BORDER-TOP: #$bordercolor 1px solid; BORDER-right: #$bordercolor 1px solid; BORDER-left: #$bordercolor 1px solid'><font><p align=justify>$text";
     echo "<hr width=50% color=#$userbordercolor><center><b>Comments</b></center><br><br>";
     echo "<table width=100%>";
     $sql = "SELECT * FROM comments WHERE newsid='$newsid' ORDER BY commentid DESC";
     $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
     while ($row = mysql_fetch_array($sql_result))
      {
       $comment = $row["comment"];
       $commentid = $row["commentid"];
       $commentname = $row["commentname"];
       $commentemail = $row["commentemail"];
       $commentwebsite = $row["commentwebsite"];
       $commentaim = $row["commentaim"];
       $commentposttime = $row["commentposttime"];
       $comment = str_replace("'", "&#39;", $comment);
       $commentaim = str_replace(" ", "+", $commentaim);
       $commentwebsite = str_replace("http://", "", $commentwebsite);
       echo "<td align=left><font><b>[<a href=comments.php?action=delete&id=$commentid&newsid=$newsid>DELETE</a>] Posted on $commentposttime by <a href=mailto:$commentemail>$commentname</a></b> - (<a href=mailto:$commentemail>email</a>) (<a href=http://$commentwebsite target=_blank>website</a>) (<a href=aim:goim?screenname=$commentaim&message=Hey.>aim</a>)</td>";
       echo "<tr></tr><td align=justify><font>$comment</td><tr></tr><tr></tr>";
      }       
     echo "</table><br><br>";
    }
   echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='Powered by 13 news' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'><font><center><a href=http://jakez.net>Powered by 13 news</a></td></tr>\n";
   echo "</tr></td></table>\n";
 }
  else
 {
  if($newsid == "")
   {
    echo "<title>News archive</title><table width=$tablewidth align=center cellspacing=0 cellpadding=2 border=0>";
    $sql = "SELECT * FROM news ORDER BY id DESC";
    $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
    while ($row = mysql_fetch_array($sql_result))
     {
      $subject = $row["subject"];
      $text = $row["text"];
      $id = $row["id"];
      $date = $row["date"];
      $text = str_replace("'", "&#39;", $text);
      echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='$date' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor'><font>&nbsp;$date <a href='mailto:$email'>$name</a> says: <i>$subject</i></td></tr>\n";
      echo "<tr><td bgcolor=#$tablebgcolor2 align=justify width=100% style='BORDER-TOP: #$bordercolor 1px solid; BORDER-right: #$bordercolor 1px solid; BORDER-left: #$bordercolor 1px solid'><font><p align=justify>$text";
     }
    echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='Powered by 13 news' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'><font><center><a href=http://jakez.net>Powered by 13 news</a></td></tr>\n";
    echo "</tr></td></table>\n";
   }
    else
   {
    echo "<title>Comments</title><table width=$tablewidth align=center cellspacing=0 cellpadding=2 border=0>";
    $sql = "SELECT * FROM news WHERE id='$newsid'";
    $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
    while ($row = mysql_fetch_array($sql_result))
     {
      $subject = $row["subject"];
      $text = $row["text"];
      $id = $row["id"];
      $date = $row["date"];
      $text = str_replace("'", "&#39;", $text);
      echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='$date' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor'><font>&nbsp;$date <a href='mailto:$email'>$name</a> says: <i>$subject</i></td></tr>\n";
      echo "<tr><td bgcolor=#$tablebgcolor2 align=justify width=100% style='BORDER-TOP: #$bordercolor 1px solid; BORDER-right: #$bordercolor 1px solid; BORDER-left: #$bordercolor 1px solid'><font><p align=justify>$text";
      echo "<hr width=50% color=#$userbordercolor><center><b>Comments</b></center><br><br>";
      echo "<table width=100%>";
      $sql = "SELECT * FROM comments WHERE newsid='$newsid' ORDER BY commentid DESC";
      $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
      while ($row = mysql_fetch_array($sql_result))
       {
        $comment = $row["comment"];
        $commentname = $row["commentname"];
        $commentemail = $row["commentemail"];
        $commentwebsite = $row["commentwebsite"];
        $commentaim = $row["commentaim"];
        $commentposttime = $row["commentposttime"];
        $comment = str_replace("'", "&#39;", $comment);
        $commentaim = str_replace(" ", "+", $commentaim);
        $commentwebsite = str_replace("http://", "", $commentwebsite);
        echo "<td align=left><font><b>Posted on $commentposttime by <a href=mailto:$commentemail>$commentname</a></b> - (<a href=mailto:$commentemail>email</a>) (<a href=http://$commentwebsite target=_blank>website</a>) (<a href=aim:goim?screenname=$commentaim&message=Hey.>aim</a>)</td>";
        echo "<tr></tr><td align=justify><font>$comment</td><tr></tr><tr></tr>";
       }       
      echo "</table><br><br>";
      echo "<table width=300 align=center><td align=left><font><FORM METHOD='post' ACTION='comments.php?newsid=$id'>Name:<br><Input Type=text Maxlength=300 Name='commentname' Size=20 style='font-family: verdana; color: #$fontcolor; font-size: 8pt; background-color: #$bgcolor; font-weight: none; border: 1px solid #$bordercolor'><br>";
      echo "Email:<br><Input Type=text Maxlength=30 Name='commentemail' Size=20 style='font-family: verdana; color: #$fontcolor; font-size: 8pt; background-color: #$bgcolor; font-weight: none; border: 1px solid #$bordercolor'><br>";
      echo "Website:<br><Input Type=text Maxlength=30 Name='commentwebsite' Size=20 style='font-family: verdana; color: #$fontcolor; font-size: 8pt; background-color: #$bgcolor; font-weight: none; border: 1px solid #$bordercolor'><br>";
      echo "Aim:<br><Input Type=text Maxlength=30 Name='commentaim' Size=20 style='font-family: verdana; color: #$fontcolor; font-size: 8pt; background-color: #$bgcolor; font-weight: none; border: 1px solid #$bordercolor'><br>";
      echo "Comment:<br><textarea Type=text Maxlength=2000 Name='comment' rows=10 cols=50 style='font-family: verdana; color: #$fontcolor; font-size: 8pt; background-color: #$bgcolor; font-weight: none; border: 1px solid #$bordercolor'></textarea><br><br>";
      echo "<center><INPUT TYPE=submit VALUE='Post' style='background-color: #$bgcolor; font-family: verdana; color: #$fontcolor; font-size: 8pt; border: 1px solid #$bordercolor'> <INPUT TYPE=reset VALUE='Reset' style='background-color: #$bgcolor; font-family: verdana; color: #$fontcolor; font-size: 8pt; border: 1px solid #$bordercolor'></center></form></td></table></td></tr>";
     }
    echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='Powered by 13 news' style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'><font><center><a href=http://jakez.net>Powered by 13 news</a></td></tr>\n";
    echo "</tr></td></table>\n";
 
   }
  }
?>