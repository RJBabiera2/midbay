<!DOCTYPE html>
<?php
  session_start();
  
  if(!isset($_SESSION['admin'])){
    header("Location: noAccessPage.php");
  }
 ?>
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

    <?php
        include('footer.php');
    ?>
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
