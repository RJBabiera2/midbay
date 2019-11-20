<!DOCTYPE html>

<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title> Upload Item </title>
  </head>

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
      echo"gothere";
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 100000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      return;
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
    }

    $id++;
    $write = fopen("currentId.txt", 'w+');
    $id = strval($id);
    fwrite($write, $id);
    echo($id);
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
  ?>

  <body>
    <p>
      Thank you for uploading an item!
    </p>
  </body>

</html>
