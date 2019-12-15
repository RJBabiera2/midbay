<!DOCTYPE html>
<html lang="en">
  <head>
    <title>midBay</title>
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

  </head>
  <body>
    <?php
      $toVerifyFile = "needVerify.txt";
      $fh = fopen($toVerifyFile, "r");
      echo "<ul>";
      if($fh){
        while($line = fgets($fh)){
          $text = explode(" ", $line);
          echo "<li style='font-size: 20px; text-align: left;'>".$text[2]." ".$text[0]." ".$text[1]." ".$text[3]." ";
          echo "</li>";
        }
      
      }
      echo "</ul>";
     ?>
   </body>
   </html>