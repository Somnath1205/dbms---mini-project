<?php
session_start();
$noBooks = $_SESSION['noOfBooks'];
$message = 'You currently have borrowed '.$noBooks.' books out of 7.';
?>
<HTML>
<TITLE>
FICTION
</TITLE>
<HEAD>
<SCRIPT type="text/javascript"/>
</SCRIPT>
</HEAD>
<BODY>
<form action="BookAdd.php" method="post">
<A href="Gallery.php"><img id="Head" border="0" height="131" src="images/header_bg.png"></A>
<span><input type="submit" name="btn_logout" value="Logout" style="font-family:Garamond;font-size:20px;"></span>
<FONT color="Brown"><H2><?php echo $message; ?></H2></FONT>
<Font color="Brown"><H2>English</H2></FONT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_1" border="0" height="260" width="170" src="images/Fiction3.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_2" border="0" height="260" width="170" src="images/Fiction_3.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_8" border="0" height="260" width="170" src="images/fic1.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_4" border="0" height="260" width="170" src="images/Fiction_5.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_5" border="0" height="260" width="170" src="images/Fiction_7jpg.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br/><FONT color="Brown"><H1>    </H1><FONT>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>

<br/><FONT color="Brown"><H1>    </H1><FONT>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_6"border="0"height="260"width="170"src="images/Fiction14.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_7" border="0" height="260" width="170" src="images/Fiction13.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_3" border="0" height="260" width="170" src="images/Fiction_4.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_9" border="0" height="260" width="170" src="images/Fiction11.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_10" border="0" height="260" width="170" src="images/Fiction10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br/><FONT color="Brown"><H1>  </H1><FONT>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>

<br/><FONT color="Brown"><H1>    </H1><FONT>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_11" border="0" height="260" width="170" src="images/Fictional9.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_12" border="0" height="260" width="170" src="images/Fiction8.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_13" border="0" height="260" width="170" src="images/Fiction7.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_14" border="0" height="260" width="170" src="images/n1.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img id="Fiction_15" border="0" height="260" width="170" src="images/ficLast.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br/><FONT color="Brown"><H1>    </H1><FONT>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><input type="submit" name="btn_add" value="Add" style="font-family:Garamond;font-size:20px;"></span>
<span><input type="submit" name="btn_delete" value="Delete" style="font-family:Garamond;font-size:20px;"></span>

<br/><FONT color="Brown"><H1>    </H1><FONT>


</form>
</BODY>
</HTML>