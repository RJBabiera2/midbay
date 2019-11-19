<?php
/*Start session, if not logged in, return to login
  session_start();

  if(!isset($_SESSION['userID'])) {
    header("Location: login.html");
  }
  */
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />

  <!--Meta tag descriptors-->
  <meta name="description" content="User profile">
  <meta name="keywords" content="Registration, Results">
  <meta name="author" content="Harrison Bleckley">
  <style>
    table, th, td {
    border: 1px solid black;
  }
  </style>

  <title>User Profile</title>
</head>

<body>
  <h1>Welcome, User!</h1>

  <?php
    //Open and read LOG.txt
    $userNum = 0;

    $logFile = fopen("users.txt", "r");
    $line = fgets($logFile);
    while(!feof($logFile)) {
      //$pieces = explode("\t", $line);
      $allUsers[$userNum] = $line;
      $userNum++;
      $line = fgets($logFile);
    }
    //Sort alphabetically by first name
    sort($allUsers);
    fclose($logFile);
  ?>

  <?php
      /*Display the summary characteristics
      echo "<h3>Summary:</h3>";
      echo "Number of users: $userNum<br>";
      */
  ?>
  <br>

  <table>
    <caption><b>Your Info</b></caption>
    <thead>
      <tr>
        <th>Name</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
  <?php //Parse the user input and write to table
    for($i = 0; $i < $userNum; $i++) {
      echo "<tr>";
      $userData = explode("\t", $allUsers[$i]);
      for($j = 0; $j < 2; $j++) {
        if($j == 1) {
          echo "<td>********</td>";
        }
        else {
          echo "<td>$userData[$j]</td>";
        }
      }
      echo "</tr>";
    }
  ?>
    </tbody>
  </table>

</body>

</html>
