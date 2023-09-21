<?php
session_start();
include('includes/database.php');

if(isset($_POST['remove']))
{
    $a = $_POST['dacno'];
    $sql = "DELETE FROM `saving` WHERE accountno=$a";
    mysqli_query($con,$sql);

    $_SESSION['status']="Account Deleted Sucessfully !";
    $_SESSION['status_code']="success";
    header('Location: savingdata.php');


}