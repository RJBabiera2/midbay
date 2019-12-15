<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: noAccessPage.php");
  }
  $query = $_GET["q"];	  $searchItem = isset($_GET['query'])?$_GET['query']: '';
  //$query = $_GET["q"];
  $fp = fopen("uploads.txt", "r");	  $fp = fopen("uploads.txt", "r");
  $toSend = array();	  $searchResults = array();
  $send = false;	  $send = false;
  $count = 0;
  while($line = fgets($fp)){	  while($line = fgets($fp)){
    $allLine = explode("\t", $line);	    $allLine = explode("\t", $line);
    for($i=0; $i<count($allLine); $i++){	    if(strcmp($searchItem, $allLine[2]) == 0){ // if match, put in send aray
      $searchResults[$count] = $line;
      if(strcmp($query, $allLine[$i]) == 0){ // if match, put in send aray	      $count++;
        echo("got here");	
        $toSend[$count] = $line;	
        $count++;	
      }	
    }	    }
  }	  }
  echo json_encode($toSend);	  //echo json_encode($toSend);
 ?>	 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <script>
       //should call a search
       function search(a){
         var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function(){
           if (this.readyState == 4 && this.status == 200){
             var toParse = this.responseText;
             toParse = JSON.parse(toParse);
             var toWrite = new Array();
             for(var i=0; i<toParse.length; i++){
               toWrite[i] = toParse[i].split("\t");
             }
             //document.writeln(toParse.length);
             //one table row epr loop
             for(var i=0; i<toWrite.length; i++){
               for(var j=1; j<5; j++){
                 var toChange = document.getElementById("in"+i+" "+j);
                 toChange.innerHTML = toWrite[i][j];
               }
             }
           }
           xhttp.open("GET", "search.php?q="+a, true);
           xhttp.send();
         }
       }
       function addCookie(a){
         // var cookieSet = document.cookie; //get current cookie
         var readCookie = document.cookie;
         var allCookies = readCookie.split(";"); //all teh cookies in an array
         var toSet = ""; //varaible to set the cokoies to
         for(var i=0; i<allCookies.length; i++){
           if (allCookies[i].includes("cart")){
             toSet = allCookies[i];
             break;
           }
           toSet = "cart=";
         }
         toSet += "-";
         toSet += a; //add this cookie
         toSet += "-;";
         //document.writeln(cookieSet);
         document.cookie = toSet;
         //document.writeln(document.cookie);
         alert("Item added!");
       };
     </script>
     <title>Shop</title>
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

     <div class="bg-light py-3">
       <div class="container">
         <div class="row">
           <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
         </div>
       </div>
     </div>

     <div class="site-section">
       <div class="container">

         <div class="row mb-5">
           <div class="col-md-9 order-2">

             <div class="row">
               <div class="col-md-12 mb-5">
                 <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                 <div class="d-flex">


                 </div>
               </div>
             </div>
             <div class="row mb-5">

             <?php
             //$fp = fopen("uploads.txt", 'r');
             //while ($line = fgets($fp)){
             $size = sizeof($searchResults);
             for($i=0; $i<$size; $i++){
               //get all the data in array
               $all = explode("\t", $searchResults[$i]);
               echo "<div class=\"col-sm-6 col-lg-4 mb-4\" data-aos=\"fade-up\">";
               echo "<div class=\"block-4 text-center border\">";
               echo "<figure class=\"block-4-image\">";
               echo "<img src=./";
               echo($all[5]);
               echo " alt=\"Image placeholder\" class=\"img-fluid\"></a>";
               echo "</figure>";
               echo "<div class=\"block-4-text p-4\">";
               echo "<h3><a href=\"shop-single.html\" id=\"0-name\">";
               echo ($all[2]);
               echo "</a></h3>";
               echo "<p class=\"mb-0\" id=\"0-subname\">";
               echo($all[3]);
               echo "</p>";
               echo "<p class=\"text-primary font-weight-bold\" id=\"0-price\">";
               echo($all[1]);
               echo "<br>";
               echo "<button class=\"btn btn-outline-primary btn-sm btn-block\" onclick=\"addCookie(";
               echo ($all[0]); //id
               echo ")\">Add to Cart </button>";
               //echo "<button value=\"Add to Cart\" id=\"add\" onclick=\"addToCart(" + $all[0] + ")";
               echo "</p>";
               echo "</div></div></div>";
             }
             ?>


             </div>

           </div>

           <div class="col-md-3 order-1 mb-5 mb-md-0">
             <div class="border p-4 rounded mb-4">
               <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
               <ul class="list-unstyled mb-0">
                 <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                 <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span class="text-black ml-auto">(2,550)</span></a></li>
                 <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span class="text-black ml-auto">(2,124)</span></a></li>
               </ul>
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