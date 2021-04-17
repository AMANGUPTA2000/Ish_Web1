<?php
include('security.php');

if(!$_SESSION['username'])
{
    header('Location: loginmodal.php');
}
include('navbar.php');
?>


<div class="container-fluid" style="padding: 42px;">
  <div class="row">
    <div class="col-sm-10">
          <?php

if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
{
    echo '<h2 class="bg-info text-white"> '.$_SESSION['status'].' </h2>';
    unset($_SESSION['status']);
}
?>
          <?php
        $user_id=$_SESSION['username'];
        $query = "SELECT * FROM register where mobile='$user_id'";
        $query_run = mysqli_query($connection, $query);
    ?>

        <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
        ?>
            <div class="mb-5">
                <?php echo '<img src="upload/'.$row['images'].'" style="width: 150px; border-radius: 10px;"  alt="image">'?>
                <p style="display: inline-block; position: relative; top: -100px; left: 13px;"><?php echo $row['username'] ?></p>
            </div>
            <form>
                <div class="row gx-5 mb-4">
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">MOBILE NUMBER</label>
                      </div>
                      <div class="col-7">
                      <p type="integer" class="form-control" id="inputEmail4"><?php echo $row['mobile'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">DATE OF BIRTH</label>
                      </div>
                      <div class="col-7">
                      <p type="date" class="form-control" id="dob"><?php echo $row['dob'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row gx-5 mb-4">
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">ALTERNATE MOBILE NUMBER</label>
                      </div>
                      <div class="col-7">
                        <p type="integer" class="form-control" id="altermob"><?php echo $row['alt_mobile'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">EMAIL ID</label>
                      </div>
                      <div class="col-7">
                      <p type="email" class="form-control" id="email"><?php echo $row['email'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row gx-5">
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">ADDRESS</label>
                      </div>
                      <div class="col-7">
                      <p type="text" class="form-control" id="address"><?php echo $row['address'] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row align-items-center">
                      <div class="col-5" style="color: #714db9;">
                        <label for="inputPassword6" class="col-form-label">GENDER</label>
                      </div>
                      <div class="col-7">
                        <p type="text" class="form-control" id="gender"><?php echo $row['gender'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
          </div>
          <div class="col-sm-2">
            <div class="v">
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="profile.php">OVERVIEW</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#end">EDIT DETAILS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">SAVED CARDS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">COUPONS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">ORDERS & RETURNS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">ADDRESS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">PRIVACY POLICY</a></p>
            </div>
          </div>  
      </div>
  </div>

<div class="container my-5">
        <div class="row align-items-center">
          <div class="col-sm-3" style="padding: 50px; min-height: 300px;">
            <div class="p-3" style="border: 1px solid #714db9; border-radius: 10px;">
            <p style="text-align:center">ORDERS</p>
            <p style="text-align: center;"><i style="font-size: 50px;" class="fa fa-truck" aria-hidden="true"></i></p>
            <p style="text-align: center;">Check Status Of Your Orders</p>
            </div>
          </div>
          <div class="col-sm-3" style="padding: 50px; min-height: 300px;">
            <div class="p-3" style="border: 1px solid #714db9; border-radius: 10px;">
              <p style="text-align:center">WISHLIST</p>
              <p style="text-align: center;"><i style="font-size: 50px;" class="fa fa-heart" aria-hidden="true"></i></p>
              <p style="text-align: center;">Your Collections Lists</p>
            </div>
          </div>
          <div class="col-sm-3" style="padding: 50px; min-height: 300px;">
            <div class="p-3" style="background-color: #714db9; color: white; border-radius: 10px;">
              <p style="text-align:center">SAVED CARDS</p>
              <p style="text-align: center;"><i style="font-size: 50px;" class="fa fa-credit-card" aria-hidden="true"></i></p>
              <p style="text-align: center;">Save Your Card For Faster Checkout</p>
            </div>
          </div>
          <div class="col-sm-3" style="padding: 50px; min-height: 300px;">
            <div class="p-3" style="border-radius: 10px; border: 1px solid #714db9;">
              <p style="text-align:center">YOUR COUPON</p>
              <p style="text-align: center;"><i style="font-size: 50px;" class="fa fa-gift" aria-hidden="true"></i></p>
              <p style="text-align: center;">Your Coupons For Additional Discount</p>
            </div>
          </div>
        </div>
</div>
  <form action="editprofile.php" method="post">
    <div id="end">
                <p style="text-align: center;">
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="edit_btn" class="btn btn-outline-primary" style="padding: 17px 75px 17px 75px; font-size: 20px;">EDIT DETAILS</button>
                    </p>
                    </div>
          <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>
  </form>
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
 <script>
      // Get the modal
      var modal = document.getElementById("myModal1");
  
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn1");
  
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close1")[0];
  
      // When the user clicks the button, open the modal 
      btn.onclick = function () {
        modal.style.display = "block";
      }
  
      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      }
  
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>