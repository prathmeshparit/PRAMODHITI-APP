<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" >Cash Transfer History</h1>

   
</div>

<div class="table-responsive bg-white">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `transfer`";
            $query_run = mysqli_query($con,$sql);

        ?>
    <table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">RECIEVER</th>
                  <th scope="col">BANK NAME</th>
                  <th scope="col">BRANCH NAME</th>
                  <th scope="col">RECIEVER ACCOUNT NO</th>
                  <th scope="col">IFSC</th>
                  <th scope="col"> AMOUNT</th>
                  <th scope="col">SENDER ACCOUNT NO</th>
                  <th scope="col">DATE</th>
                  <th scope="col">ACCOUNT TYPE</th>
                  
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
                
               
                <td> <?php  echo $row['rname']; ?></td>
                <td> <?php  echo $row['bkname']; ?></td>
                <td> <?php  echo $row['brname']; ?></td>
                <td> <?php  echo $row['raccno']; ?></td>
                <td> <?php  echo $row['ifscode']; ?></td>
                <td> <?php  echo $row['amount']; ?></td>
                <td> <?php  echo $row['saccno']; ?></td>
                <td> <?php  echo $row['date']; ?></td>
                <td> <?php  echo $row['acctype']; ?></td>
                
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
    