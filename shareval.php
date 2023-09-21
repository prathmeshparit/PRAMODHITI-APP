<?php 
session_start();
 $insert = false;
 if(isset($_POST['submit']))
 {
    include('includes/database.php');

 
     
 
 $sname=$_POST['sname'];
 $saccountno=$_POST['saccountno'];
 $dob=$_POST['dob'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $phoneno=$_POST['phoneno'];
 $email=$_POST['email'];
 $nationality=$_POST['nationality'];
 $samount=$_POST['samount'];
 $atype="shares";
 $gender=$_POST['gender'];
 

 function input_data($data) 
 {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


    $sname = input_data($_POST["sname"]);  
       
        if (!preg_match("/^[a-zA-Z ]*$/",$sname))
         {  
          $_SESSION['status']="Enter valid Name !";
          $_SESSION['status_code']="error";
          header('Location: share.php');
         }
         else
         {
          $saccountno = input_data($_POST["saccountno"]);  
    
          if (!preg_match ("/^[0-9]*$/", $saccountno) )
           {  
            $_SESSION['status']="Enter valid Account No !";
                            $_SESSION['status_code']="error";
                            header('Location: share.php');
          } 
         else if($saccountno<=0)
          {
            $_SESSION['status']="Enter valid Account No !";
                            $_SESSION['status_code']="error";
                            header('Location: share.php');
          }
          else
          {
            $age = input_data($_POST["age"]);  

                  if($age<=0 || $age>100)
                  {
                    $_SESSION['status']="Enter valid Age !";
                    $_SESSION['status_code']="error";
                    header('Location: share.php');
                  }  
                  else
                  {
                  
                    $length = strlen ($phoneno);   
                    if (!preg_match ("/^[0-9]*$/", $phoneno) )
                    {  
                      $_SESSION['status']="Enter valid Phone No !";
                      $_SESSION['status_code']="error";
                      header('Location: share.php');
                    } 
                    else if ( $length < 10 && $length > 10) 
                    {  
                      $_SESSION['status']="Enter valid Phone No !";
                      $_SESSION['status_code']="error";
                      header('Location: share.php');
                                
                    }
                    else
                    {
                      $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
                        if (!preg_match ($pattern, $email) )
                        {  
                          $_SESSION['status']="Enter valid Email !";
                          $_SESSION['status_code']="error";
                          header('Location: share.php');

                        }
                        else
                        {
                          $nationality = input_data($_POST["nationality"]);  
      
                          if (!preg_match("/^[a-zA-Z ]*$/",$nationality))
                           {  
                            $_SESSION['status']="Enter valid Nationality !";
                            $_SESSION['status_code']="error";
                            header('Location: share.php');
                           
                           }
                           else
                           {
                            $samount = input_data($_POST["samount"]);  

                            if (!preg_match ("/^[0-9]*$/", $samount) ) 
                            {  
                              $_SESSION['status']="Enter Amount more than O";
                              $_SESSION['status_code']="error";
                              header('Location: share.php');  
                            } 
                            else if($samount<=0)
                           {
                            $_SESSION['status']="Enter Amount more than O";
                            $_SESSION['status_code']="error";
                            header('Location: share.php');
                           
                           }
                           else
                           {
                            $sql =" INSERT INTO `sharesacc` (`sname`, `saccountno`, `dob`, `age`, `address`, `phoneno`, `email`, `gender`, `nationality`, `atype`, `samount`, `date`) 
                            VALUES ('$sname', '$saccountno', '$dob', '$age', '$address', '$phoneno', '$email', '$gender', '$nationality', '$atype', '$samount', current_timestamp());"; 
                            
                            if(mysqli_query($con,$sql))
                            {
                             $_SESSION['status']="Account Created Sucessfully !";
                             $_SESSION['status_code']="success";
                             header('Location: share.php');
                            }
                            else
                            {
                             $_SESSION['status']="Database Error !";
                             $_SESSION['status_code']="error";
                             header('Location: share.php');
       
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
