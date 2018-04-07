<?php
include("connection.php");
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$zender=$_POST['zender'];

$query="insert into artist_master values('','$first_name','$last_name','$zender')";
$ex=mysql_query($query);

header("Location:index.php");

?>