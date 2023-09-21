<?php
session_start();
include('includes/database.php');
      
      if(isset($_POST['submit']))
       {
        $acno=$_POST['acno'];
        
        if($acno<0)    
          {
            $_SESSION['status']="Enter Valid Account No";
            $_SESSION['status_code']="error";
            header('Location: emi.php');
          }
        else
          {   
              $query = "SELECT * FROM `loan` WHERE accountno = '$acno'";
              $query_run = mysqli_query($con,$query);
              $row=mysqli_num_rows($query_run);

              if($row < 1)
              {
                $_SESSION['status']="No Data Found !";
                $_SESSION['status_code']="warning";
                header('Location: emi.php');
              }
              while($row = mysqli_fetch_assoc($query_run))
              {
                $getfinalamt= $row['finalamount'];
                $getemiamt= $row['emi'];
                
                if($getfinalamt<0){
                  $getfinalamt = 0;
                  $query1 = "UPDATE `loan` SET finalamount = '$getfinalamt' WHERE accountno = '$acno'";
                  $sql = mysqli_query($con,$query1);
                  
                    $_SESSION['status']="Loan Cleared";
                    $_SESSION['status_code']="success";
                    header('Location: emi.php');

                  }
                else{

                  $getfinalamt = $getfinalamt-$getemiamt; 
                  $query2 = "UPDATE `loan` SET finalamount = '$getfinalamt' WHERE accountno = '$acno'";
                  $sql = mysqli_query($con,$query2);
                 
                  if($sql)
                  {
                      $_SESSION['status']="Amount Deposited Successfully !";
                      $_SESSION['status_code']="success";
                      header('Location: emi.php');
                    }
                  else
                  {
                    $_SESSION['status']="DataBase Error!";
                    $_SESSION['status_code']="error";
                    header('Location: emi.php');
                  }
                   
                }
                  
              } 
              mysqli_close($con);

          }
                   
      }
?>