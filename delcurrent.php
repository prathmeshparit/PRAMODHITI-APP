<?php
session_start();
include('includes/database.php');

if(isset($_POST['remove']))
{
    $a = $_POST['dacno'];
    $sql = "DELETE FROM `current` WHERE accountno=$a";
    mysqli_query($con,$sql);

    $_SESSION['status']="Account Deleted Sucessfully !";
    $_SESSION['status_code']="success";
    header('Location: currentdata.php');


}
?>