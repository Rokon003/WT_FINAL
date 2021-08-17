<?php
    require_once 'validation.php';
?>
<html>
    <head>
	</head>
	<body>
		<fieldset>
		    <legend align="center"><h1>Registration Form</h1></legend>
		        <form action="" onsubmit="return validate()" method="post">
				<table align="center" >
					<tr>
						<td><b><i>Name: <i><b></td>
						<td><input size="30" type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span id="err_name"><small><?php echo $err_name;?><small></span></td>	
					</tr>
					<tr>
						<td><b><i>Username: <i><b></td>
						<td><input size="30" type="text" id="uname" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span id="err_name"><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Password: <i><b></td>
						<td><input size="30" type="password" id="pass" name="pass" placeholder="Password"></td>
						<td><span id="err_pass"><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Confirm Password: <b><i></td>
						<td><input size="30" type="password" id="pass" name="c_pass" placeholder="Retype Password"></td>
						<td><span id="err_c_pass"><small><?php echo $err_cpass;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Email: <b><i></td>
						<td><input size="30" type="text" id="email" name="email" placeholder="Email"></td>
						<td><span id="err_email"><small><?php echo $err_email;?><small></span></td>
					</tr>
					<tr>
						<td><b><i>Contact Number: <i><b></td>
						<td><input size="30" type="text" id="phone" name="phone" placeholder="Phone"></td>
						<td><span err_phone><small><?php echo $err_phone;?><small></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" value="Register"></td>
						<td><a align="center" colspan="3"> <b><i>Go to<i></b><a href ="" >Login</a></a>
					</tr>
					
				</table>
				
			</form>
			<script src="jslog.js"></script>
		</fieldset>
	</body>
<html>		

