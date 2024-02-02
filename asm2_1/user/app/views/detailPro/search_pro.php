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
<!-- Products Start -->
<div class="container-fluid pt-5">
    <!-- Title -->
    <div class="text-center mb-4">
        <h2 class="section-title px-5">
            <span class="px-2">Products</span>
        </h2>
    </div>

    <!-- Search & sort -->
    <div class="row px-xl-5 pb-3">
        <!-- Search & sort -->
        <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <!-- Search -->
                <form action="search_pro" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name" name="kyw" />
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <!-- <i class="fa fa-search"></i> -->
                                <input type="submit" class="btn btn-primary" value="SEARCH" name="search">
                            </span>
                        </div>
                    </div>
                </form>
                <!-- Sort -->
                <div class="dropdown ml-4">
                    <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Latest</a>
                        <a class="dropdown-item" href="#">Popularity</a>
                        <a class="dropdown-item" href="#">Best Rating</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row px-xl-5 pb-3">
        <!-- Product -->
        <?php
        foreach ($spro as $s) {
            extract($s);
            $linksp = "pro_detail&id=" . $id;
            $tt = $price - (($price * $discount) / 100);
            $hinh = './app/public/image/' . $img;
            echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
     <div class="card product-item border-0 mb-4">
       <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
       <a href="' . $linksp . '">  <img class="img-fluid w-300" src="' . $hinh . '" alt="" id="img" /></a>
       </div>
       <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
         <h6 class="text-truncate mb-3">' . $name . '</h6>
         <div class="d-flex justify-content-center">
           <h6>' . number_format($tt, 0, ",", ".") . '$' . '</h6>
           <h6 class="text-muted ml-2"><del>' . number_format($price, 0, ",", ".") . '$' . '</del></h6>
         </div>
       </div>
       <div class="card-footer d-flex justify-content-between bg-light border">
         <a href="' . $linksp . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
         <form action="index.php?act=addtocart" method="post">
         <input type="hidden" name="id_pro" value="' . $id . '">
         <input type="hidden" name="name_pro" value="' . $name . '">
         <input type="hidden" name="img" value="' . $img . '">
         <input type="hidden" name="price" value="' . $price . '">
         <input type="hidden" name="discount" value="' . $discount . '">
         <input type="submit" value="Add To Cart" class="btn btn-sm text-dark p-0" name="addtocart"><i class="fas fa-shopping-cart text-primary mr-1"></i>
       </form>
       </div>
     </div>
   </div>';
        }
        ?>
    </div>
</div>
<!-- Products End -->
<!-- Footer Start -->
<div class="container-fluid shadow-lg bg-dark text-light mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold">
                    <span class="text-primary font-weight-bold border border-white px-3 mr-1">ULTRA SHOP</span>
                </h1>
            </a>
            <p>
                Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no
                sit erat lorem et magna ipsum dolore amet erat.
            </p>
            <p class="mb-2">
                <i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street,
                New York, USA
            </p>
            <p class="mb-2">
                <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
            </p>
            <p class="mb-0">
                <i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890
            </p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <!-- Quick Links -->
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-light mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-light mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-light mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-light mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <!-- Newsletter and Social Media -->
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-light mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                                Subscribe Now
                            </button>
                        </div>
                    </form>
                    <h6 class="text-secondary text-light mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-light">
                &copy;
                <a class="text-light font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                <a class="text-light font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br />
                Distributed By
                <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="user/img/payments.png" alt="" />
        </div>
    </div>
</div>

<script src="js/cart.js"></script>
<!-- Footer End -->