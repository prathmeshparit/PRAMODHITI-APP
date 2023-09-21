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
            <h1 class="h3 mb-0 text-gray-800" >Close Account</h1>

           
        </div>
        <div class="card shadow mb-4">
       <div class="card-body" > 
        <div class="container">
        <form class="row g-3" action="Clacval.php" method="POST">

                            <div class="col-md-6">
                               <label for="validationDefault03" class="form-label">Account No</label>
                               <input type="number" name="acno" class="form-control" id="validationDefault03" required>
                             </div>

                             

                             <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="account" required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>Saving</option>
                                     <option>Current</option>
                                     <option>Recurring</option>
                                     <option>Loan</option>
                                     <option>Fixed</option>
                                </select>
                             </div>

                             

                             <div class="col-12">
                               <button class="btn btn-primary" type="submit" name="submit">CLOSE ACCOUNT</button>
                             </div>




        </form>
        </div></div> </div>

      

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    