<?php
session_start();
include('includes/database.php');

if(isset($_POST['remove']))
{
    $a = $_POST['editacno'];
    $sql = "DELETE FROM `sharesacc` WHERE saccountno=$a";
    if(mysqli_query($con,$sql))
    {

    $_SESSION['status']="Account Deleted Sucessfully !";
    $_SESSION['status_code']="success";
    header('Location: sharesdata.php');
    }

}

?>