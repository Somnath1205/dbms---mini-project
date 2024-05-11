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

	if (isset($_POST['btn_add'])) 
	{

		//print_r($_SESSION['noOfBooks']);
	$noOfBooks = $_SESSION['noOfBooks'] + 1;
	$userName = $_SESSION['user_id'];
	//echo($noOfBooks);
		if($noOfBooks > 7)
		{
			echo '<script> alert("You cannot borrow more than 7 books") </script>';
			//window.location.href="Gallery.php"
		}
	
		else
		{
			$sql = $dbh->prepare("UPDATE members SET BookNo = :noOfBooks  WHERE user = :userName" );
			$sql->bindParam(':noOfBooks', $noOfBooks, PDO::PARAM_STR);
			$sql->bindParam(':userName', $userName, PDO::PARAM_STR);
	
			$sql->execute();

			$_SESSION['noOfBooks'] = $noOfBooks;
			header("Location: Gallery.php");
		}
	}
	else if(isset($_POST['btn_delete']))
	{
		$noOfBooks = $_SESSION['noOfBooks'] - 1;
		$userName = $_SESSION['user_id'];
		//echo($noOfBooks);
		if($noOfBooks < 0)
		{
			header("Location: Gallery.php");
		}
	
		else
		{
			$sql = $dbh->prepare("UPDATE members SET BookNo = :noOfBooks  WHERE user = :userName" );
			$sql->bindParam(':noOfBooks', $noOfBooks, PDO::PARAM_STR);
			$sql->bindParam(':userName', $userName, PDO::PARAM_STR);
	
			$sql->execute();

			$_SESSION['noOfBooks'] = $noOfBooks;
			header("Location: Gallery.php");
		}
	}
	else
	{
		header("Location: log_out.php");
	}
	}
	catch(PDOException $e)
	{
	    echo "Connection failed: ".$e->getMessage();
	}
$conn = null;
?>