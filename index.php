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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                  

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                ACCOUNTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                               <?php
                                               include('totalaccount.php');

                                               
                                               ?>
                                            
                                           </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               BALANCE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            <?php
                                            include('totalbalance.php');
                                            ?>
                                            
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">USERS
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        
                                                    <?php
                                               include('totaluser.php');
                                               
                                               
                                               ?>
                                                
                                                </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              INVESTMENTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                
                                            <?php
                                            include('totalinvest.php');
                                            ?>
                                            
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


   <!-- Cash Withdrawl history -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="h5 font-weight-bold text-warning text-uppercase mb-2" >Cash Withdrawl History</div>
</div>

<div class="table-responsive ">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `withdrawl`";
            $query_run = mysqli_query($con,$sql);

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
                          if(mysqli_num_rows($query_run) > 0)
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
                      ?>
                  
               
              </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

    <!-- Cash Deposit History -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="h5 font-weight-bold text-warning text-uppercase mb-2" >Cash Deposit History</div>

   
</div>

<div class="table-responsive bg-white">
        <?php
            include('includes/database.php');
            $sql="SELECT * FROM `deposit`";
            $query_run = mysqli_query($con,$sql);

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
                          if(mysqli_num_rows($query_run) > 0)
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
                      ?>
                  
               
              </tbody>
    </table>

          

</div>
</div>
</div>
</div>
</div>


                        <form action="cmit.php" method="post">
                    
                    <div class="col-12">
                    <br>
                    <button class="btn btn-primary"  type="submit">Commit</button>
                    <br>
                </div>
</form>

</div>





   
<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
    

  

