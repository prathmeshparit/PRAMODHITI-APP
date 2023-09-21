<?php
include('includes/database.php');


$sql="SELECT * FROM  `saving`";
$query_run=mysqli_query($con,$sql);

$row = mysqli_num_rows($query_run);





$sql="SELECT * FROM  `current`";
$query_run=mysqli_query($con,$sql);

$row1 = mysqli_num_rows($query_run);


$sql="SELECT * FROM  `recurring`";
$query_run=mysqli_query($con,$sql);

$row2 = mysqli_num_rows($query_run);

$sql="SELECT * FROM  `fixed`";
$query_run=mysqli_query($con,$sql);

$row3 = mysqli_num_rows($query_run);


$sql="SELECT * FROM  `loan`";
$query_run=mysqli_query($con,$sql);

$row4 = mysqli_num_rows($query_run);


$sql="SELECT * FROM  `sharesacc`";
$query_run=mysqli_query($con,$sql);

$row5 = mysqli_num_rows($query_run);


$row += $row1 + $row2 + $row3 + $row4 + $row5;
echo $row;





?>