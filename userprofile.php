<?php
  session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: login.php");
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />

  <!--Meta tag descriptors-->
  <meta name="description" content="User profile">
  <meta name="keywords" content="Registration, Results">
  <meta name="author" content="Harrison Bleckley">
  <style>
  </style>

  <title>MidBay Profile</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php
    $username = $_SESSION['username'];

    //Open and read users.txt

    $logFile = fopen("users.txt", "r");
    $line = fgets($logFile);
    while(!feof($logFile)) {
      $pieces = explode(" ", $line);
      if($pieces[2] == $username) {
        $theUser = $line;
        $firstName = $pieces[0];
      }
      $line = fgets($logFile);
    }

    echo "<h1>Welcome, $firstName!</h1>";
  ?>

  <br>

  <table>
    <caption><b>Your Information</b></caption>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Venmo</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
  <?php //Parse the user input and write to table
      echo "<tr>";
      $userData = explode(" ", $theUser);
      for($i = 0; $i < 6; $i++) {
        echo "<td>$userData[$i]</td>";
      }
      echo "</tr>";
  ?>
    </tbody>
  </table>
  
  <div class="col-md-12" style="width:200px">
    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='upload.html'">Upload Item</button><br>
  </div>
  
  <div class="col-md-12" style="width:200px">
    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='logout.php'">Logout</button>
  </div>

</body>

</html>
