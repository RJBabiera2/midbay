<?php
 
  session_start();
  if(!isset($_SESSION['admin'])){
    header("Location: noAccessPage.php");
  }
  echo '<div class="col-md-12 text-center">';
  echo '<h2 class="display-4 text-black">Welcome to your Admin Page</h2>';
  echo '<h2 class="display-5 text-black">Please select an option from the menu.</h2>';
  echo '</div>';
?>