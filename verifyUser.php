<?php
  session_start();
  $noaccess = false;
  if(!isset($_SESSION['admin'])){
    $noaccess = true;
  }

  //get data
  $user = $_POST['username'];
  
  $fp = fopen("needVerify.txt", 'r');
  $fpwrite = fopen("users.txt", 'a+');
  $fpwritetemp = fopen("needVerifyTemp.txt", 'w');

  //iterate through file loooking for matches
  while($line = fgets($fp)){
    $text = explode(" ", $line);
    $toWrite = $text[2]." ".$text[5]." ".$text[0]." ".$text[1]." ".$text[3]." ".$text[4]." "."\n";
    if(strcmp($user, $text[2]) == 0){
      fwrite($fpwrite, $toWrite);
      fclose($fpwrite);
    }
    else{
      fwrite($fpwritetemp, $toWrite);
    }
  }
  
  fclose($fp);
  fclose($fpwritetemp);
  
  $fpwrite = fopen("needVerify.txt", 'w');
  $fp = fopen("needVerifyTemp.txt", 'r');
  $fpusers = fopen("usernames.txt", 'w');

  //iterate through file loooking for matches
  while($line = fgets($fp)){
    $text = explode(" ", $line);
    $toWrite = $text[2]." ".$text[5]." ".$text[0]." ".$text[1]." ".$text[3]." ".$text[4]." "."\n";
    fwrite($fpwrite, $toWrite);
    fwrite($fpwrite, $text[2]." "$text[3]." ".$text[1]." "."\n");
  }
  
  fclose($fp);
  fclose($fpwrite);
  
  if($noaccess == false){
    header("Location: admin.php");
  }
  else{
    header("Location: noAccessPage.php");
  }
 ?>