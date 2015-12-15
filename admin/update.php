<?php 
/////////////////////////////////
//13 news by jakez       		/
//Email: thirteen@hackermail.com/
//Website: http://www.jakez.net /
/////////////////////////////////

function func_mysqlconnect ()
 {
 global $dbname;
 global $sqlhost;
 global $sqlusername;
 global $sqlpassword;
 global $connection;
 $connection = mysql_connect("localhost", "levelup", "dqei901du890y2h");
 $db = mysql_select_db("levelupworlds");
 }

echo func_mysqlconnect();

$auth = 0; 
if (($PHP_AUTH_USER == $login ) && ($PHP_AUTH_PW == $password )) $auth = 1; 
if ( $auth != 1 ) { 
    header( "WWW-Authenticate: Basic realm=\"Authorization Required!\"" ); 
    header( "HTTP/1.0 401 Unauthorized" ); 
    echo 'Authorization Required!'; 
    exit; 
}  

$sql = "SELECT * FROM news WHERE id='$setid'";
$sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
while ($row = mysql_fetch_array($sql_result))
 {
  $subject = $row["subject"];
  $text = $row["text"];
  $id = $row["id"];
  $date = $row["date"];
 }
?>
<font size=1>
</td>
<tr>
</tr>
<td height="10" width="100%" bgcolor="#<? echo $tablebgcolor1; ?>" style='border-bottom: 1px solid #<?echo $bordercolor;?>; border-right: 1px solid #<?echo $bordercolor;?>; border-top: 1px solid #<?echo $bordercolor;?>; border-left: 1px solid #<?echo $bordercolor;?>'>
<font>
&nbsp;&nbsp;» Edit/delete news.
</td>
<tr>
<td height="10" width="100%" align=left bgcolor="#<?echo $tablebgcolor2?>" style='border-left: 1px solid #<?echo $bordercolor?>; border-right: 1px solid #<?echo $bordercolor?>; border-bottom: 1px solid #<?echo $bordercolor?>'>
<font>

<p align=left>
<FORM METHOD="post" ACTION="index.php?action=update">
<center>
subject: <Input value="<?echo $subject?>" Type=text Maxlength=100 Name="subject" Size=60 style='font-family: verdana; color:<?echo $fontcolor;?>; font-size: 8pt; background-color: <?echo $bgcolor;?>; font-weight: none; border: 1px solid #<? echo$bordercolor;?>'><Br>
body: <textarea Type=text Maxlength=200000000 Name="text" rows="30" cols="90" style='font-family: verdana; color:<?echo $fontcolor;?>; font-size: 8pt; background-color: <?echo $bgcolor;?>; font-weight: none; border: 1px solid #<? echo$bordercolor;?>'><?echo$text;?></textarea><br>
<input value="<?echo $id?>" Type=hidden Maxlength=2000 Name="id" rows="10" cols="100" style='font-family: verdana; color:<?echo $fontcolor;?>; font-size: 8pt; background-color: <?echo $bgcolor;?>; font-weight: none; border: 1px solid #<? echo$bordercolor;?>'><Br>
date: <input value="<?echo $date?>" Type=text Maxlength=2000 Name="date" size=80 style='font-family: verdana; color:<?echo $fontcolor;?>; font-size: 8pt; background-color: <?echo $bgcolor;?>; font-weight: none; border: 1px solid #<? echo$bordercolor;?>'><Br>
<INPUT TYPE=submit VALUE="Post" style='background-color: #<? echo$bgcolor;?>; font-family: verdana; color: <? echo$fontcolor;?>; font-size: 8pt; border: 1px solid #<? echo$bordercolor;?>'>
<INPUT type=reset VALUE="Reset Form" style='background-color: #<? echo$bgcolor;?>; font-family: verdana; color: <? echo$fontcolor;?>; font-size: 8pt; border: 1px solid #<? echo$bordercolor;?>'>
</form>
<br><br>
<b>Preview</b>
<br><br>
</center>
<?echo $text?>

</tr>
</td>