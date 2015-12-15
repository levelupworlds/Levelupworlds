
<link href="../css/full-slider.css" rel="stylesheet">


<FORM METHOD="post" ACTION="index.php?action=create" class="admin">

Заголовок
<input size="100" placeholder="Заголовок новости" value="<?echo $subject?>" type="text" Name="subject"><br>
Текст 
<textarea Name="text" rows="30" cols="100" ><?echo$text;?></textarea><br>
<INPUT TYPE=submit VALUE="Post" >


</form>
