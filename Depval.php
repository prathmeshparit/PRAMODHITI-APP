<?php
session_start();

include('includes/database.php');

if(isset($_POST['submit']))
  {

        $accno=$_POST['acno'];
        $amt=$_POST['amount'];
        $Actype=$_POST['account'];

        if($accno<0)    
          {
            $_SESSION['status']="Enter Valid Account No";
            $_SESSION['status_code']="error";
            header('Location: deposit.php');
          }
          else
          {
            if($amt<0)    
            {
              $_SESSION['status']="Enter Valid Amount";
              $_SESSION['status_code']="error";
              header('Location: deposit.php');
            }
            else
            {
              if($Actype=="Saving")
              {
                  $query="SELECT * FROM `saving` where accountno='$accno'";
                  $query_run=mysqli_query($con,$query);
                  $rows = mysqli_num_rows($query_run);
                  if($rows>0)
                  {
                  while($row=mysqli_fetch_assoc($query_run))
                    {
                        $bal= $row['balance'];
                      
                        $bal=$bal+$amt;
               
                       $query1="UPDATE `saving` SET balance='$bal' where accountno='$accno'";
                       $result=mysqli_query($con,$query1);
                       if(isset($result))
                        { }
                     }
                    $sql="INSERT INTO `deposit` (`Accno`, `Amount`, `Date`, `Acctype`) 
                    VALUES ('$accno','$amt',current_timestamp(),'$Actype');";    
      
                    if(mysqli_query($con,$sql))
                      {
                        $_SESSION['status']="Amount Deposited Successfully !";
                        $_SESSION['status_code']="success";
                        header('Location: deposit.php');
      
                      }
                      else
                      {
                        $_SESSION['status']="DataBase Error!";
                        $_SESSION['status_code']="error";
                        header('Location: deposit.php');
      
                      }


                  }
                  else{
                    $_SESSION['status']="Account Not Found !";
                    $_SESSION['status_code']="warning";
                    header('Location: deposit.php');


                  }
              }
              else if($Actype=="current")
              {
                $query="SELECT * FROM `current` where accountno='$accno'";
                $query_run=mysqli_query($con,$query);
                $rows = mysqli_num_rows($query_run);
                  if($rows>0)
                  {
                while($row=mysqli_fetch_assoc($query_run))
                  {
                      $bal= $row['balance'];
                      
                      $bal=$bal+$amt;
                        
                      $query1="UPDATE `current` SET balance='$bal' where accountno='$accno'";
                      $result=mysqli_query($con,$query1);
                      if(isset($result))
                       { }
                  }
                  $sql="INSERT INTO `deposit` (`Accno`, `Amount`, `Date`, `Acctype`) 
                  VALUES ('$accno','$amt',current_timestamp(),'$Actype');";    
    
                  if(mysqli_query($con,$sql))
                    {
                      $_SESSION['status']="Amount Deposited Successfully !";
                      $_SESSION['status_code']="success";
                      header('Location: deposit.php');
    
                    }
                    else
                    {
                      $_SESSION['status']="DataBase Error!";
                      $_SESSION['status_code']="error";
                      header('Location: deposit.php');
    
                    }

                  }else{

                    $_SESSION['status']="Account Not Found !";
                    $_SESSION['status_code']="warning";
                    header('Location: deposit.php');

                  }

              }

             
                mysqli_close($con);
  

            }


          }

      
        }


?>