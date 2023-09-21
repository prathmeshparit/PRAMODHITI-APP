<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>
<div class="container-fluid bg-white">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" >Notes DataBase</h1>
</div>


<div class="table-responsive bg-white">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `notes`";
            $query_run = mysqli_query($con,$sql);

        ?>
    <table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">10</th>
                  <th scope="col">20</th>
                  <th scope="col">50</th>
                  <th scope="col">100</th>
                  <th scope="col">200</th>
                  <th scope="col">500</th>
                  <th scope="col">2000</th>
                
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
                
               
                <td> <?php  echo $row['Ten']; ?></td>
                <td> <?php  echo $row['Twenty']; ?></td>
                <td> <?php  echo $row['Fifty']; ?></td>
                <td> <?php  echo $row['Hundred']; ?></td>
                <td> <?php  echo $row['Twohundred']; ?></td>
                <td> <?php  echo $row['Fivehundred']; ?></td>
                <td> <?php  echo $row['Twothousand']; ?></td>
               
                
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
   

