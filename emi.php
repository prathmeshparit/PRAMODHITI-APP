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
            <h1 class="h3 mb-0 text-gray-800" >EMI Deposit</h1>

           
        </div>
        <div class="container">
        <form class="row g-3" action="emival.php" method="POST">

                            <div class="col-md-6">
                               <label for="validationDefault03" class="form-label">Loan Account No</label>
                               <input type="number" name="acno" class="form-control" id="validationDefault03" required>
                             </div>

                             <!-- <div class="col-md-6">
                               <label for="validationDefault03" class="form-label"> EMI Amount</label>
                               <input type="number" name="emiamt" class="form-control" id="validationDefault03" required>
                             </div> -->

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

                             <div class="col-12">
                               <button class="btn btn-primary" type="submit" name="submit">DEPOSIT EMI</button>
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
    