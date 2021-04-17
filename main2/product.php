<?php
include('database/dbconfig.php');
include('navbar.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}
?>

  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-sm-2">
        <h4>Filter <span style="float: right;"><button type="button"
              class="btn btn-outline-primary" onclick="reset">Reset</button></span></h4>
        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="type">Type</h5><div id="div1" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Men <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Women <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Kids <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
              </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="categ">Categories</h5><div id="div2" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Shirt <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Dress <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Tshirt <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">SweatShirt <span>22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Jeans <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Jacket <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Shoes <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Shorts <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Maxi <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
              </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5>Price <button style="float: right;" type="button" class="btn btn-outline-primary py-0">Apply</button></h5>
          <div class="slidecontainer">
            <input type="range" min="399" max="16000" value="50" class="slider" id="myRange">
            <p id="demo" class="mb-0"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="size">Size</h5><div id="div3" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">S <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">L <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">M <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Xl <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">XXl <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">XXXL <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="color">Color</h5><div id="div4" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Red <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Yellow <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Blue<span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Black <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Brown <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">White <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="occas">Occasion</h5><div id="div5" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Casual <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Festive <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Day<span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Formal <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Everyday <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Evening <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="dis">Discount</h5><div id="div6" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">10% <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">20% <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">50%<span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">60% <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">80% <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">90% <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Sale <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Festive Sale <span>22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Gift Card <span>22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="mater">Material</h5><div id="div7" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Cotton <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Rayon <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Polyster <span>22 </span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Viscose <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Chikankari <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Velvet <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Crepe <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Chanderi <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
          <h5 id="fit">Fit</h5><div id="div8" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Regular <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Straight <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">A-Line <span>22 </span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Slim Fit <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Relaxed <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Flarred <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="pattern">Pattern</h5><div id="div8" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Printed <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Solid <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Plain <span>22 </span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Embroided <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Strips <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Geometric <span> 22</span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

        <div class="container mt-3" style="width: 100%; height: auto; border: 1px solid gray; padding: 6px;">
        <h5 id="sleev">Sleeve Length</h5><div id="div9" class="myDIV">
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">3/4th <span>22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Long <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Sleeveless <span>22 </span><input
              class="form-check-input" style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Half <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Short <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          <p class="mb-0" style="opacity: 0.5; font-size: 18px;">Flarred <span> 22</span><input class="form-check-input"
              style="float: right;" type="checkbox" value="" id="flexCheckDefault"></p>
          </div>
        </div>

      </div>
      <div class="col-sm-10">
        <!-- <h3 style="font-size: 23px; font-weight: bold;">All Products</h3> -->
        
      
        <?php
        
        $query = "SELECT * FROM products";
        $query_run = mysqli_query($connection, $query);
    ?>
<div class="row1 row-2">
          All Products 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select>
              <option>Default Sorting</option>
              <option>Sort by Popularity</option>
              <option>Price--Low to High</option>
              <option>price--High to Low</option>
              <option>Newest First</option>
  
          </select>
      </div>
      
        
    <div class="container">
          <div class="row">
          <?php
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
        ?>
            <div class="col-sm-3 main wishlist">
            <form action="singleproduct.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="p_id" value="<?php echo $row['id'] ?>">
            <button type="submit" class="btn" name="prodetail">
            <?php echo '<img src="product_img/'.$row['images'].'" style="width: 230px; height: 350px;""  alt="image">'?>
              <p style="margin-bottom: 0;"><?php echo $row['name'] ?></p>
              <p style="opacity: 0.5; font-size: 16px; margin-bottom: 0;"><?php echo $row['material'] ?></p>
              <p style="font-size: 16px;"><?php echo $row['price'] ?><strike style="opacity: 0.5;" class="mx-3"><?php echo $row['saleprice'] ?></strike></p>
              </button>
            </form>
            </div>
            <?php
              } 
              }
              else {
                echo "No Record Found";
              }
              ?>

        
                </div>
            </div>
          </div>
        </div>
      </div>
         
  <hr>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>

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
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function () {
      output.innerHTML = this.value;
    }
    $(function(){
      $(".myDIV").hide() // try to hide google navigation bar
   });
    $("#type").click(function(){
     $("#div1").toggle();
    });
    $("#categ").click(function(){
     $("#div2").toggle();
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