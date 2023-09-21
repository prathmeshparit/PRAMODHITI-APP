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
            <h1 class="h3 mb-0 text-gray-800" >Create a Fixed Deposite Account</h1>
        </div>

        <div class="card shadow mb-4">
       <div class="card-body" > 
        <div class="container">
              
            
        <form class="row g-3" action="fixedval.php" method="post">
        
                  <div class="col-md-5">
                    <label for="validationDefault01" class="form-label">Full Name</label>
                    <input type="text" name="fname" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Account No</label>
                    <input type="number" name="accountno" class="form-control" id="validationDefault02"  required>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Date of Birth</label>
                    <input type="Date" name="dob" class="form-control" id="validationDefault02"  required>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="validationDefault02"  required>
                  </div>

                  
                  <div class="col-md-5">
                    <label for="validationDefault03" class="form-label">Address</label>
                    <textarea  name="address" class="form-control" id="validationDefault03" required>
                    </textarea>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Phone Number</label>
                    <input type="text" name="phoneno" maxlength="10" minlength="10" pattern="\d{10}" class="form-control" id="validationDefault02"  required>
                  </div>
                
                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="validationDefault02"  required>
                  </div>

                  <div class="col-md-5">
                        <label  class="form-label">Gender     :    </label>
                       
                              <input  type="radio" name="gender" id="inlineRadio1" value="male">
                              <label  for="inlineRadio1">Male</label>
                          
                              <input  type="radio" name="gender" id="inlineRadio2" value="female">
                              <label  for="inlineRadio2">Female</label>
                  
            </div>

            <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Nationality</label>
                    <input type="text" name="nationality" class="form-control" id="validationDefault02"  required>
                  </div>



                  <div class="col-md-8">
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                  </div>


                  

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Deposit Amount</label>
                    <input type="number" name="dipoamount" class="form-control" id="validationDefault02"  required>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Duration(In Years)</label>
                    <input type="number" name="tenure" class="form-control" id="validationDefault02"  required>
                  </div>
                  
                  <div class="col-md-8">
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                  </div>

                  <div class="col-12">
                  
                    <button class="btn btn-primary" name="create" type="submit">CREATE AN ACCOUNT</button>
                </div>
                   
                  
            </form>

        </div>
      </div></div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    