<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
	<style>
		table, th, td{
			border: 1px solid black;
			padding: 4px;
			align:center;
		}
		table {
			border-spacing: 15px;
			text-align:center;
		}
		th{
			color:white;
			border:0px;
			background-color:#1a8cff;
		}
		td{
			width:250px;
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
		.faded:hover{
			background-color: #8472ff;
		}
		
	</style>
</head>
 
<body>
<p>Database Member Diskon Lover</p>

	<div align="center">
    <table width='80%' border=1>
 
    <tr>
        <th>ID Member</th> <th>Name</th> <th>No Telephone</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table><br>
	<input class="button faded" type="button" value="Register" onclick="window.location='add.php';">
</body>
</html>