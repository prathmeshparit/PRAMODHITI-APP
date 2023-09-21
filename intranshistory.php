<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" >Internal Bank Accounts Cash Transfer History</h1>

</div>

<div class="table-responsive bg-white">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `intransfer`";
            $query_run = mysqli_query($con,$sql);

        ?>
    <table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">Sender's Account No.</th>
                  <th scope="col">Sender's Account Type</th>
                  <th scope="col">Reciver's Account No.</th>
                  <th scope="col">Reciver's Account Type</th>
                  <th scope="col">Amount Transfered</th>
                  <th scope="col">Date</th>

                </tr>
              </thead>
              <tbody>
                      <?php
                          if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                      ?>
                      
                <tr>
                
               
                <td> <?php  echo $row['senderacno']; ?></td>
                <td> <?php  echo $row['senderactype']; ?></td>
                <td> <?php  echo $row['reciveracno']; ?></td>
                <td> <?php  echo $row['reciveractype']; ?></td>
                <td> <?php  echo $row['amt']; ?></td>
                <td> <?php  echo $row['date']; ?></td>

                
                </tr>
                <?php
                            }
                          }
                          else
                          {
                            echo "No Record Found !";
                          }
                      ?>
                  
               
              </tbody>
    </table>

          

</div>


<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    