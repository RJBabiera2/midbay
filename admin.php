<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
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
    
      function displayVerify(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             var element = document.getElementById("info");
             element.innerHTML = xhttp.responseText;
             element.innerHTML += '<form method="post" action="verifyUser.php">'
                + '<div class="form-group row">'
                + "<div class='col-md-6'>"
                + "<input style='width: 300px;'type='text' class='form-control' id='username' name='username'>"
                + "</div>"
                + "<div class='col-md-6' style='left:20px'>"
                + "<button class='btn btn-primary'>Verify User</button>";
          }
        };
        
        xhttp.open("GET", "showToVerify.php", true);
        xhttp.send();
      }
    
      function displayUsers(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("info").innerHTML = xhttp.responseText;
          }
        };
        xhttp.open("GET", "showUsers.php", true);
        xhttp.send();
      }

      function displayItems(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("info").innerHTML = xhttp.responseText;
          }
        };
        xhttp.open("GET", "showItems.php", true);
        xhttp.send();
      }

      function hideInfo(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("info").innerHTML = xhttp.responseText;
          }
        };
        xhttp.open("GET", "hideInfo.php", true);
        xhttp.send();
      }
      
      function showProfile(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
             document.getElementById("info").innerHTML = xhttp.responseText;
          }
        };
        xhttp.open("GET", "showProfile.php", true);
        xhttp.send();
      }
    </script>

  </head>
  <body>

  <div class="site-wrap">

    <?php
        include('header.php');
    ?>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">
            <div class="p-3 p-lg-5 border" style="padding:0;">
              <div id="info" class="row mb-5 text-center text-black">
                <div class="col-md-12 text-center">
                  <h2 class="display-4 text-black">Welcome to your Admin Page</h2>
                  <h2 class="display-5 text-black">Please select an option from the menu.</h2>
                </div>
              </div>
          </div>
        </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Menu</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="#" class="d-flex" onclick="hideInfo()"><span>Admin Home</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex" onclick="showProfile()"><span>Your Profile</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex" onclick="displayVerify()"><span>Verify Users</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex" onclick="displayUsers()"><span>Display All Users</span></a></li>
                <li class="mb-1"><a href="#" class="d-flex" onclick="displayItems()"><span>Display All Items</span></a></li>
              </ul>
            </div>
            <div class="col-md-12" style="width:200px">
              <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='logout.php'">Logout</button>
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
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
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
