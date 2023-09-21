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
    <h1 class="h3 mb-0 text-gray-800" >Track Withdrawl History Of Perticular Account</h1>
</div>

<div class="card shadow mb-4">
       <div class="card-body" > 
        <div class="container">
              
            
        <form class="row g-3" action="whistory1.php" method="post">
        
                  <div class="col-md-6">
                    <label for="validationDefault01" class="form-label">Account No</label>
                    <input type="number" name="ano" class="form-control" id="validationDefault01"  required>
                  </div>


                  


                  <div class="col-8">
               <br><br>
                    <button class="btn btn-primary" name="watch" type="submit">WATCH</button>
                </div>
        </form>
        </div>
        </div>
        </div>
        </div>
       
       
        
</div>



<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>