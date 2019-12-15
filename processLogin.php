
  <?php
    
    //get data
    $user = $_POST['user'];
    $pass = $_POST['passwd'];

    //open the file
    $fp = fopen("users.txt", 'r');

    //iterate through file loooking for matches
    $logIn = false;
    while($line = fgets($fp)){
      $text = explode(" ", $line);
      echo "<p> $user, $pass</p>";
      var_dump($text);

      if(strcmp($user, $text[0]) == 0 && strcmp($pass, $text[1]) == 0){
        $logIn = true;
        break;
      }
    }
    
    fclose($fp);
    
    $fp = fopen("admins.txt", 'r');
    $admintext;

    //iterate through file loooking for matches
    while($line = fgets($fp)){
      $text = explode(" ", $line);
      var_dump($text);

      if(strcmp($user, $text[0]) == 0 && strcmp($pass, $text[1]) == 0){
        $admintext = $text;
        $admin = true;
        $logIn = true;
        break;
      }
    }
    
    fclose($fp);
    
    if($logIn){
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['username'] = $user;
      if($admin){
        $_SESSION['admin'] = true;
        $_SESSION['usernamem'] = $admintext[0];
        $_SESSION['password'] = $admintext[1];
        $_SESSION['firstname'] = $admintext[2];
        $_SESSION['lastname'] = $admintext[3];
        $_SESSION['email'] = $admintext[4];
        $_SESSION['venmo'] = $admintext[5];
      }
        
      header("Location: index.php");
    }
    
  
   ?>
