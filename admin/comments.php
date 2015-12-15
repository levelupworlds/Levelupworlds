<?php 
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////
include (dirname(__FILE__) . "/config.php");
func_mysqlconnect();

if ($action == "delete")
 {
  $sql = "SELECT * FROM comments WHERE commentid='$id' AND newsid='$newsid'";
  $num = mysql_numrows(mysql_query($sql)) or die (mysql_error());
  if ($num == 0)
   {
    $message = "Comment #$id for news post #$newsid does not exist!";
   }
    else
   {
    $deleteresult = mysql_query("DELETE FROM comments WHERE commentid='$id' AND newsid='$newsid'");
    $result=mysql_query($deleteresult, $connection);
    $affected_rows=mysql_affected_rows($connection);
    echo "<script language=\"JavaScript\">window.location='archive.php?action=deletecomments&newsid=$newsid'</script>";
   }
 }
  else
 {
  if($commentname == "" || $comment == "")
   {
    echo "<center><font face=$font size=1>Error: you must fill in both name and comment fields, please go back and correct this<br><a href='javascript:history.go(-1)'>back</a>";
   }
    else
   {
    $commentposttime = date("l F j g:i a");
    $commentip = GetHostByName($REMOTE_ADDR); 
    $comment = ereg_replace('<([^>]|\n)*>', '', $comment);
    $sql = "SELECT * FROM comments WHERE newsid='$newsid' ORDER BY commentid ASC";
    $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
      while ($row = mysql_fetch_array($sql_result))
       {
        $commentid = $row["commentid"];
       }
    $commentid++;
    mysql_query ("INSERT INTO comments (comment, newsid, commentid, commentname, commentemail, commentwebsite, commentaim, commentposttime, commentip)
    VALUES ('$comment', '$newsid', '$commentid', '$commentname', '$commentemail', '$commentwebsite', '$commentaim', '$commentposttime', '$commentip')") or die ("<center><font face=$font size=1>Error: no flooding<br><a href='javascript:history.go(-1)'>back</a>");
    
echo "<script language=\"JavaScript\">window.location='archive.php?newsid=$newsid'</script>";
  
   }
 }
?>