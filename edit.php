<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
		
	// update user
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
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
	<p>Edit Member</p>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
	<div align="center">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td id="kotak"><input type="text" name="name" value=<?php echo $name;?> required></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td id="kotak"><input type="text" name="email" value=<?php echo $email;?> required></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td id="kotak"><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
			</tr>
			<tr>
				
				<td style="border:0"><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td style="border:0"><input class="button besarKotak faded" type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<br><br>
	<input class="button faded" type="button" value="Home" onclick="window.location='index.php';">

</body>
</html>