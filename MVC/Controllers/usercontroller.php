<?php
    include 'Models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$err_db="";
	
	$hasError=false;
	

	if(isset($_POST["register"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="password Required";
			$hasError = true;
			
		}
		
		else{
			$pass = $_POST["pass"];
		}
		
		
		if(empty($_POST["email"])){
			$err_email="valid email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}

		if(!$hasError){
			
			$rs=insertUser($name,$uname,$_POST["pass"],$_POST["email"]);
			if($rs==true){
				header("Location: login.php");
			}
			$err_db= $rs;
			
		}
		else if (isset ($_POST["Login"])){
			if(empty($_POST["uname"])){
				$err_uname="Username Required";
				$hasError = true;
			}
			else{
				$uname=$_POST["uname"];
			}
			if(empty($_POST["pass"])){
				$err_pass="pass Required";
				$hasError = true;
			}
			else{
				$pass=$_POST["pass"];
			}
			if(authenticateUser($_POST["uname"],$_POST["pass"])){
				session_start();
				$_SESSION["Loggeduser"] = $_POST["uname"];
				header("Location: add_category.php");
			}
			$err_db= "Username password invalid";
		}

	}

	function insertUser($name,$uname,$pass,$email){
		$query= "inset into users values (NULL,'$name','$uname','$pass','$email')";
		return execute($query);	
	}
	function authenticateUser($uname,$pass){
		$query ="select * from users where username='$uname' and 'password='$pass'";
		$rs = get($query);
		if (count($rs)>0){
			return true;
		}
		return false;
	}

?>