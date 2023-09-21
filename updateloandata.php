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
            <h1 class="h3 mb-0 text-gray-800" >Edit Loan Account</h1>
        </div>
        <div class="card shadow mb-4">
       <div class="card-body" > 

       <?php
                include('includes/database.php');
               
                if(isset($_POST['edit']))
                {
                    $acno = $_POST['editacno'];
                  
                    $sql="SELECT * FROM `loan` WHERE accountno='$acno'";
                    $query_run = mysqli_query($con,$sql);

                    foreach($query_run as $row)
                    {
        ?>
       
       
    <!-- <div class="form-group">
    <label >Full Name</label>
  <input type="text" name="fname"   class="form-control" id="validationDefault01"  required>
    </div> -->
    <form class="row g-3" action="updateloandataval.php" method="POST">

        <div class="col-md-5">
          <label for="validationDefault01" class="form-label">Full Name</label>
          <input type="text" name="fname" value="<?php  echo $row['fname']; ?>" class="form-control" id="validationDefault01"  required>
          
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Account No</label>
          <input type="number" name="editacno" value="<?php  echo $row['accountno']; ?>" class="form-control" id="validationDefault02"  required>
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Date of Birth</label>
          <input type="date" name="dob" value="<?php  echo $row['dob']; ?>" class="form-control" id="validationDefault02"  required>
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Age</label>
          <input type="number" name="age" value="<?php  echo $row['age']; ?>" class="form-control" id="validationDefault02"  required>
        </div>

        
        <div class="col-md-5">
          <label for="validationDefault03" class="form-label">Address</label>
          <textarea  name="address" value="<?php  echo $row['address']; ?>" class="form-control" id="validationDefault03" required>
          </textarea>
        </div>

        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Phone Number</label>
          <input type="number" name="phoneno" value="<?php  echo $row['phoneno']; ?>" class="form-control" id="validationDefault02"  required>
        </div>
      
        <div class="col-md-5">
          <label for="validationDefault02" class="form-label">Email</label>
          <input type="email" name="email" value="<?php  echo $row['email']; ?>" class="form-control" id="validationDefault02"  required>
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
          <input type="text" name="nationality" value="<?php  echo $row['nationality']; ?>" class="form-control" id="validationDefault02"  required>
        </div>


        <div class="col-md-5">
              <label  class="form-label">Senior Citizen    :    </label>
             
                    <input  type="radio" name="scitizen" id="inlineRadio1" value="Yes">
                    <label  for="inlineRadio1">YES</label>
                
                    <input  type="radio" name="scitizen" id="inlineRadio2" value="No">
                    <label  for="inlineRadio2">NO</label>
        
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Educational Qualification</label>
                <input type="text" name="eduqualification" value="<?php  echo $row['eduqualification']; ?>" class="form-control" id="validationDefault02"  required>
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Occupation</label>
                <input type="text" name="occupation" value="<?php  echo $row['occupation']; ?>" class="form-control" id="validationDefault02"  required>
            </div>

            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Annual Income</label>
                <input type="number" name="aincome" value="<?php  echo $row['aincome']; ?>" class="form-control" id="validationDefault02"  required>
            </div>

            <div class="col-md-5">
                                <label for="validationDefault04" class="form-label">Loan Type</label>
                                <select name = "loantype" class="form-select" id="validationDefault04" required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>Personal</option>
                                     <option>Gold</option>
                                     <option>Home</option>
                                     <option>Agriculture</option>
                                </select>
                             </div>


        <div class="col-md-8">
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
        </div>

        <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Sanctioned Amount</label>
                <input type="number" name="sanamount" value="<?php  echo $row['sanamount']; ?>" class="form-control" id="validationDefault02"  required>
            </div>


            <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Tenure(In Years)</label>
                <input type="number" name="tenure" value="<?php  echo $row['tenure']; ?>" class="form-control" id="validationDefault02"  required>
            </div>


        <div class="col-md-8">
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
          <label for="validationDefault02" class="form-label"></label>
        </div>

                    <div class="col-6">

                      <button class="btn btn-primary" type="submit" name="update">UPDATE</button>
                    </div>

                    <div class="col-6">

                      <a class="btn btn-danger"  href="loandata.php" >CANCLE</a>
                    </div>



                    </form>

        <?php
                    }
        
                     
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
   