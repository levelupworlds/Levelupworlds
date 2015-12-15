<?

// Скрипт проверки


# Соединямся с БД

header('Content-Type: text/html; charset= utf-8');

$login = "admin";                         //Name to use when logging into the news system
$password = "aerono";                      //Password to the name above
$dbname = "levelupworlds";                      //Mysql database name where 13 news is
$sqlhost = "localhost";                  //Host name for mysql (Usually 'localhost')
$sqlusername = "levelup";                 //Username for the mysql database
$sqlpassword = "dqei901du890y2h";                 //Password to the mysql database


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


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))

{   

    $query = mysql_query("SELECT *,INET_NTOA(user_ip) FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");

    $userdata = mysql_fetch_assoc($query);


    if(($userdata['user_hash'] == $_COOKIE['hash']) && ($userdata['user_id'] == $_COOKIE['id'])) {

       setcookie("id", "", time() - 3600*24*30*12, "/");

        setcookie("hash", "", time() - 3600*24*30*12, "/");
?>
        <html>

<body>
<table width=600 align=center cellspacing=0 cellpadding=2 border=0>
<td height="10" width="100%" bgcolor="#<? echo $tablebgcolor1; ?>" style='border-bottom: 1px solid #<?echo $bordercolor;?>; border-right: 1px solid #<?echo $bordercolor;?>; border-top: 1px solid #<?echo $bordercolor;?>; border-left: 1px solid #<?echo $bordercolor;?>'>
<font>
<b>News control panel</b>
</td>
<?
if ($action == "update")
 {
  $sql = "SELECT * FROM news WHERE id='$id'";
  $num = mysql_numrows(mysql_query($sql));
  if ($num == 0)
   {
    $message = "News post #$id does not exist!";
   }
    else
   {
    $sql = "UPDATE news SET text='$text', subject='$subject', date='$date' WHERE id LIKE '$id'";
    $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
    $message = "News updated successfully!";
   }
 }


if ($action == "create")
 {
  $sql = "SELECT * FROM news WHERE id='$id'";
  $num = mysql_numrows(mysql_query($sql));
  if ($num == 0)
   {
    $date = date("l F j g:i a");
    $sql = "SELECT * FROM news ORDER BY id ASC";
    $sql_result = mysql_query($sql) or die ("<font face=verdana>Error: ".mysql_error());
     while ($row = mysql_fetch_array($sql_result))
      {
       $id = $row["id"];
      }
    $id++;
    mysql_query("INSERT INTO news (subject, text, id, date)
    VALUES ('$subject', '$text', '$id', '$date')") or die ("<font face=verdana>Error: ".mysql_error());
    $message = "News posted successfully!";
   }
    else
   {
    $message = "News post #$id already exists!";
   }
 }


if ($action == "delete")
 {
  $sql = "SELECT * FROM news WHERE id='$id'";
  $num = mysql_numrows(mysql_query($sql));
  if ($num == 0)
   {
    $message = "News post #$id does not exist!";
   }
    else
   {
    $deleteresult = mysql_query("DELETE FROM news WHERE id = $id");
    $result=mysql_query($deleteresult, $connection);
    $affected_rows=mysql_affected_rows($connection);
    $deleteresult = mysql_query("DELETE FROM comments WHERE newsid = $id");
    $result=mysql_query($deleteresult, $connection);
    $affected_rows=mysql_affected_rows($connection);
    $message = "News post #$id was deleted successfully!";
   }
 }

if ($page == "")
 {
  $connection = func_mysqlconnect();
  mysql_select_db($dbname);
  $sql = "SELECT id FROM news";
  $num = mysql_numrows(mysql_query($sql));
  $newstotal = $num;
  $sql = "SELECT commentid FROM comments";
  $num = mysql_numrows(mysql_query($sql));
  $commentstotal = $num;
  if($newstotal == "1"){$a = "is"; $b = "post";}else{$a = "are"; $b = "posts";}
  if($commentstotal == "1"){$c = "comment";}else{$c = "comments";}
  echo "<tr>
  </tr>
  <td height=10 width=100% align=left bgcolor=#$tablebgcolor2 style='border-left: 1px solid #$bordercolor; border-right: 1px solid #$bordercolor; border-bottom: 1px solid #$bordercolor'>
  <font>
  <p align=left>
  <center>There $a <b>$newstotal</b> news $b and <b>$commentstotal</b> $c<br> $message</center><br>
  <p align=left>
  <b>Options</b>:<br>
  <a href=?page=editnews>Edit/delete news<a><br>
  <a href=?page=deletecomments>Delete comments<a><br>
  <a href=?page=newsform>Create news<a><br>
  <a href=news.php target=_blank>View news<a><br>
  <a href=archive.php target=_blank>View news archive<a><br>
  </td>
  ";
 }
  else
 {
  if(file_exists("$page.php"))
   {
    include "$page.php";
   }
    else
   {
    echo "$page.php does not exist!";
   }
 }
?>


</table>

</html>

<?php }

    else

    { 

       header("Location: auth.php"); exit();

    }

}

else

{

   
echo "Включите Cookie";

}

?>