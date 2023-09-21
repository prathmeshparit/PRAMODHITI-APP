  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Manager <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Account Creation</span>
    </a>

    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapsethree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Account Operations</span>
    </a>
    
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="share.php">Shares</a>
            <a class="collapse-item" href="saving.php">Saving</a>
            <a class="collapse-item" href="current.php">Current</a>
            <a class="collapse-item" href="loan.php">Loan</a>
            <a class="collapse-item" href="recurring.php">Recurring</a>
            <a class="collapse-item" href="fixed.php">Fixed</a>
           
        </div>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="deposit.php">Cash Deposit</a>
            <a class="collapse-item" href="addremove.php">Add/Remove Notes</a>
            <a class="collapse-item" href="withdrawl.php">Cash Withdrawl</a>
            <a class="collapse-item" href="Transfer.php">Cash Transfer</a>
            <a class="collapse-item" href="closeac.php">Close Account</a>
            <a class="collapse-item" href="emi.php">EMI Deposit</a>
            <a class="collapse-item" href="invest.php">Other Investments</a>
           
        </div>
    </div>

    
</li>



<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data Related
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Sheets</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Databases</h6>
            <a class="collapse-item" href="savingdata.php">Saving Database</a>
            <a class="collapse-item" href="currentdata.php">Current Database</a>
            <a class="collapse-item" href="loandata.php">Loan Database</a>
            <a class="collapse-item" href="recurringdata.php">Recurring Database</a>
            <a class="collapse-item" href="fixeddata.php">Fixed Database</a>
            <a class="collapse-item" href="sharesdata.php">Shares Database</a>
            <a class="collapse-item" href="notesdata.php">Notes Database</a>
            
    </div>


  


    <li class="nav-item active">
    <a class="nav-link" href="regi.php">
        
       <span> User Registration</span></a>
</li>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#coll"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>History</span>
    </a>
    <div id="coll" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">History</h6>
            <a class="collapse-item" href="dhistory.php">Deposit History</a>
            <a class="collapse-item" href="whistory.php">Withdrawl History</a>
            
            
    </div>


  

</li>




<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    
                     <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-primary" name="logoutbtn" >Logout</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>