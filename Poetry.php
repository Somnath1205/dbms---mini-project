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
<Font color="Brown"><H2>Marathi</H2></FONT>
<Font color="Brown"><H2>Coming soon...</H2></FONT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</form>
</BODY>
</HTML>