<?php
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
	
	$hasError=false;
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
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
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		elseif(isset($_POST[""])){
		    echo htmlspecialchars($_POST["username"]);
		}
	    elseif(strlen($_POST["username"])<6){
			$err_uname="Username Must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["username"],"")){
			$err_uname="Username Should Not Contain White Space";
			$hasError = true;
			
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_pass="password Required";
			$hasError = true;
			
		}
		
		elseif(strlen($_POST["password"])<6){
			$err_pass="password must Be 6 characters Long";
			$hasError = true;
		}
		elseif(strpos($_POST["password"],"")){
			$err_pass="Username Should Not Contain White Space";
			$hasError = true;

		}
		else{
			$pass = $_POST["password"];
		}
		if(empty($_POST["confirm_password"])){
			$err_cpass="Retype password";
			$hasError = true;
		}
		elseif(strlen($_POST["password"])<6){
			$err_pass="password must Be 6 characters Long";
		}
		else{
			$cpass = $_POST["confirm_password"];
		}
		if ($pass!= $cpass) {
            $err_cpass = "you have to write both password correctly";
			$hasError = true;
		}
		else{
			$cpass = $_POST["confirm_password"];
		}
		
		if(empty($_POST["email"])){
			$err_email="valid email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i", $email)) 
		{
            $err_email = "Email address must contain @";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["phone"])){
			$err_phone = "Contact number Required";
			$hasError = true;
		}
		elseif (strlen($_POST["phone"]) <=11) 
		{
            $err_phone = "Phone Number needs to be greater than 11";
			$hasError = true;
		}	
		else{
			$phone = $_POST["phone"];
		}
	
		
		
		if(!$hasError){
			echo"<b> Admin Profile: </b><br><br>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["confirm_password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			
		}
	
	}
?>