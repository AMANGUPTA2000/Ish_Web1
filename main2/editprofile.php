<?php
include('security.php');
include('navbar.php');
?>


<div class="container-fluid" style="padding: 25px;">
      <div class="row">
          <div class="col-sm-8">
          <?php

if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
{
    echo '<h2 class="bg-info text-white"> '.$_SESSION['status'].' </h2>';
    unset($_SESSION['status']);
}
?>
           
            <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM register WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>
            
          
            <h3>EDIT PROFILE <span><i class="fa fa-pencil" aria-hidden="true"></i></span></h3>
            <HR></HR>
            <form action="code.php" method="POST" class="row g-3 mt-5 px-3" enctype="multipart/form-data">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
              <div class="row">
                <div class="col-sm-8">
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">NAME</label>
                    </div>
                    <div class="col-6">
                      <input type="text" id="name" class="form-control"  name="uname" value="<?php echo $row['username'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">MOBILE NUMBER</label>
                    </div>
                    <div class="col-6">
                      <input type="integer" id="mobnum" class="form-control" aria-describedby="passwordHelpInline" name="mobilee" value="<?php echo $row['mobile'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">ADDRESS</label>
                    </div>
                    <div class="col-6">
                      <input type="text" id="address" class="form-control" aria-describedby="passwordHelpInline" name="adres" value="<?php echo $row['address'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">EMAIL ID</label>
                    </div>
                    <div class="col-6">
                      <input type="email" id="email" class="form-control" aria-describedby="passwordHelpInline" name="emaill" value="<?php echo $row['email'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">GENDER</label>
                    </div>
                    <div class="col-6">
                    <select name="gendere" id="gender" class="form-control" value="<?php echo $row['gender'] ?>" type="hidden" >
                      <option value="<?php echo $row['gender'] ?>" hidden="true"><?php echo $row['gender'] ?></option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">DATE OF BIRTH</label>
                    </div>
                    <div class="col-6">
                      <input type="date" id="dob" class="form-control" aria-describedby="passwordHelpInline" name="dobe" value="<?php echo $row['dob'] ?>">
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-6" style="color: #714db9;">
                      <label for="inputPassword6" class="col-form-label">ALTERNATE MOBILE NUMBER</label>
                    </div>
                    <div class="col-6">
                      <input type="integer" id="altermob" class="form-control" aria-describedby="passwordHelpInline" name="alt_mobilee" value="<?php echo $row['alt_mobile'] ?>"> 
                      
                    </div>
                  </div>
                  
                </div>
                
              </div>
              <div>
                <p style= "margin-left: 62%;"><button type="submit" name="updatebtn" class="btn btn-outline-primary" style="padding: 17px 75px 17px 75px; font-size: 20px;">SAVE DETAILS</button></p>
                <p style="margin-left: 62%;"><a data-bs-toggle="modal" data-bs-target="#changePass" class="btn btn-outline-secondary" style="background-color: #dccefa; padding: 17px 45px 17px 45px; font-size: 20px;">CHANGE PASSWORD
</a></p>
</div>
            </div>
            
          <div class="col-sm-2">
            
            <div>
                <p style="text-align: center;"><?php echo '<img src="upload/'.$row['images'].'" style="width: 100%; border-radius: 10px; "  alt="image" id="profileImage" name="pro_pic" data-bs-toggle="modal" data-bs-target="#changeimg">'?></p>
                <a style="text-align: center; color: #714db9; font-size: 16px;" data-bs-toggle="modal" data-bs-target="#changeimg">CHANGE PROFILE PHOTO</a>
<form action="code.php" method="POST" class="row g-3 mt-5 px-3" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
<div class="modal fade" id="changeimg" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="text-align: center">Select a Image: </p>
        <p style="text-align: center;"><?php echo '<img src="upload/'.$row['images'].'" width="120px"  alt="image" id="profileImage" name="pro_pic">'?></p>
        <input type="file" name="pro_pic" class="form-control" capture >      
        </div>
        
        <p class="mb-1" style="text-align: center;"><button style="font-size: 13px;" type="submit" name="changeimag" class="btn btn-secondary px-5 mt-4">CONFIRM</button></p>
        
      </div>
    </div>
  </div>  
</form>
            </div>
            
          </div>
          
          <div class="col-sm-2">
            <div class="v">
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="profile.php">OVERVIEW</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">EDIT DETAILS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">SAVED CARDS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">COUPONS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">ORDERS & RETURNS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">ADDRESS</a></p>
                <p><a style="text-decoration: none; color: black; font-size: 18px;" href="#">PRIVACY POLICY</a></p>
            </div>
          </div>  
      </div>
  </div>



</form>
<form action="code.php" method="POST" class="row g-3 mt-5 px-3" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
<input type="hidden" name="pass" value="<?php echo $row['password'] ?>">
<div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3 align-items-center">
          <div class="col-7" style="color: #714db9;">
            <label for="inputPassword6" class="col-form-label">Old Password</label>
          </div>
          <div class="col-5">
            <input type="password" id="oldPassword" name="oldPassword" class="form-control" aria-describedby="passwordHelpInline">
          </div>
        </div>
        <div class="row g-3 align-items-center">
          <div class="col-7" style="color: #714db9;">
            <label for="inputPassword6" class="col-form-label">New Password</label>
          </div>
          <div class="col-5">
            <input type="password" id="newPassword" name="newPassword" class="form-control" aria-describedby="passwordHelpInline">
          </div>
        </div>
        <div class="row g-3 align-items-center">
          <div class="col-7" style="color: #714db9;">
            <label for="inputPassword6" class="col-form-label">Confirm Password</label>
          </div>
          <div class="col-5">
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" aria-describedby="passwordHelpInline">
          </div>
        </div>
        <p class="mb-1" style="text-align: center;"><button style="font-size: 13px;" type="submit" name="changepass" class="btn btn-secondary px-5 mt-4">CONFIRM</button></p>
        <p class="mb-1" style="text-align: center; font-size: 18px;">OR</p>
        <p style="text-align: center;"><a style="font-size: 13px;" href="changepass.php" class="btn btn-secondary px-3">CHANGE PASSWORD <br> VIA OTP</a></p>
      </div>
    </div>
  </div>
  </div>
</form>
  <?php
                }
            }
        ?>
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
<script>
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
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
</body>

</html>