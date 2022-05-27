<?php


include 'connect.php';

$Sid = $_GET['Sid'];

$q = "DELETE FROM studentrecord WHERE Sid = '$Sid' ";

mysqli_query($conn, $q);

header('location:display.php');

?>