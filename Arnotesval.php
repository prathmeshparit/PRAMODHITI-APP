<?php
session_start();
include('includes/database.php');


$Amt=0;
$Ten=$_POST['ten'];
$Twenty=$_POST['twenty'];
$Fifty=$_POST['fifty'];
$Hundred=$_POST['hundred'];
$Fhundred=$_POST['fhundred'];
$Twohundred=$_POST['twohundred'];
$Twothousand=$_POST['twothousand'];

if(isset($_POST['add']))
{

  if($Ten<0)
  {  
    $_SESSION['status']="Enter Valid Number";
    $_SESSION['status_code']="error";
    header('Location: addremove.php');
  }
  else
  {
    if($Twenty<0)
    {  
      $_SESSION['status']="Enter Valid Number";
      $_SESSION['status_code']="error";
      header('Location: addremove.php');
    }
    else
    {
      if($Fifty<0)
      {  
        $_SESSION['status']="Enter Valid Number";
        $_SESSION['status_code']="error";
        header('Location: addremove.php');
      }
      else
      {
        if($Hundred<0)
            {  
              $_SESSION['status']="Enter Valid Number";
              $_SESSION['status_code']="error";
              header('Location: addremove.php');
            }
            else
            {
              if($Fhundred<0)
                {  
                  $_SESSION['status']="Enter Valid Number";
                  $_SESSION['status_code']="error";
                  header('Location: addremove.php');
                }
                else
                {
                  if($Twohundred<0)
                    {  
                      $_SESSION['status']="Enter Valid Number";
                      $_SESSION['status_code']="error";
                      header('Location: addremove.php');
                    }
                    else
                    {
                      if($Twothousand<0)
                        {  
                          $_SESSION['status']="Enter Valid Number";
                          $_SESSION['status_code']="error";
                          header('Location: addremove.php');
                        }
                        else
                        {
                         
                                    $query="SELECT * FROM `notes`";
                                    $query_run=mysqli_query($con,$query);
                                    while($row=mysqli_fetch_assoc($query_run))
                                      {
                                        // $totalamt= $row['Amount'];
                                        // $totalamt=$totalamt+$Amt; 
                                      
                                        

                                        $totalten= $row['Ten'];
                                        $totalten=$totalten+$Ten; 
                                      
                                        $total20= $row['Twenty'];
                                        $total20=$total20+$Twenty; 
                                      
                                        $total50= $row['Fifty'];
                                        $total50=$total50+$Fifty; 
                                      
                                        $total100= $row['Hundred'];
                                        $total100=$total100+$Hundred; 
                                      
                                        $total200= $row['Twohundred'];
                                        $total200=$total200+$Twohundred; 
                                      
                                        $total500= $row['Fivehundred'];
                                        $total500=$total500+$Fhundred; 
                                      
                                        $total2000= $row['Twothousand'];
                                        $total2000=$total2000+$Twothousand; 
                                      
                                      
                                        $query1="UPDATE `notes` SET  Ten='$totalten' , Twenty='$total20', 
                                        Fifty='$total50' , Hundred='$total100' , Twohundred='$total200' , Fivehundred='$total500' , 
                                        Twothousand='$total2000' WHERE id='1'";
                                        $result=mysqli_query($con,$query1);
                                        if(isset($result))
                                           { 
                                            $_SESSION['status']="Successfully Added";
                                            $_SESSION['status_code']="success";
                                            header('Location: addremove.php');

                                           } 
                                           else
                                           {
                                            $_SESSION['status']="Database Error !";
                                            $_SESSION['status_code']="error";
                                            header('Location: addremove.php');

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




if(isset($_POST['remove']))
{
if($Amt<=0)
  {  
    $_SESSION['status']="Enter Valid Number";
    $_SESSION['status_code']="error";
    header('Location: addremove.php');
  }
else
{
  if($Ten<0)
  {  
    $_SESSION['status']="Enter Valid Number";
    $_SESSION['status_code']="error";
    header('Location: addremove.php');
  }
  else
  {
    if($Twenty<0)
    {  
      $_SESSION['status']="Enter Valid Number";
      $_SESSION['status_code']="error";
      header('Location: addremove.php');
    }
    else
    {
      if($Fifty<0)
      {  
        $_SESSION['status']="Enter Valid Number";
        $_SESSION['status_code']="error";
        header('Location: addremove.php');
      }
      else
      {
        if($Hundred<0)
            {  
              $_SESSION['status']="Enter Valid Number";
              $_SESSION['status_code']="error";
              header('Location: addremove.php');
            }
            else
            {
              if($Fhundred<0)
                {  
                  $_SESSION['status']="Enter Valid Number";
                  $_SESSION['status_code']="error";
                  header('Location: addremove.php');
                }
                else
                {
                  if($Twohundred<0)
                    {  
                      $_SESSION['status']="Enter Valid Number";
                      $_SESSION['status_code']="error";
                      header('Location: addremove.php');
                    }
                    else
                    {
                      if($Twothousand<0)
                        {  
                          $_SESSION['status']="Enter Valid Number";
                          $_SESSION['status_code']="error";
                          header('Location: addremove.php');
                        }
                        else
                        {
                          $query="SELECT * FROM `notes`";
                          $query_run=mysqli_query($con,$query);
                          while($row=mysqli_fetch_assoc($query_run))
                             {
                                // $totalamt= $row['Amount'];
                                // $totalamt=$totalamt-$Amt;
                                
                                  $totalten= $row['Ten'];
                                  $totalten=$totalten-$Ten; 
                                  if($totalten<0)
                                  {
                                    $_SESSION['status']="Insufficient Note of 10";
                                    $_SESSION['status_code']="warning";
                                    header('Location: addremove.php');
                                  }
                                  else
                                  {
                                    $total20= $row['Twenty'];
                                $total20=$total20-$Twenty; 
                                      if($total20<0)
                                      {
                                        $_SESSION['status']="Insufficient Note of 20";
                                        $_SESSION['status_code']="warning";
                                        header('Location: addremove.php');
                                      }
                                      else
                                      {
                                        $total50= $row['Fifty'];
                                $total50=$total50-$Fifty; 
                                          if($total50<0)
                                          {
                                            $_SESSION['status']="Insufficient Note of 50";
                                            $_SESSION['status_code']="warning";
                                            header('Location: addremove.php');
                                          }
                                          else
                                            {
                                              $total100= $row['Hundred'];
                                              $total100=$total100-$Hundred; 

                                              if($total100<0)
                                              {
                                                $_SESSION['status']="Insufficient Note of 100";
                                    $_SESSION['status_code']="warning";
                                    header('Location: addremove.php');
                                                  }
                                                  else
                                                  {
                                                    $total200= $row['Twohundred'];
                                                    $total200=$total200-$Twohundred; 
                                                    if($total200<0)
                                                    {
                                                      $_SESSION['status']="Insufficient Note of 200";
                                                      $_SESSION['status_code']="warning";
                                                      header('Location: addremove.php');
                                                    }
                                                    else
                                                    {
                                                      $total500= $row['Fivehundred'];
                                                      $total500=$total500-$Fhundred; 
                                                      if($total500<0)
                                                      {
                                                        $_SESSION['status']="Insufficient Note of 500";
                                                        $_SESSION['status_code']="warning";
                                                        header('Location: addremove.php');
                                                      }
                                                      else
                                                      {
                                                        $total2000= $row['Twothousand'];
                                                        $total2000=$total2000-$Twothousand; 
                                                        if($total2000<0)
                                                        {
                                                          $_SESSION['status']="Insufficient Note of 2000";
                                                          $_SESSION['status_code']="warning";
                                                          header('Location: addremove.php');
                                                        }
                                                        else{
                                                          $query1="UPDATE `notes` SET  Ten='$totalten' , Twenty='$total20', 
                                                          Fifty='$total50' , Hundred='$total100' , Twohundred='$total200' , Fivehundred='$total500' , 
                                                          Twothousand='$total2000' WHERE id='1'";
                                                          $result=mysqli_query($con,$query1);
                                                          if(isset($result))
                                                             { 
                                                              $_SESSION['status']="Successfully Added";
                                                              $_SESSION['status_code']="success";
                                                              header('Location: addremove.php');
                  
                                                             } 
                                                             else
                                                             {
                                                              $_SESSION['status']="Database Error !";
                                                              $_SESSION['status_code']="error";
                                                              header('Location: addremove.php');
                  
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


                    }

                }

            }

      }

    }
  }


}






















  

 


      

?>