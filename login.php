<?php
	session_start();

	if(isset($_SESSION['email']))
	{
		$message='User already logged in';
	}

	$host="localhost";
	$dbuser="root";
	$dbpwd="";
	$dbname="bookdb";

    $email = $_POST["email"];
    $password = $_POST["password"];
	//echo($email);
	//echo($password);

    if (empty($email) || empty($password))
    {
	echo '<script> alert("Please enter your details") </script>';
    }

    else
    {
    	try
    	{
	    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpwd);
	    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully";
	}
	catch(PDOException $e)
	{
	    echo "Connection failed: ".$e->getMessage();
	}
        
	$sql = $dbh->prepare("SELECT user,email, pwd FROM members WHERE email = :email AND pwd = :password");
	
	$sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':password', $password, PDO::PARAM_STR);
	
	$sql->execute();
	
	$email1 = $sql->fetchColumn();
	//echo($email1);
        if($email1 == false)
        {
                echo '<script> alert("Email ID or Password is incorrect :(") </script>';
        }

        else
	{
		echo "All Done";
		$_SESSION['user_id'] = $email1;
		print_r($_SESSION['user_id']);
		header("Location: Gallery.php");
        }
    }


?>
