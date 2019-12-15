<?php
    
  session_start();

  if(!isset($_SESSION['admin'])){
    header("Location: noAccessPage.php");
  }

  $fp = fopen("uploads.txt", 'r');

  $toSend = array();
  $count = 0;

  while ($line = fgets($fp)){
    $all = explode("\t", $line);

    $toSend[$count] = $all[0]."\t".$all[1]."\t".$all[2]."\t".$all[3]."\t".$all[4];
    $count++;
  }

  echo json_encode($toSend);
?>
