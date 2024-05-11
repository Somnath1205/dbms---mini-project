<?php
session_start();
	
	$host="localhost";
	$dbuser="root";
	$dbpwd="";
	$dbname="bookdb";
    
    	try
    	{
	    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpwd);
	    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully";
		//print_r($_SESSION['user_id']);
		$userName = $_SESSION['user_id'];
	$sql = $dbh->prepare("SELECT BookNo FROM members where user = :userName" );
	$sql->bindParam(':userName', $userName, PDO::PARAM_STR);
	
	$sql->execute();
	$noBooks = $sql->fetchColumn();
	//echo($noBooks);
        if($noBooks < 0)
        {
                echo '<script> alert("Information is incorrect :(") </script>';
        }

        else
	{
		//echo "All Done";
		$_SESSION['noOfBooks'] = $noBooks;
		$message = 'You currently have borrowed '.$noBooks.' books out of 7.';
		//print_r($_SESSION['noOfBooks']);
		//header("Location: ad.html");
        }
	}
	catch(PDOException $e)
	{
	    echo "Connection failed: ".$e->getMessage();
	}
$conn = null;
?>

<HTML>
<TITLE>
YOUR Gallery
</TITLE>
<HEAD>
<SCRIPT type="text/javascript"/>
</SCRIPT>
</HEAD>
<BODY>

<FORM action="log_out.php" method="post">
<A href="Gallery.php"><img id="Head" border="0" height="131" src="images/header_bg.png"></A>
<input type="submit" value="Logout" style="font-family:Garamond;font-size:20px;">
<FONT color="Brown"><H2><?php echo $message; ?></H2></FONT>



<Font color="Brown"><H2>English</H2></FONT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Fiction.php"><img id="Book5" border="0" height="260" width="170" src="images/TN_Fiction.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="NonFiction.php"><img id="Book1" border="0" height="260" width="170" src="images/TN_NonFiction.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Children.php"><img id="Book6" border="0" height="260" width="170" src="images/TN_Children.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Fun.php"><img id="Book2" border="0" height="260" width="170" src="images/TN_Fun.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Academic.php"><img id="Book3" border="0" height="260" width="170" src="images/TN_Academic.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br/><FONT color="Brown"><H2>Marathi</H2><FONT>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="MFiction.php"><img id="MBook1" border="0" height="260" width="170" src="images/MTN_Fiction.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="MNonFiction.php"><img id="MBook2" border="0" height="260" width="170" src="images/MTN_NonFiction.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="MChildren.php"><img id="MBook6" border="0" height="260" width="170" src="images/MTN_Children.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Natak.php"><img id="MBook4" border="0" height="260" width="170" src="images/MTN_Natak.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="Poetry.php"><img id="MBook5" border="0" height="260" width="170" src="images/MTN_Poetry.png"></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FORM>
</BODY>
</HTML>