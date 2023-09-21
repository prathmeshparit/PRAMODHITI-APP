<?php

session_start();
include('includes/database.php');

if(isset($_POST['submit']))
  {

      $rname=$_POST['rname'];
      $bname=$_POST['bankname'];
      $brname=$_POST['branchname'];
      $accnor=$_POST['acno'];
      $ifscode=$_POST['ifsc'];
      $amt=$_POST['amount'];
      $saccno=$_POST['facno'];
      $Actype=$_POST['account'];


      if (!preg_match ("/^[a-zA-z ]*$/", $rname) ) 
      {  
        
          $_SESSION['status']="Only Alphabets are required in Reciever Name";
          $_SESSION['status_code']="error";
          header('Location: transfer.php');
      }
      else
      {
        if (!preg_match ("/^[a-zA-z ]*$/", $bname) ) 
        {  
          
            $_SESSION['status']="Only Alphabets are required in Bank Name";
            $_SESSION['status_code']="error";
            header('Location: transfer.php');
        }
        else
        {
          if (!preg_match ("/^[a-zA-z]*$/", $brname) ) 
          {  
            
              $_SESSION['status']="Only Alphabets are required in Branch Name";
              $_SESSION['status_code']="error";
              header('Location: transfer.php');
          }
          else
          {
            if($accnor<0)    
            {
              $_SESSION['status']="Enter Valid Account Number";
              $_SESSION['status_code']="error";
              header('Location: transfer.php');
             
            }
            else
            {
              if(strlen($ifscode)<11 and strlen($ifscode)>11)    
              {
                $_SESSION['status']="Enter Valid IFSC code";
                $_SESSION['status_code']="error";
                header('Location: transfer.php');
              }
              else
              {
                if($amt<0)    
                {
                  $_SESSION['status']="Enter Valid Amount";
                  $_SESSION['status_code']="error";
                  header('Location: transfer.php');
                  
                }
                else
                {
                  if($saccno<0)    
                  {
                    $_SESSION['status']="Enter Valid Account Number";
                    $_SESSION['status_code']="error";
                    header('Location: transfer.php');
                    
                  }
                  else
                  {
                    if($Actype=="Saving")
                    {
                       $query="SELECT * FROM `saving` where accountno='$saccno'";
                       $query_run=mysqli_query($con,$query);
                       $rows=mysqli_num_rows($query_run);
                       if($rows>0)
                       {
                       while($row=mysqli_fetch_assoc($query_run))
                         {
                            $bal= $row['balance'];
                           
                           if($bal>$amt)
                             {
                                 $bal=$bal-$amt;
                             }
                           
                            $query1="UPDATE `saving` SET balance='$bal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                              {
                                  
                              }
                            
                          }
                    }

                    else
                  {
                    $_SESSION['status']="Account not found!";
                    $_SESSION['status_code']="warning";
                    header('Location: transfer.php');

                }
                  }
                  
                    else if($Actype=="current")
                    {
                       $query="SELECT * FROM `current` where accountno='$saccno'";
                       $query_run=mysqli_query($con,$query);
                       $rows=mysqli_num_rows($query_run);
                       if($rows>0)
                       {
                       while($row=mysqli_fetch_assoc($query_run))
                         {
                            $bal= $row['balance'];
                           echo "The Balance in Account No $saccno is :$bal";
                           if($bal>$amt)
                             {
                                 $bal=$bal-$amt;
                                 
                             }
                           
                            $query1="UPDATE `current` SET balance='$bal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                              {
                                  
                              }
                            
                          }
                        }

                        else
                        {
                          $_SESSION['status']="Account not found!";
                          $_SESSION['status_code']="warning";
                          header('Location: transfer.php');
      
                      }



                    }
                    else
                    {

                    }

                    $sql="INSERT INTO `lucifer`.`transfer` (`rname`, `bkname`, `brname`, `raccno`, `ifscode`, `amount`, `saccno`, `date`,`acctype`) 
                    VALUES ('$rname', '$bname', '$brname', ' $accnor', '$ifscode', '$amt', ' $saccno', current_timestamp(),'$Actype');";  

                    if(mysqli_query($con,$sql))
                         {
                          $_SESSION['status']="User Created !";
                          $_SESSION['status_code']="success";
                          header('Location: transfer.php');
                        }
                        else
                        {
                            $_SESSION['status']="Database Error !";
                            $_SESSION['status_code']="error";
                            header('Location: transfer.php');
                        
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

?>