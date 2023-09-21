 <?php 
 session_start();
 $insert = false;
 if(isset($_POST['submit'])){
     // Set connection variables
    include('includes/database.php');
 
 $bankname=$_POST['bankname'];
 $branchname=$_POST['branchname'];
 $Accountno=$_POST['Accountno'];
 $IFSC_code=$_POST['IFSC_code'];
 $Amount=$_POST['Amount'];
 
 
 function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


         $bankname = input_data($_POST["bankname"]);  
       
        if (!preg_match("/^[a-zA-Z ]*$/",$bankname))
         {  
            $_SESSION['status']="Only Alphabets are required in  Name";
            $_SESSION['status_code']="error";
               header('Location:invest.php');
         } 
         else
         {
            $branchname = input_data($_POST["branchname"]);  
 
                if (!preg_match("/^[a-zA-Z ]*$/",$branchname))
                 {  
                   $_SESSION['status']="Only Alphabets are required in Branch Name";
                      $_SESSION['status_code']="error";
                         header('Location:invest.php');
                } 
                else
                {
                  $Accountno = input_data($_POST["Accountno"]);  

                  if (!preg_match ("/^[0-9]*$/", $Accountno) ) 
                  {  
                     $_SESSION['status']="Enter valid Account Number";
                     $_SESSION['status_code']="error";
                        header('Location:invest.php');
                    
                  }
                  else  if($Accountno<=0)
                  {
                     $_SESSION['status']="Enter valid Account Number";
                     $_SESSION['status_code']="error";
                        header('Location:invest.php');
                  }
                  else
                  {
                     $Amount = input_data($_POST["Amount"]);  

                     if (!preg_match ("/^[0-9]*$/", $Amount) ) 
                     {  
                        $_SESSION['status']="Only numeric value is allowed";
                        $_SESSION['status_code']="error";
                           header('Location:invest.php');
                        
                     } 
                     else if($Amount<=0)
                     {
                        $_SESSION['status']="Enter valid Amount";
                        $_SESSION['status_code']="error";
                           header('Location:invest.php');
                     }
                     else
                     {
                       
                        $sql = "INSERT INTO `otherbankinvest` (`bankname`, `branchname`, `Accountno`, `IFSC_code`, `Amount`, `Date`) 
                              VALUES ('$bankname', '$branchname', '$Accountno', '$IFSC_code', '$Amount', current_timestamp());";

                                          if(mysqli_query($con,$sql))
                                          {
                                           $_SESSION['status']="Investment Successfully Added !";
                                           $_SESSION['status_code']="success";
                                           header('Location: invest.php');

                                          }
                                          else
                                          {
                                           $_SESSION['status']="DataBase Error";
                                           $_SESSION['status_code']="error";
                                           header('Location: invest.php');

                                          }
                        
                                          mysqli_close($con);
                     }

                     }

                  }

                } 

         }

 ?>
  



    

  