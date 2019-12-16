<!DOCTYPE html>

<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title> Upload </title>
    <!--Meta tag descriptors-->
    <meta name="description" content="upload Item">
    <meta name="keywords" content="Upload, Item">
    <meta name="author" content="Ronjoseph Babiera">
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

    <div class="site-section">
      <div class="container">
        <div>
          <h1 class="h1 mb-3 text-black" style="text-align:center">Upload Item</h1>
          <div>

            <form method="post" action="processUpload.php" enctype="multipart/form-data">

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label class="text-black">Title of Item</label>
                    <input type="text" class="form-control" name="title" required>
                  </div>
                  <div class="col-md-6">
                    <label class="text-black">Price </label>
                    <input type="text" class="form-control" name="price" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="text-black">Category </label>
                    <!--<input type="checkbox" class="form-control" value="electronics" name="category" required>Electronics<br>
                    <input type="checkbox" class="form-control" value="uniform" name="category" required>Uniform Items<br>
                  -->
                    <select id="category" name="category" required>
                      <option value="electronics">Electronics</option>
                      <option value="uniform">Uniform Items</option>
                      <option value="civilianclothes">Civilian Clothes</option>
                      <option value="spiritgear">Spirit Gear</option>
                      <option value="shoes">Shoes</option>
                      <option value="watch">Watch</option>
                      <option value="other">Other</option>
                    </select>
                    <br>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="text-black">Contact </label>
                    <input type="email" class="form-control" name="contact" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="text-black">Venmo </label>
                    <input type="text" class="form-control" name="venmo" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="text-black">Description </label>
                    <textarea name="description" class="form-control" rows="8" cols="50" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="text-black">Select an Image </label>
                    <input type="file" name="fileToUpload" id="fileToUpload" required> <br>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" style="width:49%" value="Upload" required>
                    <input type="reset" class="btn btn-primary btn-lg" style="width:49%; float: right" value="Reset">
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
