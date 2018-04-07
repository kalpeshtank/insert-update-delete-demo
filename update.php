<?php

include("connection.php");
$artist_id = $_POST['artist_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$zender = $_POST['zender'];

$query = "update artist_master set first_name='$first_name', last_name='$last_name',zender='$zender' where artist_id=$artist_id";
$ex = mysql_query($query);

header("Location:index.php");
?>