<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <script>

      function removeCookie(){
        document.cookie = "cart=; expires==Thu, 01 Jan 1970 00:00:00 UTC;"; //taken from w3
        window.location.reload(true);
      }
    </script>
  </head>
  <body>

  <div class="site-wrap">

    <?php
        include('header.php');
    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <!-- <th class="product-thumbnail">Image</th> -->
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    //getting cookie data
                    $cart = "cart";
                    $toFind = $_COOKIE[$cart];
                    $possibleFinds = explode("-",$toFind);
                    echo($toFind);

                    //opening uploads file
                    $fp = fopen("uploads.txt", 'r');
                    $prices = array();
                    $toSend = array();
                    $print = false;

                    while ($line = fgets($fp)){
                      $all = explode("\t", $line);

                      for($i=0; $i<count($possibleFinds); $i++){
                        if($possibleFinds[$i] == $all[0]){
                          echo($possibleFinds[$i]);
                          $print = true;
                        }
                      }

                      if($print){
                          echo "<tr>";
                          // echo "<td class=\"product-thumbnail\">";
                          // echo "<img src=./\"";
                          // echo($all[5]);
                          // echo " alt=\"Image\" class=\"img-fluid\">";
                          // echo "</td>";
                          echo "<td class=\"product-name\">";
                          echo "<h2 class=\"h5 text-black\">";
                          echo($all[2]);
                          echo "</h2>";
                          echo "</td>";
                          echo "<td>";
                          echo($all[1]);

                          //add price to array
                          $prices[count($prices)] = intval($all[1]);

                          echo "</td>";
                          echo "</tr>";
                          $print = false;
                      }
                    }
                  ?>
                  <!-- <tr>
                    <td class="product-thumbnail">
                      <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Top Up T-Shirt</h2>
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                  </tr> -->


                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location='shop.php'">Continue Shopping</button>
              </div>

              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="removeCookie()">Delete Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">

                      <?php //calc totals
                        $total = 0;

                        for($i=0; $i<count($prices); $i++){
                          $total += $prices[$i];
                        }

                        echo "$$total";
                      ?>

                    </strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                      <?php
                        echo "$$total";
                      ?>
                    </strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location.href = 'checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="upload.php">Sell online</a></li>
                  <li><a href="cart.php">Shopping cart</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="about.php">About</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="shop.php">Shop</a></li>
                  <li><a href="signUp.php">Sign up</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Annapolis, MD</li>
                <li class="phone"><a href="tel://6788008900">678 800 8900</a></li>
                <li class="email">m211332@usna.edu</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
