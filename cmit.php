<?php
session_start();
include('includes/database.php');

mysqli_commit($con);

if(mysqli_commit($con))
{
    $_SESSION['status']="COMMITED SUCCESSFULLY";
    $_SESSION['status_code']="success";
 header('Location: index.php');

}



?>