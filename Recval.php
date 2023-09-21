<?php
session_start();

include('includes/database.php');

      $Fname=$_POST['fname'];
      $Accno=$_POST['accountno'];
      $Dob=$_POST['dob'];
      $Age=$_POST['age'];
      $Address=$_POST['address'];
      $Phno=$_POST['mon'];
      $Email=$_POST['email'];
      $Nation=$_POST['nation'];
      $Edqua=$_POST['eq'];
      $Occupation=$_POST['ocp'];
      $Anamt=$_POST['ai'];
      $Deposit=$_POST['depamt'];
      $Tenure=$_POST['tenure'];
      $Acctype="Recurring";
      $Scitizen=$_POST['citizen'];
      $Gender=$_POST['gender'];

        if($Scitizen=="yes")
          {
            $rate=6;
          }
        else
          {
            $rate=5;
          }

      $SIofrd=$Deposit*$Tenure*($Tenure+1)*$rate/2400;
      $Totalamt=$SIofrd+($Deposit*$Tenure);
          
        
      
      if(isset($_POST['submit']))
       {
        if (!preg_match ("/^[a-zA-z ]*$/", $fname) ) 
        {  
          
            $_SESSION['status']="Only Alphabets are required in  Name";
            $_SESSION['status_code']="error";
            header('Location: recurring.php');
        }
        else
        {
          if($Accno<=0)
          {
            $_SESSION['status']="Enter Valid Account No";
            $_SESSION['status_code']="error";
            header('Location: recurring.php');
          }
          else
          {
            if($Age<=0 || $Age>=100)
            {
              $_SESSION['status']="Enter Valid Age";
              $_SESSION['status_code']="error";
              header('Location: recurring.php');
            }
            else
            {
              if(!preg_match ("/^[a-zA-z ]*$/", $Nation))
                {
                  $_SESSION['status']="Enter valid Nationality";
                  $_SESSION['status_code']="error";
                  header('Location: recurring.php');
                }
                else
                {
                  if($Deposit<=0)
                  {
                    $_SESSION['status']="Enter Valid Deposit Amount";
                  $_SESSION['status_code']="error";
                  header('Location: recurring.php');
                  }
                  else
                  {
                    if($Anamt<0)
                    {
                      $_SESSION['status']="Enter Valid Annual Amount";
                      $_SESSION['status_code']="error";
                      header('Location: recurring.php');
                      
                    }
                    else
                    {
                      if($Tenure<=0)
                      {
                        $_SESSION['status']="Enter Valid Tenure";
                        $_SESSION['status_code']="error";
                        header('Location: recurring.php');
                       
                      }  
                      else
                      {
                        $Phno = strlen($Phno);
                        if($Phno>10 || $Phno<10)
                        {
                          $_SESSION['status']="Enter Valid Phone Number";
                          $_SESSION['status_code']="error";
                          header('Location: recurring.php');
                        }
                        else
                        {

                          if(!preg_match ("/^[a-zA-z ]*$/", $Edqua))
                          {
                            $_SESSION['status']="Enter Valid Educational Qualification ";
                            $_SESSION['status_code']="error";
                            header('Location: recurring.php');
                          }
                          else
                          {
                            if(!preg_match ("/^[a-zA-z ]*$/", $Occupation))
                            {
                              $_SESSION['status']="Enter Valid Occupation ";
                            $_SESSION['status_code']="error";
                            header('Location: recurring.php');
                            }
                            else
                            {
                        $sql="INSERT INTO `lucifer`.`recurring` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `scitizen`, `eduqualification`, `occupation`, `aincome`, `depositamount`, `tenure`, `interest`, `finalamount`, `atype`, `date`,`Rate`) VALUES ('$Fname', '$Accno', '$Dob', '$Age', '$Address', '$Phno', '$Email', '$Gender', '$Nation', '$Scitizen', '$Edqua', '$Occupation', '$Anamt', '$Deposit', '$Tenure', '$SIofrd', '$Totalamt', '$Acctype', current_timestamp(),'$rate');";
          
                        if(mysqli_query($con,$sql))
                         {

                          $_SESSION['status']="Account Created Sucessfully !";
                          $_SESSION['status_code']="success";
                          header('Location: recurring.php');
                         }
                         else
                         {
                          $_SESSION['status']="Database Error !";
                          $_SESSION['status_code']="error";
                          header('Location: recurring.php');

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

        }


      }
      


     
 
      

      

     

     

     
        

 

 
    }

  ?>