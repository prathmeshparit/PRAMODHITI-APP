<?php
session_start();
include('includes/database.php');
 if(isset($_POST['update']))
 {
   $acno = $_POST['editacno'];
   $Fname=$_POST['fname'];
 
   $Dob=$_POST['dob'];
   $Age=$_POST['age'];
   $Address=$_POST['address'];
   $Phno=$_POST['phoneno'];
   $Email=$_POST['email'];
   $Nation=$_POST['nationality'];
   $Edqua=$_POST['eduqualification'];
   $Occupation=$_POST['occupation'];
   $Anamt=$_POST['aincome'];
   $Acctype="loan";
   $Gender=$_POST['gender'];
   $Scitizen=$_POST['scitizen'];

   $loantype=$_POST['loantype'];
   $sanamount=$_POST['sanamount'];  
   $tenure=$_POST['tenure'];




   
  

    if (!preg_match ("/^[a-zA-z]*$/", $Fname) ) 
    {  
     
        $_SESSION['status']="Only Alphabets are required in  Name";
        $_SESSION['status_code']="error";
        header('Location: loandata.php');
    }
    else
    {
      if($acno<=0)
      {
        $_SESSION['status']="Enter Valid Account No";
        $_SESSION['status_code']="error";
        header('Location: loandata.php');
      }
      else
      {
        if($Age<=0 && $Age >100)
        {
          $_SESSION['status']="Enter Valid Age";
          $_SESSION['status_code']="error";
          header('Location: loandata.php');
        }
        else
        {
          if( $Phno<=0 )
          {
            $_SESSION['status']="Enter Valid Phone No";
            $_SESSION['status_code']="error";
             header('Location: loandata.php');
           }
          else
           {             
               if($Nation<>"Indian")
             {
               $_SESSION['status']="Enter Valid Nationality";
              $_SESSION['status_code']="error";
               header('Location: loandata.php');

             
             }
             else
             {
               if($Anamt<0)
              {
                 $_SESSION['status']="Enter Valid Income";
                $_SESSION['status_code']="error";
                header('Location: loandata.php');
               }
               else
              {

                                $sql="UPDATE `lucifer`.`loan` 
                                SET fname='$Fname', dob='$Dob', age='$Age', address='$Address',
                                phoneno='$Phno', email=' $Email', gender=' $Gender', nationality='$Nation', 
                                scitizen='$Scitizen',eduqualification='$Edqua' , occupation='$Occupation', 
                                aincome='$Anamt', loantype='$loantype', sanamount='$sanamount', tenure='$tenure'     
                                WHERE accountno='$acno' ";

                                $query_run=mysqli_query($con,$sql);
                                if($query_run)
                                {
                                $_SESSION['status']="Account Updated Sucessfully !";
                                $_SESSION['status_code']="success";
                                header('Location: loandata.php');
                                }
                                else
                                {
                                
                                    $_SESSION['status']="DataBase Error !";
                                    $_SESSION['status_code']="error";
                                    header('Location: loandata.php');
                                
                                
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