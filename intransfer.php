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
            <h1 class="h3 mb-0 text-gray-800" >Internal Bank Accounts Cash Transfer</h1>
        </div>

        <div class="card shadow mb-4">
       <div class="card-body" > 
        <div class="container">
        <form class="row g-3" action="intransferval.php" method="POST">

                             <div class="col-md-5">
                               <label for="validationDefault03" class="form-label">Senders Account No</label>
                               <input type="number" name="sacno" class="form-control" id="validationDefault03" required>
                             </div>

                        

                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>

                            <div class="col-md-7">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="sactype"  required>
                                      <option selected disabled value="">Choose...</option>
                                     <option>Saving</option>
                                     <option>current</option>
                                        </select>
                                </div>
                             <!-- <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                  To  </label>
                               </div>
                             </div> -->

                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                   </label>
                               </div>
                             </div>

                             <div class="col-md-5">
                               <label for="validationDefault05" class="form-label">Recivers Account No</label>
                               <input type="number" name="racno" class="form-control" id="validationDefault05" required>
                             </div>


                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>
                             
                             
                             <div class="col-md-7">
                                <label for="validationDefault04" class="form-label">Account Type</label>
                                <select name="ractype"  required>
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

                            <div class="col-md-5">
                               <label for="validationDefault05" class="form-label">Amount</label>
                               <input type="number" name="amount"  class="form-control" id="validationDefault05" required>
                             </div>


                             <div class="col-12">
                               <div class="form-check">
                                 <label class="form-check-label" for="invalidCheck2">
                                    </label>
                               </div>
                             </div>
                             <div class="col-12">
                               <button class="btn btn-primary" type="submit" name="submit">TRANSFER</button>
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
        <a class="btn btn-success" href="intranshistory.php">History</a>
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
    