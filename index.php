<html>
<head>
<title>Core</title>
</head>
<body align="center">
<?php
include("connection.php");
$query="select * from artist_master";
$exe=mysql_query($query);
?>
<table border="1" align="center">
			<tr>
				<td>First Name</td>	
				<td>Last Name</td>		
				<td>Action</td>
			</tr>
	<?php
		while($row=mysql_fetch_assoc($exe))
		{
	?>
			<tr>
				<td><?php echo $row['first_name'] ?></td>
				<td><?php echo $row['last_name'] ?></td>				
				<td><a href="edit.php?artist_id=<?php echo $row['artist_id'];?>">Edit</a>||Delete</td>
			</tr>
	<?php										 
		} 			
	?>
	
	
	<table border="1" align="center">	
	<form action="insert.php" method="POST">
	<tr>
	<td>First Name</td>
	<td><input type="text" name="first_name"/></td></tr><br/>
	<tr>
	<td>Last Name</td>
	<td><input type="text" name="last_name"></td></tr><br/>
	<tr>
	<td>zender</td>
	<td><select name="zender">
	<option value="male">Male</option>
	<option value="female">Female</option>
	
</select>	
	</td>
	</tr><br/>
	
	<tr><td align="center">
	<input type="submit" value="submit"></td></tr>
</form>
	
	</table>
</body>