
<html>
<head>
	<title>Register Member</title>
	<style>
		table, th, td{
			border: 1px solid black;
			padding: 5px;
			align:center;
		}
		table {
			border-spacing: 15px;
			text-align:center;
		}
		th{
			border:0px;
			background-color:#1a8cff;
		}
		td{
			width:200px;
		}
		p{
			font-size:40px;
			text-align:center;
		}
		.button {
			background-color: #66b3ff;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		.besarKotak{
			width:100%;
		}
		#kotak{
			border:0px;
			padding:0px;
			
		}
		.faded:hover{
			background-color: #8472ff;
		}
		
		
	</style>
</head>
 
<body>
	<p>Register Member</p>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
	<div align="center">
		<table width="40%">
			<tr> 
				<td>Name</td>
				<td id="kotak"><input type="text" name="name" required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td id="kotak"><input type="text" name="email" required></td>
			</tr>
			<tr> 
				<td>No Telpon</td>
				<td id="kotak"><input type="text" name="telpon"></td>
			</tr>
			<tr> 
				<td style="border:0"></td>
				<td style="border:0"><input class="button besarKotak faded" type="submit" name="Submit" value="Add" width="100%"></td>
			</tr>
		</table>
	</form><br><br>
	<input class="button faded" type="button" value="Home" onclick="window.location='index.php';">
	<br>
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$telpon = $_POST['telpon'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$telpon')");
		
		// Show message when user added
		echo "<br><br>Selamat Anda Berhasil Mendaftar Sebagai Member.";
		
	}
	?>
</body>
</html>