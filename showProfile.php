<?php

  session_start();
  echo "<ul>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Username - ".$_SESSION['usernamem']."</li>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Password - ".$_SESSION['password']."</li>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Firstname - ".$_SESSION['firstname']."</li>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Lastname - ".$_SESSION['lastname']."</li>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Email - ".$_SESSION['email']."</li>";
  echo "<li style='font-size: 20px; text-align: left; list-style-type:none'> Venmo - ".$_SESSION['venmo']."</li>";
  echo "</ul>";
 ?>