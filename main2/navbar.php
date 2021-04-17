<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
  <title>Hello</title>
  <style>
    .small-container {
      max-width: 1080px;
      margin: auto;
      padding-left: 25px;
      padding-right: 25px;
    }

    .single-product {
      margin-top: 30px;

    }

    .single-product .col-2 img {
      padding: 0;
    }

    .single-product .col-2 {
      padding: 20px;
    }

    .single-product h4 {
      margin: 20px 0;
      font-size: 22px;
      font-weight: bold;
    }

    .single-product select {
      display: block;
      padding: 7px;
      margin-top: 45px;
      border-radius: 10px;
      border: 3px solid #dccefa;
    }

    .single-product input {
      width: 45%;
      height: 40px;
      padding: 10px;
      font-size: 15px;
      margin-right: 5px;

    }

    input:focus {
      outline: none;
    }

    .row1 {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .small-img-row1 {
      padding-top: 5px;
      display: flex;
      justify-content: space-between;

    }

    .small-img-col {
      flex-basis: 24%;
      cursor: pointer;
    }

    .col-2 {
      flex-basis: 50%;
      min-width: 300px;

    }

    .col-2 img {
      max-width: 100%;
      padding: 50px 0;
    }

    .col-2 h1 {
      font-size: 50px;
      line-height: 60px;
      margin: 25px 0;
    }

    .single-product .col-2 .bagbtn {
      background-color: #dccefa;
      padding: 8px 38px 8px 38px;
      font-size: 20px;
      margin-top: 14px;
      border-radius: 10px;
      border: none;
      color: black;
      font-family: auto;
    }

    .single-product .col-2 .wishlist {
      background-color: #ffffff;
      padding: 8px 42px 8px 42px;
      font-size: 20px;
      margin-top: 14px;
      border-radius: 10px;
      color: black;
      font-family: auto;
    }

    .middle {
      width: 55%;
      height: 200px;
      border: 1px solid black;
      margin: auto;
      margin-top: 38px;
      box-shadow: 3px 3px 7px grey;
    }

    .middle h4 {
      text-align: center;
      font-family: serif;
    }

    .categories {
      margin: 70px 0;
    }

    .col-3 {
      flex-basis: 30%;
      min-width: 250px;
      margin-bottom: 30px;
      text-align: center;
    }

    .col-3 img {
      width: 40%;
    }

    .col-3 a {
      font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
      color: black;
      font-size: 27px;
    }

    @media only screen and (max-width:600px) {
      .row1 {
        text-align: center;

      }

      .col-2,
      .col-3 {
        flex-basis: 100%;
      }

      .single-productc.row1 {
        text-align: left;
      }

      .single-product .col-2 {
        padding: 20px 0;
      }

      .single-product h1 {
        font-size: 26px;
        line-height: 32px;
      }
    }
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg top1 mb-4">
    <div class="container-fluid">
      <a style="margin-right:2rem; padding-top: 0px;padding-bottom: 0px;" class="navbar-brand hide"
        href="index.php"><img src="bar.png" alt=""></a>
      <a style="color: black; font-size: 19px; font-family: 'Times New Roman', Times, serif;" class="navbar-brand"
        href="index.php">INDIAN<br>FASHION<br>STORE</a>
      <a style="margin-right:2rem; font-weight: bold; font-size: 22px; margin-left:2rem; color:white;background-color: black; border: 2px solid black;border-radius: 10px; padding-top: 0px;padding-bottom: 0px;"
        class="navbar-brand hide px-4" href="index.php">ISHTORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>&#9776;
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a style="color: black; font-size: 25px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal1">
              WHAT'S NEW
            </a>
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">New In
                                  Clothing</a></p>
                              <p class="mb-0 cat"><a href="#">New In Active
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  Accessories</a></p>
                              <p class="mb-0 cat"><a href="#">New In Beauty</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">New In Bags</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">New IN Beach
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a>
                              </p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                              <p class="mb-0 subcat"><a href="#">T-Shirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Shirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Bottoms</a></p>
                              <p class="mb-0 subcat"><a href="#">Cardigans</a></p>
                              <p class="mb-0 subcat"><a href="#">Couple
                                  T-Shirts</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Men's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Women's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Kids's
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New IN
                                  Accessories</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">New In Shoes and
                                  Accessories</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  BagPack</a></p>
                              <p class="mb-0 cat"><a href="#">New In Active
                                  Wear</a></p>
                              <p class="mb-0 cat"><a href="#">New In
                                  Nightwear</a></p>
                              <p class="mb-0 cat"><a href="#">New In Stocks</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black; font-size: 25px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal2">
              MEN
            </a>
            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">MEN'S WEAR</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">NEW IN</a></p>
                              <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 cat"><a href="#">ACCESSORIES</a>
                              </p>
                              <p class="mb-0 cat"><a href="#">PREMIUN COLLECTIONS</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">ACTIVE WEAR</a>
                              </p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                              <p class="mb-0 subcat"><a href="#">SweatShirt</a></p>
                              <p class="mb-0 subcat"><a href="#">Hoodies</a></p>
                              <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 subcat"><a href="#">Denims</a></p>
                              <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Pants</a></p>
                              <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#"><b>TOPS</b></a></p>
                              <p class="mb-0 subcat"><a href="#">Long Sleeve Tops</a></p>
                              <p class="mb-0 subcat"><a href="#">Polo Tshirts</a></p>
                              <p class="mb-0 subcat"><a href="#">Cotton Shirts</a></p>
                              <p class="mb-0 subcat"><a href="#">Half Sleeve Tops</a></p>
                              <p class="mb-0 cat"><a href="#">SHOP BY OCCASION</a></p>
                              <p class="mb-0 subcat"><a href="#">Party Wear</a></p>
                              <p class="mb-0 subcat"><a href="#">Casual Wear</a></p>
                              <p class="mb-0 subcat"><a href="#">Street Punk</a></p>
                              <p class="mb-0 subcat"><a href="#">Formal Wear</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row" style="padding: 27px;">
                            <div class="col-md-6" style="margin-top: 51px;">
                              <h2 style="color: rgb(228, 102, 93); font-weight: bold;">BUY 2 GET 1</h2>
                              <h3>FREE</h3>
                            </div>
                            <div class="col-md-6">
                              <img src="7.jpeg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black; font-size: 25px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal3">
              WOMEN
            </a>
            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="Modal3" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="padding:0px; margin: 6px 0px;">
                            <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                          </div>
                          <div class="container" style="padding:0px; margin: 6px 0px;">
                            <img src="bombay.jpg" alt="" style="height: 120px; width: 161px;">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">WOMEN'S CLOTHING</a></p>
                              <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                              <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                              <p class="mb-0 cat"><a href="#">T-SHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                              <p class="mb-0 cat"><a href="#">ACCESSORIES</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">SWEATERS</a></p>
                              <p class="mb-0 subcat"><a href="#">cardigans</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Pullovers</a></p>
                              <p class="mb-0 cat"><a href="#">SWEATSHIRTS</a></p>
                              <p class="mb-0 subcat"><a href="#">Hoddies</a></p>
                              <p class="mb-0 subcat"><a href="#">Oversize</a></p>
                              <p class="mb-0 cat"><a href="#">OUTWEAR</a></p>
                              <p class="mb-0 subcat"><a href="#">Coats</a></p>
                              <p class="mb-0 subcat"><a href="#">Jackets</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">JUMPSUIT & ROMPERS</a></p>
                              <p class="mb-0 cat"><a href="#">BLOUSES</a></p>
                              <p class="mb-0 cat"><a href="#">TANK TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">DRESSES</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOMS</a></p>
                              <p class="mb-0 subcat"><a href="#">Jeans</a></p>
                              <p class="mb-0 subcat"><a href="#">Straight Pants </a></p>
                              <p class="mb-0 subcat"><a href="#">Leather Pants</a></p>
                              <p class="mb-0 subcat"><a href="#">Shorts</a></p>
                              <p class="mb-0 subcat"><a href="#">Skirts</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="container p-0">
                            <h3>Shop By Style</h3>
                            <div class="row">
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div>
                                  <p>Beachwear</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div style="margin-left: 30px;">
                                  <p>Party</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="align-items-center">
                                  <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                  <p>Sporty</p>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <img src="1.jpg" alt="..." style="height: 95px; border-radius: 4.25rem!important;">
                                <div style="margin-left: 20px;">
                                  <p>At Home</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black; font-size: 25px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal4">
              KIDS
            </a>
            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="Modal4" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <div class="container"
                            style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                              <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">New In</a></p>
                              <p class="mb-0 cat"><a href="#">TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                              <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                              <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                            </div>
                            <div class="col-md-4 main">
                              <p class="mb-0 cat"><a href="#">BABY'S ACCESSORIES</a></p>
                              <p class="mb-0 subcat"><a href="#">Socks & Tights</a></p>
                              <p class="mb-0 subcat"><a href="#">Hats & Gloves</a></p>
                              <p class="mb-0 cat"><a href="#">SHOP BY TREND</a></p>
                              <p class="mb-0 subcat"><a href="#">Animal Print</a></p>
                              <p class="mb-0 subcat"><a href="#">Cartoon Print</a></p>
                              <p class="mb-0 subcat"><a href="#">Floral</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="container" style="border:2px solid black;">
                            <img src="7.jpeg" alt="">
                          </div>
                          <!-- <div class="container"
                            style="background: black;color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black; font-size: 25px;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal5">
              SALE
            </a>
            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="Modal5" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4">
                          <h3 style="font-size: 2.5rem;">Brand Of The Week</h3>
                          <img src="11.jpg" style="width: 100%;" alt="">
                          <!-- <div class="container"
                            style="background: rgb(111, 230, 164);color: white;padding: 5px 20px;margin-top: 12px;font-size: 20px;">
                            SHOP NOW
                          </div> -->
                        </div>
                        <div class="col-md-4">
                          <div class="row">
                            <div class="col-md-6 main">
                              <p class="mb-0 cat"> <a href="#">KIDS WEAR</a></p>
                              <p class="mb-0 cat"><a href="#">VIEW ALL</a></p>
                              <p class="mb-0 cat"><a href="#">TOP RATED</a></p>
                              <p class="mb-0 cat"><a href="#">New In</a></p>
                              <p class="mb-0 cat"><a href="#">TOPS</a></p>
                              <p class="mb-0 cat"><a href="#">BOTTOM</a></p>
                              <p class="mb-0 cat"><a href="#">New IN Shoes</a></p>
                              <p class="mb-0 cat"><a href="#">SWEAT SHIRT</a></p>
                            </div>
                            <div class="col-md-6 main">
                              <p class="mb-0 cat"><a href="#">BABY GIRL'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Dresses</a></p>
                              <p class="mb-0 subcat"><a href="#">Knitwear</a></p>
                              <p class="mb-0 subcat"><a href="#">Partywear</a></p>
                              <p class="mb-0 cat"><a href="#">BABY BOY'S CLOTHING</a></p>
                              <p class="mb-0 subcat"><a href="#">Onesides</a></p>
                              <p class="mb-0 subcat"><a href="#">Co-Ords</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 main">
                          <p class="cat">SPECIAL OFFERS</p>
                          <div class="row">
                            <div class="col-sm-6">
                              <p class="subcat">FLAT 10% OFF</p>
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                            </div>
                            <div class="col-sm-6">
                              <p class="subcat">FLAT 20% OFF</p>
                              <img class="offerimg" src="33.jpeg" alt="">
                              <img class="offerimg" src="33.jpeg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item mx-3">
            <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#Modal6">
              <i class="fa fa-search"></i>
            </a>
            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="Modal6" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" placeholder="Casual Shirt" aria-label="Username"
                        aria-describedby="basic-addon1">
                    </div>
                    <div class="main search">
                      <p class="title"><a href="#">SHOP BY BRAND</a> </p>
                      <p class="subtitle"><a href="#">Shirt By Suited</a> </p>
                      <p class="subtitle"><a href="#">Shirt By IDC</a> </p>
                      <p class="subtitle"><a href="#">Shirt By Sukoon</a> </p>
                      <p class="title"><a href="#">SHOP BY MATERIAL</a> </p>
                      <p class="subtitle"><a href="#">Cotton Shirt</a> </p>
                      <p class="subtitle"><a href="#">Polyster Shirt</a> </p>
                      <p class="subtitle"><a href="#">Polyster T-Shirt</a> </p>
                      <p class="title"><a href="#">SHOP BY OCCASION</a> </p>
                      <p class="subtitle"><a href="#">Party Wear</a> </p>
                      <p class="subtitle"><a href="#">Formal Wear</a> </p>
                      <p class="subtitle"><a href="#">Casual Wearsub</a> </p>
                      <img style="float: right; width: 32%;" src="search.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <form class="d-flex">

          <a style="color: black; padding: 7px;" class="nav-link" id="myBtn1" role="button">
            <i class="fa fa-user fa-2x"></i></a>

          <div id="myModal1" class="modal1">

            <!-- Modal content -->
            <div class="modal-content1">
              <span class="close1">&times;</span>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-5 p-0">
                    <img style="width: 100%;" src="user.png" alt="">
                    <img style="margin-left: -20px; margin-top: 78px; width: 60%;" src="circle.png" alt="">
                  </div>
                  <div class="col-7">
                    <ul>
                      <li><a style="text-decoration: none; color: black;" href="profile.php">Profile</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Wallet</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Track Order</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Help</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Gift Card</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Saved Address</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Saved Cards</a></li>
                      <li><a style="text-decoration: none; color: black;" href="#">Contact Us</a></li>
                      <li><a style="text-decoration: none; color: black;" href="logoutconf.php">Log Out</a></li>
                    </ul>
                    <!-- <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-primary p-0"
                        style="font-size: 27px;">Login</button>
                      <button type="button" onclick="document.location='loginmodal.php'" class="btn btn-outline-primary p-0" style="font-size: 27px;">
                      Signup</button>
                    </div> -->
                  </div>
                  <p class="mt-3" style="text-align: center; font-size: 20px;"><a
                      style="text-decoration: none; color: rgb(120 128 233);" href="loginmodal.php">Login</a> <span
                      style="opacity: 0.7;"> or </span><a style="text-decoration: none; color: rgb(120 128 233);"
                      href="signupmodal.php">Signup</a></p>
                </div>
              </div>
            </div>

          </div>

          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          <a style="color: black;" class="nav-link" href="#" role="button" data-bs-toggle="modal"
            data-bs-target="#Modal8">
            <i class="fa fa-shopping-cart fa-2x"></i>
          </a>
          <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" style="background-color: black;">
                  <h5 class="modal-title" id="exampleModalLabel" style="color: white;">CART</h5>
                  <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"
                      aria-hidden="true"></i></button>
                </div>
                <div class="modal-body">
                  <div class="row mb-2">
                    <div class="col-sm-3">
                      <img src="user1.jpeg" alt="" style="width: 100%;">
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                        <h4>White Cotton Tshirt</h4>
                        <div class="quantity mx-3">
                          <button class="plus-btn btn btn-outline-success px-3 py-1" type="button" name="button">+
                          </button>
                          <input type="text" name="name" value="1">
                          <button class="minus-btn btn btn-outline-success px-3 py-1" type="button" name="button">-
                          </button>
                          <select style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <div class="price mt-3">
                          <p><strike class="mx-3">1299 </strike> 999</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <div class="row mb-2">
                    <div class="col-sm-3">
                      <img src="user1.jpeg" alt="" style="width: 100%;">
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                        <h4>White Cotton Tshirt</h4>
                        <div class="quantity mx-3">
                          <button class="plus-btn btn btn-outline-success px-3 py-1" type="button" name="button">+
                          </button>
                          <input type="text" name="name" value="1">
                          <button class="minus-btn btn btn-outline-success px-3 py-1" type="button" name="button">-
                          </button>
                          <select style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <div class="price mt-3">
                          <p><strike class="mx-3">1299 </strike> 999</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>


                  <div class="row mb-2">
                    <div class="col-sm-3">
                      <img src="user1.jpeg" alt="" style="width: 100%;">
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                        <h4>White Cotton Tshirt</h4>
                        <div class="quantity mx-3">
                          <button class="plus-btn btn btn-outline-success px-3 py-1" type="button" name="button">+
                          </button>
                          <input type="text" name="name" value="1">
                          <button class="minus-btn btn btn-outline-success px-3 py-1" type="button" name="button">-
                          </button>
                          <select style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <div class="price mt-3">
                          <p><strike class="mx-3">1299 </strike> 999</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="container">
                    <p class="mb-0">Total Amount <span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px;"> <a
                          style="color: white; text-decoration: none;" href="#">Go To Cart</a></span></p>
                  </div>
                  <div class="container">
                    <p>1299<span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px; margin-top: 5px;">
                        <a style="color: white; text-decoration: none;" href="#">Chech Out</a></span></p>
                  </div>
                </div>
                <hr>
                <div class="container">
                  <div class="row">
                    <h3>Wishlist</h3>
                    <div class="col-sm-4 main wishlist">
                      <img src="user1.jpeg" style="width: 100%;" alt="">
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">Skirt</a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="#"><i class="fa fa-eye"
                            aria-hidden="true"></i></a><a style="margin-left: 15px;" href="#"><i class="fa fa-trash"
                            aria-hidden="true"></i></a></p>
                    </div>
                    <div class="col-sm-4 main wishlist">
                      <img src="user1.jpeg" style="width: 100%;" alt="">
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">Skirt</a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="#"><i class="fa fa-eye"
                            aria-hidden="true"></i></a><a style="margin-left: 15px;" href="#"><i class="fa fa-trash"
                            aria-hidden="true"></i></a></p>
                    </div>
                    <div class="col-sm-4 main wishlist">
                      <img src="user1.jpeg" style="width: 100%;" alt="">
                      <p style="text-align: center; margin-bottom: 0;"><a href="#">Skirt</a></p>
                      <p style="text-align: center;"><a style="margin-right: 15px;" href="#"><i class="fa fa-eye"
                            aria-hidden="true"></i></a><a style="margin-left: 15px;" href="#"><i class="fa fa-trash"
                            aria-hidden="true"></i></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>
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