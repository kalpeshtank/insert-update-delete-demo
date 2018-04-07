<html>
<head>
<title>Core</title>
</head>
<body>
<?php
include('connection.php');
$query="select * from artist_master";
$result=mysql_result();
 while($row = $result->fetch_assoc()) {
echo $row['first_name'];
 }
 ?>

</body>