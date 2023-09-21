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
   $Phno=$_POST['mon'];
   $Email=$_POST['email'];
   $Nation=$_POST['nation'];
   
   $Anamt=$_POST['samount'];
 
   $Gender=$_POST['gender'];
 



   
  

    if (!preg_match ("/^[a-zA-z ]*$/", $Fname) ) 
    {  
     
        $_SESSION['status']="Only Alphabets are required in  Name";
        $_SESSION['status_code']="error";
        header('Location:sharesdata.php');
    }
    else
    {
      if($acno<=0)
      {
        $_SESSION['status']="Enter Valid Account No";
        $_SESSION['status_code']="error";
        header('Location:sharesdata.php');
      }
      else
      {
        if($Age<=0 && $Age >100)
        {
          $_SESSION['status']="Enter Valid Age";
          $_SESSION['status_code']="error";
          header('Location:sharesdata.php');
        }
        else
        {
          if( $Phno<=0 )
          {
            $_SESSION['status']="Enter Valid Phone No";
            $_SESSION['status_code']="error";
            header('Location:sharesdata.php');
           }
          else
           {             
               if(!preg_match ("/^[a-zA-z ]*$/", $Nation))
             {
               $_SESSION['status']="Enter Valid Nationality";
              $_SESSION['status_code']="error";
              header('Location:sharesdata.php');

             
             }
             else
             {
               if($Anamt<0)
              {
                 $_SESSION['status']="Enter Valid Income";
                $_SESSION['status_code']="error";
                header('Location:sharesdata.php');
               }
               else
              {
//  (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`,
// `scitizen`, `eduqualification`, `occupation`, `aincome`, `atype`, `date`) 

                                $sql="UPDATE `lucifer`.`sharesacc` 
                                SET sname='$Fname', dob='$Dob', age='$Age', address='$Address' 
                                ,phoneno='$Phno', email=' $Email', gender=' $Gender', nationality='$Nation', 
                                   samount='$Anamt' 
                                WHERE saccountno='$acno' ";

                                $query_run=mysqli_query($con,$sql);
                                if($query_run)
                                {
                                $_SESSION['status']="Account Updated Sucessfully !";
                                $_SESSION['status_code']="success";
                                header('Location:sharesdata.php');
                                }
                                else
                                {
                                
                                    $_SESSION['status']="DataBase Error !";
                                    $_SESSION['status_code']="error";
                                    header('Location:sharesdata.php');
                                
                                
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