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
            <h1 class="h3 mb-0 text-gray-800" >Cash Withdrawl</h1>

           
        </div>
        <div class="card shadow mb-4">
       <div class="card-body" > 

        <div class="container">
        <form class="row g-3" action="Wdval.php" method="POST">

                            <div class="col-md-6">
                               <label for="validationDefault03" class="form-label">Account No</label>
                               <input type="number" name="acno" class="form-control" id="validationDefault03" required>
                             </div>

                             <div class="col-md-6">
                               <label for="validationDefault03" class="form-label">Amount</label>
                               <input type="number" name="amount" class="form-control" id="validationDefault03" required>
                             </div>

                            <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>

                             <div class="col-md-5">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="account" required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>Saving</option>
                                     <option>current</option>
                                </select>
                             </div>
                           
                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>

                             <div class="col-6">
                               <button class="btn btn-primary" type="submit" name="submit">WITHDRAWL</button>
                             </div>

                           



        </form>
        <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>
                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>
        <div class="col-6">
        <a class="btn btn-success" href="withdrawlhistory.php">History</a>
        </div>

        <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>
                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
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
    