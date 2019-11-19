<!DOCTYPE html>

<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title> Sign up </title>
  </head>

  <?php
    //get data
    $user = $_POST['user'];
    $pass = $_POST['passwd'];

    //open the file
    $fp = fopen("users.txt", 'r');

    //iterate through file loooking for matches
    $logIn = false;
    while($line = fgets($fp)){
      $text = explode("\t", $line);
      echo "<p> $user, $pass</p>";
      var_dump($text);

      if(strcmp($user, $text[0]) == 0 && strcmp($pass, $text[1]) == 0){
        $logIn = true;
        echo "<p>here</p>";
        break;
      }
    }

    if($logIn){
      session_start();
      $_SESSION['login'] = true;

      header("Location: index.html");
    }
    else
      //header("Location: login.html");
   ?>

   </html>
