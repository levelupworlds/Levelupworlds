<?php 
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////

$auth = 0; 
if (($PHP_AUTH_USER == $login ) && ($PHP_AUTH_PW == $password )) $auth = 1; 
if ( $auth != 1 ) { 
    header( "WWW-Authenticate: Basic realm=\"Authorization Required!\"" ); 
    header( "HTTP/1.0 401 Unauthorized" ); 
    echo 'Authorization Required!'; 
    exit; 
} 
?>
</td>
<tr>
</tr>
<td height="10" width="100%" bgcolor="#<? echo $tablebgcolor1; ?>" style='border-bottom: 1px solid #<?echo $bordercolor;?>; border-right: 1px solid #<?echo $bordercolor;?>; border-top: 1px solid #<?echo $bordercolor;?>; border-left: 1px solid #<?echo $bordercolor;?>'>
<font>
&nbsp;&nbsp;» Edit/delete news.
</td>
<tr>
</tr>
</table>
<table width=600 align=center cellspacing=0 cellpadding=2 border=0>
<td height="10" width="10%" align=left bgcolor="#<?echo $tablebgcolor1?>" style='border-top: 1px solid #<?echo $bordercolor?>; border-left: 1px solid #<?echo $bordercolor?>; border-right: 1px solid #<?echo $bordercolor?>; border-bottom: 1px solid #<?echo $bordercolor?>'>
<font>
Delete
</td>
<td height="10" width="10%" align=left bgcolor="#<?echo $tablebgcolor1?>" style='border-top: 1px solid #<?echo $bordercolor?>; border-right: 1px solid #<?echo $bordercolor?>; border-bottom: 1px solid #<?echo $bordercolor?>'>
<font>
ID
</td>
<td height="10" width="50%" align=left bgcolor="#<?echo $tablebgcolor1?>" style='border-top: 1px solid #<?echo $bordercolor?>; border-right: 1px solid #<?echo $bordercolor?>; border-bottom: 1px solid #<?echo $bordercolor?>'>
<font>
Subject
</td>
<td height="10" width="50%" align=left bgcolor="#<?echo $tablebgcolor1?>" style='border-top: 1px solid #<?echo $bordercolor?>; border-right: 1px solid #<?echo $bordercolor?>; border-bottom: 1px solid #<?echo $bordercolor?>'>
<font>
Date
</td>
<tr>
</tr>
<?php
$sql = "SELECT * FROM news ORDER BY id DESC";
$sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
while ($row = mysql_fetch_array($sql_result))
 {
  $subject = $row["subject"];
  $text = $row["text"];
  $id = $row["id"];
  $date = $row["date"];
  echo "<td height=10 width=10% align=left bgcolor=#$tablebgcolor2 style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'>
<font>
<a href='?action=delete&id=$id' alt='You cannot undo this!'>Delete?</a>
</td>
<td height=10 width=10% align=left bgcolor=#$tablebgcolor2 style='border-top: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'>
<font>
$id
</td>
<td height=10 width=50% align=left bgcolor=#$tablebgcolor2 style='border-top: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'>
<font>
<a href='?page=update&setid=$id'>$subject</a>
</td>
<td height=10 width=50% align=left bgcolor=#$tablebgcolor2 style='border-top: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'>
<font>
$date
</td>
<tr>
</tr>";
 }
echo "</td></table>";
echo "<table width=600 align=center cellspacing=0 cellpadding=2 border=0>";
    mysql_free_result($sql_result) or die ("<font face=verdana>Error: ".mysql_error());
    mysql_close($connection) or die ("<font face=verdana>Error: ".mysql_error());
?>