<?php
  $query = $_GET["q"];

  $fp = fopen("uploads.txt", "r");
  $toSend = array();
  $send = false;

  while($line = fgets($fp)){

    $allLine = explode("\t", $line);
    for($i=0; $i<count($allLine); $i++){

      if(strcmp($query, $allLine[$i]) == 0){ // if match, put in send aray
        echo("got here");
        $toSend[$count] = $line;
        $count++;
      }
    }
  }

  echo json_encode($toSend);
 ?>
