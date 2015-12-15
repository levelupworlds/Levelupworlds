<?php
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////
include (dirname(__FILE__) . "/config.php");
func_mysqlconnect();
include "style.php";
?>
<script language="JavaScript">
<!--
function errorSafe() {return true;}
window.onerror = errorSafe;

function newWin(url,name,rs,sc,mn,tl,lo,wd,hi) {
openWindow = window.open(url,name,'resizable='+rs+',scrollbars='+sc+',menubar='+mn+',toolbar='+tl+',location='+lo+',width='+wd+',height='+hi);}
name.window="menu"
function open_window(url) {
email = window.open(url,"","toolbar=no,location=center,directories=0,status=no,menubar=0,scrollbars=yes,resizable=no,width=<? echo $commentwidth;?>,height=<? echo $commentheight;?>");
}
//-->
</SCRIPT>
<?php 
echo "<table style='border-top: 1px solid #$bordercolor' width=$tablewidth align=center cellspacing=0 cellpadding=2 border=0>";
$sql = "SELECT * FROM news ORDER BY id DESC LIMIT 0, $newsnum";
$sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
while ($row = mysql_fetch_array($sql_result))
 {
  $subject = $row["subject"];
  $text = $row["text"];
  $id = $row["id"];
  $date = $row["date"];
  $text = str_replace("'", "&#39;", $text);
  $sql = "SELECT * FROM comments WHERE newsid='$id'";
  $commentsnum = mysql_numrows(mysql_query($sql));
  echo "<tr><td bgcolor=#$tablebgcolor1 align=left width=100% title='$date' style='border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor'><font>&nbsp;$date <a href='mailto:$email'>$name</a> says: <i>$subject</i></td></tr>\n";
  echo "<tr><td bgcolor=#$tablebgcolor2 align=justify width=100% style='BORDER-TOP: #$bordercolor 1px solid; BORDER-right: #$bordercolor 1px solid; BORDER-left: #$bordercolor 1px solid'><font><p align=justify>$text<br><br><p align=right><A HREF=javascript:open_window('archive.php?newsid=$id')>Comments($commentsnum)</a></center>";
 }
echo "<tr></tr><td bgcolor=#$tablebgcolor1 align=center width=100% style='border-top: 1px solid #$bordercolor; border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'><font><center><a href=http://jakez.net>Powered by 13 news</a> - <a href=$scripturl/archive.php target=_blank>Archive</a></td></tr>\n";
echo "</td></table>\n";
?>