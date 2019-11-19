<?php
  $itemsFile = "items.txt";
  $fh = fopen($itemsFile, "r");
  echo "<ul>";
  if($fh){
    while(!feof($fh)){
      echo "<li style='font-size: 20px;'>".fgets($fh)."</li>";
    }
  }
  echo "</ul>";
 ?>