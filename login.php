
<?php

session_start();
include ('header.php');

?>


<!-- registration area -->
<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-7 offset-lg-0">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">PRAMODHITI COOPERATIVE SOCIETY</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Login using your username and password</p>
                <?php
                  if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
                  {
                     echo'<h5 class="bg-danger text-white">'.$_SESSION['status'].'</h5>';
                     unset($_SESSION['status']);
                  }
            ?>  
            </div>
            
            <div class="d-flex justify-content-center">
            
                <form action="logincode.php" method="post"  id="log-form">

                    <div class="form-row my-5">
                        <div class="col">
                            <input type="text" required name="uname"  class="form-control" placeholder="USERNAME">
                        </div>
                    </div>

                    <div class="form-row my-5">
                        <div class="col">
                            <input type="password" required name="pword" id="password" class="form-control" placeholder="PASSWORD">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" name="loginn" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>


