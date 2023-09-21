<?php

session_start();

include('includes/database.php');

if(isset($_POST['submit']))
  {
    $saccno=$_POST['sacno'];
    $sacctype=$_POST['sactype'];
    $raccno=$_POST['racno'];
    $racctype=$_POST['ractype'];
    $amt=$_POST['amount'];

    //  if sender have savings account   
    if($sacctype=="Saving")
    {
            if($racctype=="Saving")
            {
                // reducing amt from sender
                $query="SELECT * FROM `saving` where accountno='$saccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $sbal= $row['balance'];
        
                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {
                            $sbal=$sbal-$amt;
                            $query1="UPDATE `saving` SET balance='$sbal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            
                            if($result)
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            } 
                        
                        }

                    }
                }

                // adding amt to reciver
                $query="SELECT * FROM `saving` where accountno='$raccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $rbal= $row['balance'];

                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {
                            $rbal=$rbal+$amt;
                            $query1="UPDATE `saving` SET balance='$rbal' where accountno='$raccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
    
                            $sql="INSERT INTO `intransfer` (`senderacno`, `senderactype`, `reciveracno`, `reciveractype`, `amt`, `date`) 
                            VALUES ('$saccno','$sacctype','$raccno','$racctype','$amt',current_timestamp());";    
    
                            if(mysqli_query($con,$sql))
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                              $_SESSION['status']="Transfer Failed!";
                              $_SESSION['status_code']="error";
                              header('Location: intransfer.php');
                            }
          
                            mysqli_close($con);
    
                        }   
                    
                    }
                    
                }                
                
            }
        else
            {
                // reducing amt from sender
                $query="SELECT * FROM `saving` where accountno='$saccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $sbal= $row['balance'];
        
                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {  
                            $sbal=$sbal-$amt;
                            $query1="UPDATE `saving` SET balance='$sbal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            
                            if($result)
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            } 
                        } 
                       
                    }
                }

                // adding amt to reciver
                $query="SELECT * FROM `current` where accountno='$raccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $rbal= $row['balance'];

                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {
                            $rbal=$rbal+$amt;
                            $query1="UPDATE `current` SET balance='$rbal' where accountno='$raccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }

                            $sql="INSERT INTO `intransfer` (`senderacno`, `senderactype`, `reciveracno`, `reciveractype`, `amt`, `date`) 
                            VALUES ('$saccno','$sacctype','$raccno','$racctype','$amt',current_timestamp());";    

                            if(mysqli_query($con,$sql))
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            }
        
                            mysqli_close($con);
                        
                        }
                    }  
                    
                }                
    
            }

    }
//  if sender have current account   
   else
   {
            if($racctype=="Saving")
            {
                // reducing amt from sender
                $query="SELECT * FROM `current` where accountno='$saccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $sbal= $row['balance'];
        
                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {

                            $sbal=$sbal-$amt;
                            $query1="UPDATE `current` SET balance='$sbal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            
                            if($result)
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            } 
                        }
                    }
                }

                // adding amt to reciver
                $query="SELECT * FROM `saving` where accountno='$raccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $rbal= $row['balance'];

                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {

                            $rbal=$rbal+$amt;
                            $query1="UPDATE `saving` SET balance='$rbal' where accountno='$raccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            $sql="INSERT INTO `intransfer` (`senderacno`, `senderactype`, `reciveracno`, `reciveractype`, `amt`, `date`) 
                            VALUES ('$saccno','$sacctype','$raccno','$racctype','$amt',current_timestamp());";    

                            if(mysqli_query($con,$sql))
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            }
        
                            mysqli_close($con);
                        
                        }
                    }
                }                
                
            }
        else
            {
                // reducing amt from sender
                $query="SELECT * FROM `current` where accountno='$saccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $sbal= $row['balance'];
        
                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {

                            $sbal=$sbal-$amt;
                            $query1="UPDATE `current` SET balance='$sbal' where accountno='$saccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            
                            if($result)
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            } 
                        }    
                    }
                }

                // adding amt to reciver
                $query="SELECT * FROM `current` where accountno='$raccno'";
                $query_run=mysqli_query($con,$query);
        
                while($row=mysqli_fetch_assoc($query_run))
                {
                    $rbal= $row['balance'];

                    if($sbal <=500)
                    {
                      $_SESSION['status']="Insufficient Balance !";
                      $_SESSION['status_code']="error";
                      header('Location: intransfer.php');
                    }
                    else
                    {
                        if($saccno==$raccno && $sacctype==$racctype)
                        {
                            $_SESSION['status']="Same Account";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                        }  
                        else
                        {

                            $rbal=$rbal+$amt;
                            $query1="UPDATE `current` SET balance='$rbal' where accountno='$raccno'";
                            $result=mysqli_query($con,$query1);
                            if(isset($result))
                            { }
                            $sql="INSERT INTO `intransfer` (`senderacno`, `senderactype`, `reciveracno`, `reciveractype`, `amt`, `date`) 
                            VALUES ('$saccno','$sacctype','$raccno','$racctype','$amt',current_timestamp());";    

                            if(mysqli_query($con,$sql))
                            {
                                $_SESSION['status']="Amount Transfered!";
                                $_SESSION['status_code']="success";
                                header('Location: intransfer.php');
                            }
                            else
                            {
                            $_SESSION['status']="Transfer Failed!";
                            $_SESSION['status_code']="error";
                            header('Location: intransfer.php');
                            }
        
                            mysqli_close($con);
                        }
                    }
                    
                }                
    
            }

  
   } 
  }

?>