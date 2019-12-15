<?php
  $itemsFile = "uploads.txt";
  $fh = fopen($itemsFile, "r");
  echo "<ul>";
  if($fh){
    while(!feof($fh)){
      echo "<li style='font-size: 20px; text-align: left;'>".fgets($fh)."</li>";
    }
  }
  echo "</ul>";
 ?>
