<!DOCTYPE html>

<html lang = "en">
  <head>
    <meta charset = "UTF-8">
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
     <h3> Thank you for signing up! Please click this <a href="login.html"> link </a>
       to log in!
     </h3>
   </body>
  </html>
