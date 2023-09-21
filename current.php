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
            <h1 class="h3 mb-0 text-gray-800" >Create a Current Account</h1>
    
        </div>
        
        <div class="card shadow mb-4">
       <div class="card-body" >        
        <div class="container">

        <form class="row g-3" action="Crtval.php" method="POST">
        
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
          <input type="date" name="dob" class="form-control" id="validationDefault02"  required>
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Age</label>
          <input type="text" name="age" class="form-control" id="validationDefault02" maxlength="2" required>
        </div>

        
        <div class="col-md-5">
          <label for="validationDefault03" class="form-label">Address</label>
          <textarea  name="text" class="form-control" id="validationDefault03" maxlength="150" required>
          </textarea>
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Phone Number</label>
          <input type="text" name="mon" class="form-control" id="validationDefault02"  maxlength="10" minlength="10" pattern="\d{10}" title="Please enter exactly 10 digits"  required>
        </div>
      
        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="validationDefault02"  required>
        </div>

        <div class="col-md-5">
              <label  class="form-label">Gender     :    </label>
             
                    <input  type="radio" name="gender" id="inlineRadio1" value="Male">
                    <label  for="inlineRadio1">Male</label>
                
                    <input  type="radio" name="gender" id="inlineRadio2" value="Female">
                    <label  for="inlineRadio2">Female</label>
        
  </div>

  <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Nationality</label>
          <input type="text" name="nation" class="form-control" id="validationDefault02"  required>
        </div>


        <div class="col-md-5">
              <label  class="form-label">Senior Citizen    :    </label>
             
                    <input  type="radio" name="citizen" id="inlineRadio1" value="yes">
                    <label  for="inlineRadio1">YES</label>
                
                    <input  type="radio" name="citizen" id="inlineRadio2" value="no">
                    <label  for="inlineRadio2">NO</label>
        
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Educational Qualification</label>
                <input type="text" name="eq" class="form-control" id="validationDefault02"  required>
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Occupation</label>
                <input type="text" name="ocp" class="form-control" id="validationDefault02"  required>
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Annual Income</label>
                <input type="number" name="ai" class="form-control" id="validationDefault02"  required>
            </div>




        <div class="col-md-8">
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
        </div>

        



        <div class="col-12">
        
          <button class="btn btn-primary" type="submit" name="submit">CREATE AN ACCOUNT</button>
      </div>
         
        
  </form>
        </div>
</div> </div>
      

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    