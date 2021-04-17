<?php
session_start();
include('navbar.php');
?>


  <div class="container-fluid login" style="background: radial-gradient(rgb(229, 209, 235), rgb(245, 199, 241)); min-height: 40.8rem;">
    <div class="row">
      <div class="box1">
        <p>Change Password</p>
        <hr>
        <p style="font-size: 12px; color: rgb(186, 106, 240); font-weight: bold; margin-bottom: 0;">Your 4 Digit OTP Has Been Sent To Your Registered Mobile Number</p>
        <p style="font-size: 12px; color: rgb(186, 106, 240); font-weight: bold;">Enter The 4 Digit OTP Below</p>
        <form method="POST" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
          
            <input type="integer" id="digit-1" name="digit-1" data-next="digit-2">
            <input type="integer" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" >
            <span class="splitter">&ndash;</span>
            <input type="integer" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" >
            <input type="integer" id="digit-4" name="digit-4" data-previous="digit-3" >
            
          <p style="text-align: center;"><a href="pwdchange.php" class="btn btn-outline-primary px-3 mt-3">CONFIRM</a></p>  
        
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