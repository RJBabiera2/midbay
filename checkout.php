<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Checkout</title>
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
      }
    </script>
  </head>
  <body>

  <div class="site-wrap">

    <?php
      include('header.php');

      //getting cookie data
      $cart = "cart";
      $toFind = $_COOKIE[$cart];
      $possibleFinds = explode("-",$toFind);

      //opening uploads file
      $fp = fopen("uploads.txt", 'r');
      $venmo = array();
      $name = array();
      $prices = array();
      $toWrite = array();
      $write = true;

      while ($line = fgets($fp)){
        $all = explode("\t", $line);

        for($i=0; $i<count($possibleFinds); $i++){
          if($possibleFinds[$i] == $all[0]){ //deletet line
            $venmo[count($venmo)] = $all[6];
            $name[count($name)] = $all[2];
            $prices[count($prices)] = $all[1];
            $write = false;
          }
        }

        if($write){
          $toWrite[count($toWrite)] = $line;
        }

      }

      //write to file, got concept of this from stackexchange
      fclose($fp);
      $fw = fopen("uploads.txt", 'w');

      for($i=0; $i<count($toWrite); $i++){
        fwrite($fw, $toWrite[$i]);
      }

    ?>

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
                    <th class="product-price">Venmo</th>
                    <th class="product-price">Price</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    echo(count($venmo));
                    for($i=0; $i<count($venmo); $i++){
                      echo "<tr>";
                      // echo "<td class=\"product-thumbnail\">";
                      // echo "<img src=./\"";
                      // echo($all[5]);
                      // echo " alt=\"Image\" class=\"img-fluid\">";
                      // echo "</td>";
                      echo "<td class=\"product-name\">";
                      echo "<h2 class=\"h5 text-black\">";
                      echo($name[$i]);
                      echo "</h2>";
                      echo "</td>";
                      echo "<td>";
                      echo($venmo[$i]);
                      echo"</td>";
                      echo "<td>$";
                      echo($prices[$i]);
                      echo "</td>";
                      echo "</tr>";
                    }
                  ?>

                </tbody>
              </table>
            </div>
          </form>
        </div>

        <p class="mb-4">
          Listed above are the products you have bought and the users
          to Venmo. After the sellers have received the money, they will
          send you your item. Thank you for using our site!
        </p>

  </body>
</html>
