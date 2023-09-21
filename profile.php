<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" >User Profile</h1>

           
        </div>
        <div class="card shadow mb-4">
       <div class="card-body" >  
       <?php
        include('includes/database.php');
        $user = $_SESSION['username'];
       
        
        $sql="SELECT * FROM `admin` WHERE username='$user'";
         $query_run = mysqli_query($con,$sql);
         foreach($query_run as $row)
         {

         ?>
        <form class="row g-5" action="" method="" enctype="multipart/form-data">
        <div class="col-md-4">
                        
                        <label for="validationDefault01" class="form-label" ></label>
                        <input type="hidden" name="fname"  class="form-control" id="validationDefault01" required>
                           
                      </div>
            <?php
                 echo' <img class="rounded-circle"
                        src="upload/'.$row['image'].'" width="200px" height="200px" alt="Image">'
              ?>      

<div class="col-md-4">
                        
                        <label for="validationDefault01" class="form-label" ></label>
                        <input type="hidden" name="fname"  class="form-control" id="validationDefault01" required>
                           
                      </div>

               
                        <div class="col-md-5">
                        
                          <label for="validationDefault01" class="form-label">First name</label>
                          <input type="text" name="fname"  value="<?php  echo $row['fname']; ?>" class="form-control" id="validationDefault01" required>
                             
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault02" class="form-label">Last name</label>
                          <input type="text"  value="<?php  echo $row['lname']; ?>"  name="lname" class="form-control" id="validationDefault02"  required>
                        </div>
                        <div class="col-md-5">
                          <label for="validationDefaultUsername" class="form-label">Username</label>
                          <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text"  value="<?php  echo $row['username']; ?>" name="uname" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                          </div>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault01" class="form-label">Password</label>
                          <input type="password"  value="<?php  echo $row['password']; ?>" name="pass" class="form-control" id="validationDefault01" required>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault03" class="form-label">City</label>
                          <input type="text"  value="<?php  echo $row['city']; ?>" name="city" class="form-control" id="validationDefault03" required>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault03" class="form-label">State</label>
                          <input type="text"  value="<?php  echo $row['state']; ?>" name="state" class="form-control" id="validationDefault03" required>
                        </div>
                        
                        <div class="col-md-5">
                          <label for="validationDefault05" class="form-label">Zip</label>
                          <input type="text"  value="<?php  echo $row['zip']; ?>" name="zip" class="form-control" id="validationDefault05" required>
                        </div>
                       

                        <div class="col-md-5">
                        <label for="validationDefault05" class="form-label">Gender    </label>
                        <input type="text"  value="<?php  echo $row['gender']; ?>" name="" class="form-control" id="validationDefault05" required>
                        </div>

                        
                      </form>     

                <?php
         }
         ?>        

       
       
       


       </div>
       </div>


      

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    