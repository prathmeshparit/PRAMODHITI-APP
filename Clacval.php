<?php

session_start();
include('includes/database.php');


      
      $Accno=$_POST['acno'];
      $Fname=$_POST['fname'];
      $Acctype=$_POST['account'];
      $Phno=$_POST['phno'];
      $Address=$_POST['address'];


      if(isset($_POST['submit']))
      {
      if (!preg_match ("/^[a-zA-z]*$/", $Fname) ) 
        {  
         $_SESSION['status']="Only Alphabets are required in  Name";
         $_SESSION['status_code']="error";
         header('Location: closeac.php');
        
        }
        else
        {
         if($Accno<=0)
         {
            $_SESSION['status']="Enter valid Account No";
            $_SESSION['status_code']="error";
            header('Location: closeac.php');
           
         }
         else
         {
           
              if($Acctype=="Saving")
                 {
                     $sql="DELETE FROM `saving` where accountno='$Accno'";
                     $query_run=mysqli_query($con,$sql);
                     
                     if($query_run)
                     {
                     
                        
                      $_SESSION['status']="Account Deleted Sucessfully !";
                      $_SESSION['status_code']="success";
                      header('Location: closeac.php');
                       
                     }
                     else
                     {
                      $_SESSION['status']="Database Error or Account Not Found !";
                      $_SESSION['status_code']="error";
                      header('Location: closeac.php');

                     }
                  
                     mysqli_close($con);
                  }
               else if($Acctype=="Current")
               {
                  $sql="DELETE FROM `current` where accountno='$Accno'";
                  if(mysqli_query($con,$sql))
                  {

                   $_SESSION['status']="Account Deleted Sucessfully !";
                   $_SESSION['status_code']="success";
                   header('Location: closeac.php');
                  }
                  else
                  {
                   $_SESSION['status']="Database Error !";
                   $_SESSION['status_code']="error";
                   header('Location: closeac.php');

                  }
               
                  mysqli_close($con);
               }
               else if($Acctype=="Fixed")
               {
                  $sql="DELETE FROM `fixed` where accountno='$Accno'";
                  if(mysqli_query($con,$sql))
                  {

                   $_SESSION['status']="Account Deleted Sucessfully !";
                   $_SESSION['status_code']="success";
                   header('Location: closeac.php');
                  }
                  else
                  {
                   $_SESSION['status']="Database Error !";
                   $_SESSION['status_code']="error";
                   header('Location: closeac.php');

                  }
               
                  mysqli_close($con);
               }
               else if($Acctype=="Recurring")
               {
                  $sql="DELETE FROM `recurring` where accountno='$Accno'";
                  if(mysqli_query($con,$sql))
                  {

                   $_SESSION['status']="Account Deleted Sucessfully !";
                   $_SESSION['status_code']="success";
                   header('Location: closeac.php');
                  }
                  else
                  {
                   $_SESSION['status']="Database Error !";
                   $_SESSION['status_code']="error";
                   header('Location: closeac.php');

                  }
               
                  mysqli_close($con);
               }
               else if($Acctype=="Loan")
               {
                  $sql="DELETE FROM `loan` where accountno='$Accno'";
                  if(mysqli_query($con,$sql))
                  {

                   $_SESSION['status']="Account Deleted Sucessfully !";
                   $_SESSION['status_code']="success";
                   header('Location: closeac.php');
                  }
                  else
                  {
                   $_SESSION['status']="Database Error !";
                   $_SESSION['status_code']="error";
                   header('Location: closeac.php');

                  }
               
                  mysqli_close($con);
                  
               }



         }
      

        }
     


          

              

                 

                 

          }      


   
      
      

      ?>