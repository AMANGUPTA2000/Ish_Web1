<?php
include('security.php');
include('navbar.php');

?>


  <div class="container-fluid login" style="background: radial-gradient(rgb(229, 209, 235), rgb(245, 199, 241)); min-height: 40.8rem;">
    <div class="row">
      <div class="box1">
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
      
        <p>Change Password</p>
        <hr>
        <form action="code.php" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="pwd_id" value="<?php echo $row['id'] ?>">
        <div style="color: rgb(149, 149, 231);">
        <p style="text-align: center;">Enter New Password </p>
        <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter New Password" required=""></div>
        <br>
        <p style="text-align: center;"><button type="submit" name="changepwd" class="btn btn-outline-primary px-3 mt-3">Change Password</button></p>
        </form>
        
        <?php
                }
            }
        ?>
  

      </div>
      <?php
  include('footer.php');
?>
    </div>
  </div>

  

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
<script>
$(".digit-group")
.find("input")
.each(function () {
    $(this).attr("maxlength", 1);
    $(this).on("keyup", function (e) {
        var parent = $($(this).parent());

        if (e.keyCode === 8 || e.keyCode === 37) {
            var prev = parent.find("input#" + $(this).data("previous"));

            if (prev.length) {
                $(prev).select();
            }
        } else if (
            (e.keyCode >= 48 && e.keyCode <= 57) ||
            (e.keyCode >= 65 && e.keyCode <= 90) ||
            (e.keyCode >= 96 && e.keyCode <= 105) ||
            e.keyCode === 39
        ) {
            var next = parent.find("input#" + $(this).data("next"));

            if (next.length) {
                $(next).select();
            } else {
                if (parent.data("autosubmit")) {
                    parent.submit();
                }
            }
        }
    });
});
</script>
</body>

</html>