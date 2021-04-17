<?php
session_start();
include('navbar.php');
?>




  <div class="container-fluid login"
    style="background: radial-gradient(rgb(229, 209, 235), rgb(245, 199, 241)); min-height: 40.8rem;">
    <div class="row">
      <div class="box">
      <?php

        if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
        {
            echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
            unset($_SESSION['status']);
        }
        ?>
        <h3><a href="loginmodal.php">Login</a> <span style="opacity: 0.5;">or</span><a href="signupmodal.php"> Signup</a></h3>
        <form action="signupcode.php" method="POST">
        <div class="input-group mt-4 mb-4">
          <span class="input-group-text" id="basic-addon1">+91</span>
          <input type="integer" class="form-control" placeholder="Mobile Number" name="mobilee" aria-label="phnum"/>
          </div>  
            <input type="password" class="form-control" placeholder="Password" name="passs" aria-label="pass"/>
        
        <p class="mb-4">By continuing, I agree to the <span> <a href="#"> Term of Use </a></span>& <span> <a
              href="#">Privacy Policy
            </a></span></p>
        <div class="d-grid gap-2">
          <button class="btn" name="signup_btn" type="submit">CONTINUE</button>
        </div>
        <p class="help mt-3">Have trouble logging in? <span id="hideLogin"><a href="help.html"> Get Help</a></span></p>
        <img style="float: right; height: 35%;" src="log.png" alt="">
        </form>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="index.js"></script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>