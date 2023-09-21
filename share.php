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
            <h1 class="h3 mb-0 text-gray-800" >Create a Shares </h1>
        </div>

        <div class="card shadow mb-4">
       <div class="card-body" >   
        <div class="container">
            
        <form class="row g-3" action="shareval.php" method="post">
        
                  <div class="col-md-5">
                    <label for="validationDefault01" class="form-label">Share Holder Name</label>
                    <input type="text" name="sname" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-5">
                    <label for="validationDefault02" class="form-label">Share Account No</label>
                    <input type="number" name="saccountno" class="form-control" id="validationDefault02"  required>
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
                    <label for="validationDefault02" class="form-label">Share Amount</label>
                    <input type="number" name="samount" class="form-control" id="validationDefault02"  required>
                  </div>

                 
                  <div class="col-md-8">
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                  </div>

                  <div class="col-12">
                  
                    <button class="btn btn-primary" name="submit" type="submit">CREATE A SHARE</button>
                </div>
                   
                  
            </form>
</div></div>
        </div>
      

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    