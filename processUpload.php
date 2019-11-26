<!DOCTYPE html>

<html lang = "en">
  <head>
    <title> Upload Item </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <?php
      include('header.php');
    ?>

    <h1 class='h1 mb-5 text-black' style='text-align: center;'>
      Upload Confirmation
    </h1>

    <?php

      $num = fopen("currentId.txt", 'r+');
      $numString = fgets($num);
      fclose($num);
      $id = intval($numString); //taken from w3

      //taken directly from w3schools
      $target_dir = "images/userImg/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        echo "gothere";
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>File is an image - " . $check["mime"] . ".</h2>";
            $uploadOk = 1;
        } else {
            echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>File is not an image.</h2>";
            $uploadOk = 0;
        }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>Sorry, file already exists.</h2>";
        $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 100000000) {
        echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>Sorry, your file is too large.</h2>";
        $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h2>";
        $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>Sorry, your file was not uploaded.</h2>";

      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h2>";
        } else {
            echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>Sorry, there was an error uploading your file.,/h2>";
        }
      }

      if ($uploadOk != 0) {
        $id++;
        $write = fopen("currentId.txt", 'w+');
        $id = strval($id);
        fwrite($write, $id);
        echo "<h2 class='h2 mb-3 text-black' style='text-align: center;'>The id of your item is ". $id. "</h2>";
        fclose($write);

        //get data
        $price = $_POST['price'];
        $name = $_POST['title'];
        $contact = $_POST['contact'];
        $desc = $_POST['description'];

        //open the file
        $fp = fopen("uploads.txt", 'a+');

        $toWrite = $id."\t".$price."\t".$name."\t".$contact."\t".$desc."\t".$target_file."\n";
        fwrite($fp, $toWrite);
        fclose($file);

        echo "<h2 class='h2 mb-4 text-black' style='text-align: center;'>Thank you for uploading an item!</h2>";
      }
    ?>
    <div>
      <br>
      <div style="margin: 0 auto; width:300px">
        <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='upload.php'">Upload Another Item</button><br>
      </div>

      <div style="margin: 0 auto;width:200px">
        <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='index.php'">Home</button>
      </div>
    </div>
  </body>

</html>
