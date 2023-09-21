<?php
session_start();
if(isset($_POST['loginn']))
{
   $server="Localhost";
        $username="root";
        $password ="";
        $dbname="lucifer";

        $con = mysqli_connect($server,$username,$password,$dbname);

        if(!$con)
        {
            die("Connection Failed :".mysqli_connect_error());
        }

   $user = $_POST['uname'];
   $pass = $_POST['pword'];

   $query ="SELECT * FROM  admin WHERE username= '$user' AND password= '$pass'";
  $result = mysqli_query($con,$query);
   $usertypes = mysqli_fetch_array($result);
  

    if($usertypes['atype'] == 'manager')
    {
         $_SESSION['username'] = $user;
         header('Location: manager/index.php ');
        // echo "<script>window.open('manager/index.php','_self')</script>";
        
         
     }
    else if ($usertypes['atype'] == 'clerk')
     {
        $_SESSION['username'] = $user;
        header('Location: clerk/index.php ');
       // echo "<script>window.open('clerk/index.php','_self')</script>";
    
     }
     else
     {
       $_SESSION['status']='Username or Password is Invalid !';
     
       header('Location:login.php ');
        
     }
    

}

?>


