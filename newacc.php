<?php
	$host="localhost";
	$dbuser="root";
	$dbpwd="";
	$dbname="bookdb";

    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $user = $_POST["user"];
    $pwd = $_POST["pwd"];
    $rpwd = $_POST["rpwd"];
    $bn = 0;
    $captcha = $_POST["captcha"];
    
    if (empty($name) || empty($email) || empty($password) || empty($user) || empty($pwd) || empty($rpwd) || empty($captcha))
    {
	$msg = "Please enter your details";
	$_SESSION['Message'] = $msg;
	header("Location: NewAcc.html");
    }
    if ($pwd != $rpwd)
    {
    	$msg = "Passwords do not match";
	$_SESSION['Message'] = $msg;
	header("Location: NewAcc.html");
    }
    else if ($captcha != "vorgi3rp4oaf" && $captcha != "Vorgi3rp4oaf")
    {
    	$msg = "You have entered the wrong captcha";
	$_SESSION['Message'] = $msg;
	header("Location: NewAcc.html");
    }
    else
    {
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpwd);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($dob == '')
        {
        	$dob = NULL;
        }
        if ($contact == '')
        {
        	$contact = NULL;
        }
	$sql = $dbh->prepare("INSERT INTO members VALUES (:name, :dob, :email, :contact, :user, :pwd, :BookNo)");
        
	$sql->bindParam(':name',$name);
	$sql->bindParam(':dob',$dob);
	$sql->bindParam(':email',$email);
	$sql->bindParam(':contact',$contact);
	$sql->bindParam(':user',$user);
	$sql->bindParam(':pwd',$pwd);
	$sql->bindParam(':BookNo',$bn);

	$sql->execute();
	
	$msg = "Please log in to your account";
	$_SESSION['msg'] = $msg;
	header("Location: index.html");
    }


?>
