<!DOCTYPE html>

<html lang = "en">
  <head>
    <meta charset = "UTF-8">
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
    <title> Sign up </title>
  </head>

  <?php
    //get the data
    $user = $_POST['userName'];
    $pass = $_POST['passWord'];

    //open the file and write
    $file = fopen("users.txt", 'a+');

    $toWrite = $user."\t".$pass."\t"."\n";

    fwrite($file, $toWrite);
    fclose($file);
   ?>

   <body>
     <h3> Thank you for signing up! Please click this <a href="login.php"> link </a>
       to log in!
     </h3>
   </body>
  </html>
