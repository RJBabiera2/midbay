<?php
  $fp = fopen("uploads.txt", 'r');

  $toSend = array();
  $count = 0;

  while ($line = fgets($fp)){
    $all = explode("\t", $line);

    $toSend[$count][$id] = $all[0];
    $toSend[$count][$price] = $all[1];
    $toSend[$count][$name] = $all[2];
    $toSend[$count][$email] = $all[3];
    $toSend[$count][$description] = $all[4];
    $count++;
  }

  echo json_encode($toSend);
?>
