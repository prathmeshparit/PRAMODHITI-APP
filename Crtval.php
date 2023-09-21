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
      $Acctype="Current";
      $Gender=$_POST['gender'];
      $Scitizen=$_POST['citizen'];

      if(isset($_POST['submit']))
      {
        if (!preg_match ("/^[a-zA-z ]*$/", $$Fname) ) 
        {  
          
            $_SESSION['status']="Only Alphabets are required in  Name";
            $_SESSION['status_code']="error";
            header('Location: current.php');
        }
        else
        {
          if($Accno<=0)
          {
            $_SESSION['status']="Enter Valid Account No";
            $_SESSION['status_code']="error";
            header('Location: current.php');
          }
          else
          {
            if($Age<=0 && $Age >100)
            {
              $_SESSION['status']="Enter Valid Age";
              $_SESSION['status_code']="error";
              header('Location: current.php');
            }
            else
            {   
              $length = strlen($Phno);  

                  if ( $length < 10 && $length > 10) 
                    {
                      $_SESSION['status']="Enter Valid Phone No";
                      $_SESSION['status_code']="error";
                      header('Location: current.php');
                    }
              else
              {
                if(!preg_match ("/^[a-zA-z ]*$/", $Nation))
                {
                  $_SESSION['status']="Enter Valid Nationality";
                  $_SESSION['status_code']="error";
                  header('Location: current.php'); 
                }

                else
                {
                  if (!preg_match ("/^[a-zA-z ]*$/", $Occupation) ) 
                  {  
                    
                      $_SESSION['status']="Only Alphabets are required in Occupation";
                      $_SESSION['status_code']="error";
                      header('Location: current.php');
                  }
                  else
                  {
                    if (!preg_match ("/^[a-zA-z ]*$/", $Edqua) ) 
                    {  
                      
                        $_SESSION['status']="Only Alphabets are required in Education Qualification";
                        $_SESSION['status_code']="error";
                        header('Location: current.php');
                    }
                      
                    else
                    {
                      if($Anamt<0)
                      {
                        $_SESSION['status']="Enter Valid Income";
                        $_SESSION['status_code']="error";
                        header('Location: current.php');
                      }
                      else
                      {
                        $sql="INSERT INTO `lucifer`.`current` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `scitizen`, `eduqualification`, `occupation`, `aincome`, `atype`, `date`) VALUES ('$Fname', '$Accno', '$Dob', '$Age', '$Address', '$Phno', '$Email', '$Gender', '$Nation', '$Scitizen', '$Edqua', '$Occupation', '$Anamt', '$Acctype', current_timestamp());";
              
                        if(mysqli_query($con,$sql))
                        {
                          $_SESSION['status']="Account Created Sucessfully !";
                          $_SESSION['status_code']="success";
                          header('Location: current.php');
                        }
                        else
                        {
                          $_SESSION['status']="Database Error !";
                          $_SESSION['status_code']="error";
                          header('Location: current.php');

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

   

  ?>