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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $venmo = $_POST['venmo'];
    $password = $_POST['password'];
    
    //open the file and write
    $file = fopen("needVerify.txt", 'a+');

    $toWrite = $firstname." ".$lastname." ".$username." ".$email." ".$venmo." ".$password." "."\n";

    fwrite($file, $toWrite);
    fclose($file);
   ?>
   
   <body>
     
     <?php
         include('header.php');
     ?>
     
     <div class="site-section">
       <div class="container">
         <div class="row">
           <div class="col-md-12 text-center">
             <h2 class="display-3 text-black">Thank you for signing up!</h2>
             <h2 class="display-4 text-black">You will be emailed when you are verified.</h2>
           </div>
         </div>
       </div>
     </div>
     
     <?php
         include('footer.php');
     ?>
   </body>
</html>
