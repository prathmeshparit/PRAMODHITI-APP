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
                <h1 class="h3 mb-0 text-gray-800" >User Registration</h1>
               </div>
              <div class= "container">
                  <form class="row g-5" action="regivalidation.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-5">
                          <label for="validationDefault01" class="form-label">First name</label>
                          <input type="text" name="fname" class="form-control" id="validationDefault01" required>
                             
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault02" class="form-label">Last name</label>
                          <input type="text"  name="lname" class="form-control" id="validationDefault02"  required>
                        </div>
                        <div class="col-md-5">
                          <label for="validationDefaultUsername" class="form-label">Username</label>
                          <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="text" name="uname" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                          </div>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault01" class="form-label">Password</label>
                          <input type="password" name="pass" class="form-control" id="validationDefault01" required>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault03" class="form-label">City</label>
                          <input type="text" name="city" class="form-control" id="validationDefault03" required>
                        </div>

                        <div class="col-md-5">
                          <label for="validationDefault03" class="form-label">State</label>
                          <input type="text" name="state" class="form-control" id="validationDefault03" required>
                        </div>
                        
                        <div class="col-md-5">
                          <label for="validationDefault05" class="form-label">Zip</label>
                          <input type="text" name="zip" class="form-control" id="validationDefault05" required>
                        </div>
                        <div class="col-md-5">
                          <label for="validationDefault05" class="form-label">Upload Your Image</label>
                          <input type="file"  name="image" class="form-control" id="validationDefault05" required>
                        </div>
                       

                        <div class="col-md-5">
                        <label for="validationDefault05" class="form-label">Gender    </label>
                        <div class="form-check form-check-inline">
                        
                              <input class="form-check-input" value="Male" type="radio" name="r1" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input"  value="Female" type="radio" name="r1" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>

                        <div class="col-md-5">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="atype" required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>manager</option>
                                     <option>clerk</option>
                                </select>
                             </div>
                       


                        <div class="col-12">
                           <div class="form-check">
                             
                             <label class="form-check-label" for="invalidCheck2">
                             
                             </label>
                           </div>
                         </div>
                        
                        <div class="col-12">
                          <button class="btn btn-primary"  name="register" type="submit">REGISTER</button>
                        </div>
                      </form>                                              
                          
              </div> 
                      
  </div>
  <!-- /.container-fluid -->
                      
      </div>
  <!-- End of Main Content -->
                      
                      
                      
                      
                      
      <?php 
     include('includes/scripts.php');
    include('includes/footer.php');
     ?>

 