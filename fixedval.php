<?php 
 session_start();
 if(isset($_POST['create']))
 {
    include('includes/database.php');
 
     
 
 $fname=$_POST['fname'];
 $accountno=$_POST['accountno'];
 $dob=$_POST['dob'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $phoneno=$_POST['phoneno'];
 $email=$_POST['email'];
 $nationality=$_POST['nationality'];
 $dipoamount=$_POST['dipoamount'];
 $tenure=$_POST['tenure'];
 $atype="fixed";
 $gender=$_POST['gender'];



if($age>0 && $age<60)
{
    if($tenure>=1 && $tenure<=3)
    {
        $rate=2.90;
    }else if ($tenure>3 && $tenure<=7)
    {
        $rate=3.20;
    }else if ($tenure>7 && $tenure<=10)
    {
        $rate=3.70;
    }else if ($tenure>10 && $tenure<=30)
    {
        $rate=4.10;
    }
    else
    { }
    
}
else if($age>60 && $age<100)
{
    if($tenure>=1 && $tenure<=3)
    {
        $rate=3.40;
    }else if ($tenure>3 && $tenure<=7)
    {
        $rate=4.10;
    }else if ($tenure>7 && $tenure<=10)
    {
        $rate=4.90;
    }else if ($tenure>10 && $tenure<=30)
    {
        $rate=5.20;
    }
    else
    { }
    
}


$interest= ($dipoamount*$rate*$tenure)/100;
$finalamount=$dipoamount+$interest;



if(!preg_match ("/^[a-zA-z ]*$/", $fname))
{

    $_SESSION['status']="Only Alphabets are required in  Name";
    $_SESSION['status_code']="error";
    header('Location: fixed.php');
}
else
{
    if($accountno<=0)
    {
      $_SESSION['status']="Enter Valid Account No";
      $_SESSION['status_code']="error";
      header('Location: fixed.php');
    }
    else
    {
        if($age<=5 || $age>100)
        {
             $_SESSION['status']="Enter Valid Age";
                $_SESSION['status_code']="error";
                header('Location: fixed.php');
        }
        else
        {
            
            $length = strlen ($phoneno);  
  
                if ( $length < 10 && $length > 10) 
                {  
                    $_SESSION['status']="Enter Valid Phone no";
                    $_SESSION['status_code']="error";
                 header('Location: fixed.php');
            
                }
            else
            {
            if(!preg_match ("/^[a-zA-z ]*$/", $nationality))
                {

                 $_SESSION['status']="Only Alphabets are required in Nationality";
                    $_SESSION['status_code']="error";
                    header('Location: fixed.php');
                }
                else
                {
                    if($dipoamount<=0)
                        {
                        $_SESSION['status']="Enter Valid Deposit Amount";
                            $_SESSION['status_code']="error";
                         header('Location: fixed.php');
                        }
                        else
                        {
                            if($tenure<=0)
                            {
                                $_SESSION['status']="Enter Valid Tenure";
                                    $_SESSION['status_code']="error";
                                header('Location: fixed.php');
                            }
                            else
                            {
                                $sql = " INSERT INTO `fixed` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `dipoamount`, `rate`, `tenure`, `interest`, `finalamount`, `atype`, `date`) 
                                VALUES ('$fname', '$accountno', '$dob', '$age', '$address', '$phoneno', '$email', '$gender', ' $nationality', '$dipoamount', '$rate ', ' $tenure', '$interest', ' $finalamount', '$atype', current_timestamp());";
                                
                           
                               // Execute the query
                               if(mysqli_query($con,$sql))
                               {
                                $_SESSION['status']="Account Created Successfully !";
                                $_SESSION['status_code']="success";
                                header('Location: fixed.php');
                                  
                               }
                               else
                              {
                                $_SESSION['status']="DataBase Error";
                                $_SESSION['status_code']="error";
                                header('Location: fixed.php');
                                   
                              }
                           
                              mysqli_close($con);


                            
                            }

                        }

                }

            
            }

        }

    }

}




    


 
 
}



 function input_data($data) 
 {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


 

   
 
 ?>
  


  

  