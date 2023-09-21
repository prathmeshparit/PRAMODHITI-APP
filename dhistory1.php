<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
?>



<div class="table-responsive  bg-white">
        <?php
            include('includes/database.php');
            if(isset($_POST['watch']))
            {
            $ac=$_POST['ano'];
           
            $sql="SELECT * FROM `deposit` WHERE Accno=$ac " ;
            $query_run= mysqli_query($con,$sql);

        ?>
    <table class="table table-bordered border-primary" id="datatable" width="100%" cellspacing="0">
            <thead>
                <tr>
                 
                  <th scope="col">ACCOUNT NO</th>
                  <th scope="col">AMOUNT</th>
                  <th scope="col">DATE</th>
                  <th scope="col">ACCOUNT TYPE</th>
                  
                </tr>
              </thead>
              <tbody>
                      <?php
                      //mysqli_num_rows($query_run) > 0
                          if( mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                      ?>
                      
                <tr>
                
               
                <td> <?php  echo $row['Accno']; ?></td>
                <td> <?php  echo $row['Amount']; ?></td>
                <td> <?php  echo $row['Date']; ?></td>
                <td> <?php  echo $row['Acctype']; ?></td>
                
                </tr>
                <?php
                            }
                          }
                          else
                          {
                            echo "No Record Found !";
                          }
                        }
                      ?>
                  
               
              </tbody>
    </table>
</div>





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>