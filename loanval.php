<?php
session_start();
include('includes/database.php');
if(isset($_POST['submit']))
{

      $fname=$_POST['fname'];
      $accountno=$_POST['accountno'];
      $dob=$_POST['dob'];
      $age=$_POST['age'];
      $address=$_POST['address'];
      $phoneno=$_POST['phoneno'];
      $email=$_POST['email'];
      $nationality=$_POST['nationality'];
      $eduqualification=$_POST['eduqualification'];
      $occupation=$_POST['occupation'];
      $aincome=$_POST['aincome'];
      $loantype=$_POST['loantype'];
      $sanamount=$_POST['sanamount'];
      $tenure=$_POST['tenure'];
      $actype="loan";
      $gender= $_POST['gender'];
      $scitizen=$_POST['scitizen'];
         

        if($scitizen=="Yes")
          {
            $rate=10;
          }
        else
          {
            $rate=9;
          }

// function to calculate the emi
function calculate_emi($sanamount, $rate, $tenure) 
                    { 
                        $emi;
                        // one month interest 
                        $rate = $rate / (12 * 100); 
                        // one month period 
                        $tenure = $tenure * 12;  
                          
                        $emi = ($sanamount * $rate * pow(1 + $rate, $tenure)) /  
                                      (pow(1 + $rate, $tenure) - 1); 
                      
                        return ($emi); 
                    } 
                    


      // $SIofrd=$Deposit*$Tenure*($Tenure+1)*$rate/2400;
      // $Totalamt=$SIofrd+($Deposit*$Tenure);

      
      if(!preg_match ("/^[a-zA-z ]*$/", $fname))    
      {
        $_SESSION['status']="Enter valid Name";
        $_SESSION['status_code']="error";
        header('Location: loan.php');
      }
      else
      {
        if($accountno<=0)
        {
          $_SESSION['status']="Enter Valid Account No";
          $_SESSION['status_code']="error";
          header('Location: loan.php');
        }
        else
        {
          if($Age<=0 && $Age >100)
          {
            $_SESSION['status']="Enter Valid Age";
            $_SESSION['status_code']="error";
            header('Location: loan.php');
          }

          else
          { 
            $length = strlen($phoneno);  

                if ( $length < 10 && $length > 10) 
                {  
                    $_SESSION['status']="Enter Valid Phone no";
                    $_SESSION['status_code']="error";
                    header('Location: loan.php');
            
                }    

          else
          {
            if(!preg_match ("/^[a-zA-z]*$/", $nationality))
            {
              $_SESSION['status']="Enter Valid Nationality";
              $_SESSION['status_code']="error";
              header('Location: loan.php');
            }
            else
            {

              if (!preg_match ("/^[a-zA-z ]*$/", $occupation) ) 
              {  
                
                  $_SESSION['status']="Only Alphabets are required in Occupation";
                  $_SESSION['status_code']="error";
                  header('Location: loan.php');
              }
             else
              {
                if (!preg_match ("/^[a-zA-z ]*$/", $eduqualification) ) 
                {  
                  
                    $_SESSION['status']="Only Alphabets are required in Education Qualification";
                    $_SESSION['status_code']="error";
                    header('Location: loan.php');
                }  
             else
                {
                  if ($sanamount<=0 ) 
                  {  
                    
                      $_SESSION['status']="Enter valid Sanctioned amount";
                      $_SESSION['status_code']="error";
                      header('Location: loan.php');
                  }  
    
            else
            {
              if($tenure<=0)
                {
                  $_SESSION['status']="Enter Valid Tenure";
                  $_SESSION['status_code']="error";
                  header('Location: loan.php');
                } 
                else
                {
                  
                    $emi = calculate_emi($sanamount, $rate, $tenure);
                    $finalamount = $emi*$tenure*12;                   
                    $interest = $finalamount-$sanamount;
                  
                                $sql="INSERT INTO `lucifer`.`loan` (`fname`, `accountno`, `dob`, `age`, `address`, `phoneno`, 
                                `email`, `gender`, `nationality`, `scitizen`, `eduqualification`, `occupation`, `aincome`, `loantype`, 
                                `sanamount`, `tenure`, `actype`, `date`, `emi`, `interest`,`rate`,`finalamount`) 
                                VALUES ('$fname', '$accountno', '$dob', '$age', '$address', '$phoneno', '$email', '$gender', '$nationality', 
                                '$scitizen', '$eduqualification', '$occupation', '$aincome',
                                 '$loantype', '$sanamount', '$tenure', '$actype', current_timestamp(), '$emi','$interest', '$rate','$finalamount');";

                                if(mysqli_query($con,$sql))
                                 {
                                  $_SESSION['status']="Loan Approved !";
                                  $_SESSION['status_code']="success";
                                  header('Location: loan.php');
                                
                                 }
                                 else
                                 {
                                  $_SESSION['status']="Database Error!";
                                  $_SESSION['status_code']="error";
                                  header('Location: loan.php');
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

    }//main       


  ?>