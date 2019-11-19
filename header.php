<?php
  session_start();

  if(!isset($_SESSION["username"])){
    $PROFILE = "login.php";
    $SHOP = "login.php";
    $CART = "login.php";
    $showSearch = false;
  }
  else{
    $PROFILE = "userprofile.php";
    $SHOP = "shop.php";
    $CART = "cart.php";
    $showSearch = true;
  }
 ?>

<header class="site-navbar" role="banner">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left" >
          <form action="" class="site-block-top-search" <?php if($showSearch == false){ echo 'style="display:none"'; }?>>
            <span class="icon icon-search2"></span>
            <input type="text" onsubmit="search(this.value)" class="form-control border-0" id = "search" placeholder="Search">
          </form>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="index.php" class="js-logo-clone">midBay</a>
          </div>
        </div>

        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <li><a href=<?php echo $PROFILE ?>><span class="icon icon-person"></span></a></li>
              <li>
                <a href=<?php echo $CART ?> class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                </a>
              </li>
              <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href=<?php echo $SHOP ?>>Shop</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>
