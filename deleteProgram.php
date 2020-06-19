<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from program where ProgramID='$nid'");

header('location:index.php?page=notification');

?>