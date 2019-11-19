<?php
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $emailto = "m210228@usna.edu";
  $headers = "From: $email \r\n";
  $headers.= "Reply-To: $email \r\n";

  $totalmessage = "You have received a new message from $firstname $lastname.\n\nThe message is: \n $message";

  mail($emailto, $subject, $totalmessage, $headers);
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <title>Email Sent</title>
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

   <div class="site-wrap">

     <?php
         include('header.php');
     ?>

     <div class="site-section">
       <div class="container">
         <div class="row">
           <div class="col-md-12 text-center">
             <h2 class="display-3 text-black">Your Email Was Sent!</h2>
             <p class="lead mb-2">Here is the information you sent us:</p>
             <?php
               echo "<p class='lead mb-2'>Firstname: $firstname </p>";
               echo "<p class='lead mb-2'>Lastname:  $lastname</p>";
               echo "<p class='lead mb-2'>Email: $email</p>";
               echo "<p class='lead mb-2'>Subject: $subject</p>";
               echo "<p class='lead mb-5'>Message: $message</p>";
             ?>
             <p><a href="index.php" class="btn btn-sm btn-primary">Back Home</a></p>
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
           <div class="col-md-6 col-lg-3">
             <div class="block-5 mb-5">
               <h3 class="footer-heading mb-4">Contact Info</h3>
               <ul class="list-unstyled">
                 <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                 <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                 <li class="email">emailaddress@domain.com</li>
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
