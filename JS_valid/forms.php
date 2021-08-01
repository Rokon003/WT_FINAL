<?php
    require_once 'validation.php';
?>
<html>
    <head>
		<script>
			function validate(){
				return false;
			}
		</script>
	</head>
	<body>
		<fieldset>
		    <legend align="center"><h1>Registration Form</h1></legend>
		        <form action="" onsubmit="return validate()" method="post">
				<table align="center" >
					<tr>
						<td><b><i>Name: <i><b></td>
						<td><input size="30" type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><small><?php echo $err_name;?><small></span></td>	
					</tr>
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input size="30" type="text" id="username" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input size="30" type="password" id="password" name="password" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Confirm Password: <b><i></td>
						<td><input size="30" type="password" name="confirm_password" placeholder="Retype Password"></td>
						<td><span><small><?php echo $err_cpass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Email: <b><i></td>
						<td><input size="30" type="text" id="email" name="email" placeholder="Email"></td>
						<td><span><small><?php echo $err_email;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Contact Number: <i><b></td>
						<td><input size="30" type="text" name="phone" placeholder="Phone"></td>
						<td><span><small><?php echo $err_phone;?><small></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" value="Register"></td>
					</tr>
					
				</table>
				<br></br><a align="right" colspan="2"> <b><i>Go to<i></b><a href ="" >Login</a></a>
			</form>
		</fieldset>
	</body>
<html>		

