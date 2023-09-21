<?php
//include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

?>


<div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" >Search Records Using Account Number and Type</h1>

           
        </div>


<div class="container">
<form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-6 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Enter Account Number"
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
               
            </div>


            <div class="col-md-7">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="account"  required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>Saving</option>
                                     <option>current</option>
                                        </select>
                                </div>

        </form>


        <div class="table-responsive">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `saving`";
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
                  <th scope="col">BALANCE</th>
                  <th scope="col">EDIT</th>
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
                <td> <?php  echo $row['balance']; ?></td>
                <td><button type="submit" class="btn btn-success" >EDIT </button> </td>
                <td><button type="submit" class="btn btn-danger" >DELETE </button> </td>
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

</div>






<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    