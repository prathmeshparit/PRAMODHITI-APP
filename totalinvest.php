<?php
include('includes/database.php');


$sql="SELECT * FROM  `otherbankinvest`";
$query_run=mysqli_query($con,$sql);

$row = mysqli_num_rows($query_run);

echo $row;

?>