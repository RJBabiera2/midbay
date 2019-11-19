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

    //taken from w3schools
    $target_dir = "images/userImg/";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir))
      echo "gothere";
    else
      echo "bad";

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

    $toWrite = $id."\t".$price."\t".$name."\t".$contact."\t".$desc."\n";
    fwrite($fp, $toWrite);
    fclose($file);
  ?>

  <body>
    <p>
      Thank you for uploading an item!
    </p>
  </body>

</html>
