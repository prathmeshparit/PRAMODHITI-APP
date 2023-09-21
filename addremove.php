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
    <h1 class="h3 mb-0 text-gray-800" >Add and Remove Notes</h1>
</div>


    <div class="container">
            <form class="row g-3" action="Arnotesval.php" method="POST">

         <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Total Amount</label>
                    <input type="hidden" name="amount" class="form-control" id="validationDefault01"  required>
                  </div>  

                  <div class="col-md-8">
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">10</label>
                    <input type="number" name="ten" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">20</label>
                    <input type="number" name="twenty" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">50</label>
                    <input type="number" name="fifty" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">100</label>
                    <input type="number" name="hundred" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">500</label>
                    <input type="number" name="fhundred" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">200</label>
                    <input type="number" name="twohundred" class="form-control" id="validationDefault01"  required>
                  </div>

                  <div class="col-md-3">
                    <label for="validationDefault01" class="form-label">2000</label>
                    <input type="number" name="twothousand" class="form-control" id="validationDefault01"  required>
                  </div>



                  <div class="col-md-8">
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                    <label for="validationDefault02" class="form-label"></label>
                  </div>

                  <div class="col-md-6">
                  
                    <button class="btn btn-primary" type="submit" name="add">ADD</button>
                </div>

                

                <div class="col-md-6">
                  
                    <button class="btn btn-primary" type="submit" name="remove">REMOVE</button>
                </div>


            </form>

    </div>

</div>



</div>
<!-- /.container-fluid -->

<!-- </div> -->
<!-- End of Main Content -->






<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
   