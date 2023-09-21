<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" >Balance Sheet</h1>
</div>

<div class="table-responsive">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `balancesheet`";
            $query_run = mysqli_query($con,$sql);

        ?>
    <table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">ACCOUNT NO</th>
                  <th scope="col">NAME</th>
                  <th scope="col">ACCOUNT TYPE</th>
                  <th scope="col">BALANCE</th>
                  <th scope="col">DATE</th>
                  

                  <th scope="col">EDIT</th>
                  <th scope="col">DELETE</th>
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
                
               
                <td> <?php  echo $row['accountno']; ?></td>
                <td> <?php  echo $row['fname']; ?></td>
                <td> <?php  echo $row['atype']; ?></td>
                <td> <?php  echo $row['balance']; ?></td>
                <td> <?php  echo $row['date']; ?></td>
               
                
                <td><button type="submit" class="btn btn-success" >EDIT </button> </td>
                <td><button type="submit" class="btn btn-danger" >DELETE </button> </td>
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





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
   
