<?php
    require_once 'Models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$err_db="";
	
	$hasError=false;
	

	if(isset($_POST["register"])){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		elseif(strlen($_POST["name"]) <=3){
			$err_name="Name Must be greater than 3";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		elseif(isset($_POST[""])){
		    echo htmlspecialchars($_POST["uname"]);
		}
	    elseif(strlen($_POST["uname"])<6){
			$err_uname="Username Must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["uname"],"")){
			$err_uname="Username Should Not Contain White Space";
			$hasError = true;
			
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="password Required";
			$hasError = true;
			
		}
		
		elseif(strlen($_POST["pass"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["pass"],"")){
			$err_pass="Username Should Not Contain White Space";
			$hasError = true;

		}
		else{
			$pass = $_POST["pass"];
		}
		if(empty($_POST["c_pass"])){
			$err_cpass="Retype password";
			$hasError = true;
		}
		elseif(strlen($_POST["c_pass"])<6){
			$err_pass="password must Be 6 characters Long";
		}
		else{
			$cpass = $_POST["c_pass"];
		}
		if ($pass!= $cpass) {
            $err_cpass = "you have to write both password correctly";
			$hasError = true;
		}
		else{
			$cpass = $_POST["c_pass"];
		}
		
		if(empty($_POST["email"])){
			$err_email="valid email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["phone"])){
			$err_phone = "Contact number Required";
			$hasError = true;
		}
		elseif (strlen($_POST["phone"]) <= 10) 
		{
            $err_phone = "Phone Number needs to be greater than 11";
			$hasError = true;
		}	
		else{
			$phone = $_POST["phone"];
		}
	
		
		
		if(!$hasError){
			$rs=insertUser($name,$uname,$_POST["pass"],$_POST["email"]);
			if($rs===true){
				header("Location: login.php");
			}
			$err_db= $rs;
			
			
		}
	
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
	function insertUser($name,$uname,$pass,$email){
		$query= "insert into users values (NULL,'$name','$uname','$pass','$email')";
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