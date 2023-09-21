<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" >Loan Account DataBase</h1>
</div>

<div class="table-responsive">
    <?php
                include('includes/database.php');
                $sql="SELECT * FROM `loan`";
                $query_run = mysqli_query($con,$sql);
    ?>

<table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">ACCOUNT NO</th>
                  <th scope="col">NAME</th>
                  <th scope="col">DOB</th>
                  <th scope="col">AGE</th>
                  <th scope="col">ADDRESS</th>
                  <th scope="col">PHONE NO</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">GENDER</th>
                  <th scope="col">NATIONALITY</th>
                  <th scope="col">SENIOR CITIZEN</th>
                  <th scope="col">EDU QUALIFICATION</th>
                  <th scope="col">OCCUPATION</th>
                  <th scope="col">DATE OF CREATION</th>
                  <th scope="col">ANNUAL INCOME</th>
                  <th scope="col">LOAN TYPE</th>
                  <th scope="col">SANCTIONED AMOUNT</th>
                  <th scope="col">TENURE</th>

                  <th scope="col">ACCOUNT TYPE</th>
                  <th scope="col">EMI AMOUNT</th>
                  <th scope="col">TOTAL INTEREST AMT.</th>
                  <th scope="col">INTEREST RATE</th>
                  <th scope="col">FINAL AMOUNT</th>


                  <!-- <th scope="col">EDIT</th> -->
                  <th scope="col">DELETE</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                          if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                      ?>
                      
                <tr>
                
               
                <td> <?php  echo $row['accountno']; ?></td>
                <td> <?php  echo $row['fname']; ?></td>
                <td> <?php  echo $row['dob']; ?></td>
                <td> <?php  echo $row['age']; ?></td>
                <td> <?php  echo $row['address']; ?></td>
                <td> <?php  echo $row['phoneno']; ?></td>
                <td> <?php  echo $row['email']; ?></td>
                <td> <?php  echo $row['gender']; ?></td>
                <td> <?php  echo $row['nationality']; ?></td>
                <td> <?php  echo $row['scitizen']; ?></td>
                <td> <?php  echo $row['eduqualification']; ?></td>
                <td> <?php  echo $row['occupation']; ?></td>
                <td> <?php  echo $row['date']; ?></td>
                <td> <?php  echo $row['aincome']; ?></td>
                <td> <?php  echo $row['loantype']; ?></td>
                <td> <?php  echo $row['sanamount']; ?></td>
                <td> <?php  echo $row['tenure']; ?></td>

                <td> <?php  echo $row['actype']; ?></td>
                <td> <?php  echo $row['emi']; ?></td>
                <td> <?php  echo $row['interest']; ?></td>
                <td> <?php  echo $row['rate']; ?></td>
                <td> <?php  echo $row['finalamount']; ?></td>


                <!-- <td> <form action="updateloandata.php" method="POST">
                <input type="hidden" name="editacno" value="<?php  echo $row['accountno']; ?>">
                <button type="submit"  name="edit" class="btn btn-success" >EDIT </button> 
                </form>
               </td> -->

                <td>
                <form action="delloan.php" method="POST">
                <input type="hidden" name="dacno" value="<?php  echo $row['accountno']; ?>">
                
                <button type="submit"  name="remove" class="btn btn-danger" >DELETE </button> </td>
                </tr>
               
                <?php
                            }
                          }
                          else
                          {
                            echo "No Record Found !";
                          }
                      ?>
                  
               
              </tbody>
    </table>

          

</div>



<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
   