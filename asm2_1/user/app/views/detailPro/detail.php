<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template" />
  <meta name="author" content="Bootlab" />

  <title>Sign In - AppStack - Admin &amp; Dashboard Template</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Favicon -->
  <link href="./app/img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="./app/views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./app/views/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="./app/css/popup.css">
</head>
<style>
  #img {
    height: 300px;
    width: 100%;
  }

  h2 {
    color: red;
  }

  .product-details {
    display: flex;
    align-items: center;
  }

  .like-form {
    margin-left: auto;
    /* Đẩy form sang bên phải */
  }
</style>
<marquee behavior="scroll" direction="left" scrollamount="5">
  <span style="font-size: 18px; color: red;">Free exchange for 30 days.</span>
</marquee>
<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
  <div class="col-lg-4">
    <a href="./" class="text-decoration-none">
      <span class="h1 text-uppercase text-primary bg-dark px-2">Ultra</span>
      <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
    </a>
  </div>
  <div class="col-lg-4 col-6 text-left">
    <form action="index.php?act=search_pro" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for products [Enter]" name="kyw">
        <div class="input-group-append">
          <span class="input-group-text bg-transparent text-primary">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-4 col-6 text-right">
    <p class="m-0">Customer Service</p>
    <h5 class="m-0">+012 345 6789</h5>
  </div>
</div>
<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
  <div class="row px-xl-5">
    <div class="col-lg-3 d-none d-lg-block">
      <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
        <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
        <i class="fa fa-angle-down text-dark"></i>
      </a>
      <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
        <div class="navbar-nav w-100">
          <!-- <?php
                foreach ($listCat as $c) {
                  extract($c);
                  // $linkdm = "index.php?act=product_cat&id_cat=" . $id_cat;
                  echo '
  <a href="' . $linkdm . '" class="dropdown-item">' . $name . '</a>
  ';
                }
                ?> -->
        </div>
      </nav>
    </div>
    <div class="col-lg-9">
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
        <a href="" class="text-decoration-none d-block d-lg-none">
          <span class="h1 text-uppercase text-dark bg-light px-2">Ultra</span>
          <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
            <a href="./" class="nav-item nav-link active">Home</a>
            <a href="shop" class="nav-item nav-link">Shop</a>

            <div class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Brands</a>
              <div class="dropdown-menu rounded-0 m-0">
                <!-- <?php
                      foreach ($dsbr as $br) {
                        extract($br);
                        $linkdm = "index.php?act=product_brand&id_brand=" . $id_brand;
                        echo '
                <a href="' . $linkdm . '" class="dropdown-item">' . $name_brand . '</a>
                ';
                      }
                      ?> -->
              </div>
            </div>
            <a href="contact" class="nav-item nav-link">Contact</a>
            <a href="blog" class="nav-item nav-link">Blog</a>
            <a href="sell" class="nav-item nav-link">Selling Products</a>
          </div>
          <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
            <a href="?act=view_wishlist" class="btn px-0">
              <i class="fas fa-heart text-primary"></i>
              <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
            <a href="?act=view_cart" class="btn px-0 ml-3">
              <i class="fas fa-shopping-cart text-primary"></i>
              <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
            <?php
            if (isset($_SESSION['auth'])) {
            ?>
              <a href="account" class="btn px-0">
                <i class="fa-regular fa-user text-primary"></i>
                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
              </a>
            <?php
            } else {
            ?>
              <a href="login" class="btn px-0">
                <i class="fa-regular fa-user text-primary"></i>
                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"></span>
              </a>
            <?php } ?>
            <a href="?act=mybill" class="btn px-0">
              <i class="fas fa-file-invoice-dollar text-primary"></i>
              <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- Navbar End -->
<!-- Shop Detail Start -->
<div class="container-fluid py-5">
  <div class="row px-xl-5">
    <div class="col-lg-5 pb-5">
      <!-- List img -->
      <div id="product-carousel" class="carousel slide" data-ride="carousel">
        <?php
        extract($onePro);
        ?>
        <?php
        $tt = $price - (($price * $discount) / 100);
        $hinh = "./app/public/image/" . $img;
        // $hinh1 = $img_path . $thumbnail;
        echo ' <div class="carousel-inner border">
          <div class="carousel-item active">
            <img class="w-100 h-100" src="' . $hinh . '" id="x" />
          </div>
          <div class="carousel-item">
            <img class="w-100 h-100" src="' . $hinh . '" id="x" />
          </div>
          <div class="carousel-item">
            <img class="w-100 h-100" src="' . $hinh . '" id="x" />
          </div>
        </div>';
        ?>

        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
          <i class="fa fa-2x fa-angle-left text-dark"></i>
        </a>
        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
          <i class="fa fa-2x fa-angle-right text-dark"></i>
        </a>
      </div>
    </div>

    <!-- Product information -->
    <div class="col-lg-7 pb-5">
      <div class="product-details">
        <h3 class="font-weight-semi-bold"><?= $name ?></h3>
        <form action="index.php?act=wishlist" method="post" class="like-form">
          <input type="hidden" name="id_pro" value="<?= $id ?>">
          <input type="hidden" name="name_pro" value="<?= $name ?>">
          <input type="hidden" name="img" value="<?= $img ?>">
          <input type="hidden" name="price" value="<?= $price ?>">
          <input type="hidden" name="discount" value="<?= $discount ?>">
          <input type="submit" class="btn btn-primary" value="Like" name="wishlist">
        </form>
      </div>
      <div class="d-flex mb-3">
        <div class="text-primary mr-2">
          <small class="fas fa-star"></small>
          <small class="fas fa-star"></small>
          <small class="fas fa-star"></small>
          <small class="fas fa-star-half-alt"></small>
          <small class="far fa-star"></small>
        </div>
        <small class="pt-1">(50 Reviews)</small>
      </div>
      <h3 class="font-weight-semi-bold mb-4"><?= number_format($tt, 0, ",", ".") . '$' ?></h3>
      <p class="mb-4">
      <h2><del><?= number_format($price, 0, ",", ".") . '$' ?></del></h2>

      </p>

      <!-- Size -->
      <div class="d-flex mb-3">
        <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
        <select class="form-select" name="id_size">
          <!-- <?php
                if (isset($dss)) {
                  foreach ($dss as $ds) {
                    if ($ds['id_size'] == $id_size) $s = "selected";
                    else $s = "";
                    echo ' <div class="custom-control custom-radio custom-control-inline">
              <option value="' . $ds['id_size'] . '" ' . $s . '>' . $ds['name_size'] . '</option>
            </div>';
                  }
                } else {
                  // Xử lý khi biến $dss chưa được khởi tạo
                }
                ?> -->
          <!-- <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="size-2" name="size" />
            <label class="custom-control-label" for="size-2">S</label>
          </div> -->
        </select>
      </div>

      <!-- Color -->
      <div class="d-flex mb-4">
        <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
        <form>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="color-1" name="color" />
            <label class="custom-control-label" for="color-1">Black</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="color-2" name="color" />
            <label class="custom-control-label" for="color-2">White</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="color-3" name="color" />
            <label class="custom-control-label" for="color-3">Red</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="color-4" name="color" />
            <label class="custom-control-label" for="color-4">Blue</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="color-5" name="color" />
            <label class="custom-control-label" for="color-5">Green</label>
          </div>
        </form>
      </div>
      <div class="d-flex align-items-center mb-4 pt-2">
        <div class="input-group quantity mr-3" style="width: 130px">
          <div class="input-group-btn">
            <button class="btn btn-primary btn-minus">
              <i class="fa fa-minus"></i>
            </button>
          </div>
          <input type="text" class="form-control bg-secondary text-center" value="1" />
          <div class="input-group-btn">
            <button class="btn btn-primary btn-plus">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <form action="index.php?act=addtocart" method="post">
          <input type="hidden" name="id_pro" value="<?= $id ?>">
          <input type="hidden" name="name_pro" value="<?= $name ?>">
          <input type="hidden" name="img" value="<?= $img ?>">
          <input type="hidden" name="price" value="<?= $price ?>">
          <input type="hidden" name="discount" value="<?= $discount ?>">
          <input type="submit" class="btn btn-primary px-3" name="addtocart" value=' Add To Cart'>
          <i class="fa fa-shopping-cart mr-1"></i>
        </form>
        <!-- <a href="?act=addtocart"> <button class="btn btn-primary px-3">
            <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
          </button></a> -->
      </div>
      <div class="d-flex pt-2">
        <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
        <div class="d-inline-flex">
          <a class="text-dark px-2" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-dark px-2" href="">
            <i class="fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Description & Review -->
  <div class="row px-xl-5">
    <div class="col">
      <div class="nav nav-tabs justify-content-center border-secondary mb-4">
        <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
        <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews</a>
      </div>
      <div class="tab-content">

        <!-- Description -->
        <div class="tab-pane fade show active" id="tab-pane-1">
          <h4 class="mb-3">Product Description</h4>
          <p>
            <?= $description ?>
          </p>
        </div>

        <!-- Review -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
            $("#tab-pane-3").load("user/comment/comment_form.php", {
              id_pro: <?= $id_pro ?>
            });
          });
        </script>
        <div class="tab-pane fade" id="tab-pane-3">

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Shop Detail End -->

<!-- Products Start -->
<div class="container-fluid py-5">
  <div class="text-center mb-4">
    <h2 class="section-title px-5">
      <span class="px-2">You May Also Like</span>
    </h2>
  </div>
  <div class="row px-xl-5">
    <!-- Realted Products -->
    <div class="col">
      <div class="owl-carousel related-carousel">
        <!-- <?php
              foreach ($spcl as $cl) {
                extract($cl);
                $linksp = "index.php?act=pro_detail&id_pro=" . $id_pro;
                $tt = $price - (($price * $discount) / 100);
                $hinh = $img_path . $img;
                echo '<div class="card product-item border-0">
          <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
          <a href="' . $linksp . '"><img class="img-fluid w-100" src="' . $hinh . '" alt="" id="img"/></a>
          </div>
          <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
          <a href="' . $linksp . '"><h6 class="text-truncate mb-3">' . $name_pro . '</h6></a>
            <div class="d-flex justify-content-center">
              <h6>' .  number_format($tt, 0, ",", ".") . '$' . '</h6>
              <h6 class="text-muted ml-2"><del>' . number_format($price, 0, ",", ".") . '$' . '</del></h6>
            </div>
          </div>
          <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="' . $linksp . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
            <form action="index.php?act=addtocart" method="post">
         <input type="hidden" name="id_pro" value="' . $id_pro . '">
         <input type="hidden" name="name_pro" value="' . $name_pro . '">
         <input type="hidden" name="img" value="' . $img . '">
         <input type="hidden" name="price" value="' . $price . '">
         <input type="hidden" name="discount" value="' . $discount . '">
         <input type="submit" value="Add To Cart" class="btn btn-sm text-dark p-0" name="addtocart"><i class="fas fa-shopping-cart text-primary mr-1"></i>
       </form>
          </div>
        </div>';
              }
              ?> -->
      </div>
    </div>
  </div>
</div>

</html>
<!-- Products End -->