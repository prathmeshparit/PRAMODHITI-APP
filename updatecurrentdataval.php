<?php
session_start();
include('includes/database.php');
 if(isset($_POST['update']))
 {
   $acno = $_POST['editacno'];
   $Fname=$_POST['fname'];
 
   $Dob=$_POST['dob'];
   $Age=$_POST['age'];

   $Phno=$_POST['mon'];
   $Email=$_POST['email'];
   $Nation=$_POST['nation'];
   $Edqua=$_POST['eq'];
   $Occupation=$_POST['ocp'];
   $Anamt=$_POST['ai'];
   $Acctype="saving";
   $Gender=$_POST['gender'];
   $Scitizen=$_POST['citizen'];



   
  

    if (!preg_match ("/^[a-zA-z ]*$/", $Fname) ) 
    {  
     
        $_SESSION['status']="Only Alphabets are required in  Name";
        $_SESSION['status_code']="error";
        header('Location: currentdata.php');
    }
    else
    {
      if($acno<=0)
      {
        $_SESSION['status']="Enter Valid Account No";
        $_SESSION['status_code']="error";
        header('Location: currentdata.php');
      }
      else
      {
        if($Age<=0 && $Age >100)
        {
          $_SESSION['status']="Enter Valid Age";
          $_SESSION['status_code']="error";
          header('Location: currentdata.php');
        }
        else
        {
          $length = strlen($Phno);  

          if ( $length < 10 && $length > 10) 
            {
              $_SESSION['status']="Enter Valid Phone No";
              $_SESSION['status_code']="error";
              header('Location: currentdata.php');
            }
          else
           {             
               if($Nation<>"Indian")
             {
               $_SESSION['status']="Enter Valid Nationality";
              $_SESSION['status_code']="error";
              header('Location: currentdata.php');
             }


             else
             {
               if (!preg_match ("/^[a-zA-z ]*$/", $Occupation) ) 
               {  
                 
                   $_SESSION['status']="Only Alphabets are required in Occupation";
                   $_SESSION['status_code']="error";
                   header('Location: currentdata.php');
               }
               else
               {
                 if (!preg_match ("/^[a-zA-z ]*$/", $Edqua) ) 
                 {  
                   
                     $_SESSION['status']="Only Alphabets are required in Education Qualification";
                     $_SESSION['status_code']="error";
                     header('Location: currentdata.php');
                 }
                   
                           
             else
             {
               if($Anamt<0)
              {
                 $_SESSION['status']="Enter Valid Income";
                $_SESSION['status_code']="error";
                header('Location: currentdata.php');
               }
               else
              {
                                $sql="UPDATE `lucifer`.`current` 
                                SET fname='$Fname', dob='$Dob', age='$Age', phoneno='$Phno', email=' $Email', gender=' $Gender', nationality='$Nation', 
                                scitizen='$Scitizen',eduqualification='$Edqua' , occupation='$Occupation', 
                                aincome='$Anamt' 
                                WHERE accountno='$acno' ";

                                $query_run=mysqli_query($con,$sql);
                                if($query_run)
                                {
                                $_SESSION['status']="Account Updated Sucessfully !";
                                $_SESSION['status_code']="success";
                                header('Location: currentdata.php');
                                }
                                else
                                {
                                
                                    $_SESSION['status']="DataBase Error !";
                                    $_SESSION['status_code']="error";
                                    header('Location: currentdata.php');
                                
                                
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