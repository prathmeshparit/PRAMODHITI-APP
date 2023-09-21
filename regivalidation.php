<?php
 session_start();
if(isset($_POST['register']))
{
   
   // include('includes/database.php');
   $server="Localhost";
    $username="root";
    $password ="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con)
    {
    die("Connection Failed :".mysqli_connect_error());
    }
    
    //accessing variables
    $ffname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['uname'];
    $password=$_POST['pass'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phoneno=$_POST['phone'];
    $gender=$_POST['r1'];
    $image=$_FILES["image"]['name'];
   $t =$_POST['atype'];

    if (!preg_match ("/^[a-zA-z ]*$/", $ffname) ) 
    {  
      
        $_SESSION['status']="Only Alphabets are required in First Name";
        $_SESSION['status_code']="error";
        header('Location: regi.php');
    }
    else
    {
        if (!preg_match ("/^[a-zA-z ]*$/", $lname) ) 
        {  
          
            $_SESSION['status']="Only Alphabets are required in Last Name";
            $_SESSION['status_code']="error";
            header('Location: regi.php');
        }
        else
        {
            if (!preg_match ("/^[a-zA-z ]*$/",  $city) ) 
            {  
              
                $_SESSION['status']="Please Enter valid City";
                $_SESSION['status_code']="error";
                header('Location: regi.php');
            }
            else
            {
                if (!preg_match ("/^[a-zA-z ]*$/",  $state) ) 
                {  
                  
                    $_SESSION['status']="Please Enter valid State";
                    $_SESSION['status_code']="error";
                    header('Location: regi.php');
                }
                else
                {
                    if (!preg_match ("/^[0-9]*$/",  $zip) )
                    {  
                        if($zip<=0)
                        {
                
                        
                        $_SESSION['status']="Please Enter valid Zip Code";
                        $_SESSION['status_code']="error";
                        header('Location: regi.php');  
                        }
                    } 
                    else
                    {
                        if (!preg_match ("/^[0-9]*$/",  $phoneno) )
                        {  
                            $_SESSION['status']="Please Enter valid Phone Number";
                            $_SESSION['status_code']="error";
                            header('Location: regi.php');  
                        } 
                        else
                        {
                          //  $typee="$_POST['atype']";
 
                            $sql =" INSERT INTO `lucifer`.`admin` (  `image`,`username`, `password`, `fname`, `lname`, `city`,`state`,`zip`,`gender`,`phoneno`,`atype`,`rdate`) VALUES 
                            ( '$image','$username', '$password',' $ffname', '$lname',  '$city','$state','$zip','$gender','$phoneno','$t', current_timestamp());";
                        
                                    if(mysqli_query($con,$sql))
                                    {
                                       move_uploaded_file($_FILES["image"]['tmp_name'],"upload/".$_FILES["image"]['name']) ;
                                        $_SESSION['status']="User Created !";
                                            $_SESSION['status_code']="success";
                                            header('Location: regi.php');  
                                    }
                                    else
                                    {
                                        $_SESSION['status']="Database Error !";
                                        $_SESSION['status_code']="error";
                                        header('Location: regi.php');  
                                          
                                    }
                        
                                    mysqli_close($con);
                                    

                        }
                    }
                }
            }

        }

    }




    

    

   
    
    

   
  
   
     

}

?>