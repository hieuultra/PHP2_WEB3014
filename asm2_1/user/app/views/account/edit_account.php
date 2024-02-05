<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template" />
    <meta name="author" content="Bootlab" />

    <title>Edit Account - AppStack - Admin &amp; Dashboard Template</title>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
</head>

<body>
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
                            <a href="?act=shop" class="nav-item nav-link">Shop</a>

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
                            <a href="?act=contact" class="nav-item nav-link">Contact</a>
                            <a href="?act=blog" class="nav-item nav-link">Blog</a>
                            <a href="?act=sell" class="nav-item nav-link">Selling Products</a>
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
    <main class="main d-flex w-100 mt-5">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Edit Account</h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <?php
                                    if (isset($_SESSION['auth']) && (is_array($_SESSION['auth']))) {
                                        extract($_SESSION['auth']);
                                    }
                                    ?>
                                    <form action="editAcc&id=<?= $id ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <label>Username</label>
                                            <input class="form-control form-control-lg" type="text" name="username" value="<?= $username ?>" />
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="text" name="password" value="<?= $password ?>" />
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" value="<?= $email ?>" />
                                            <label>Address</label>
                                            <input class="form-control form-control-lg" type="text" name="address" value="<?= $address ?>" />
                                            <label>Phone</label>
                                            <input class="form-control form-control-lg" type="text" name="phone" value="<?= $phone ?>" />
                                            <label>Image</label>
                                            <input class="form-control form-control-lg" type="file" name="img" value="" />
                                            <img src="<?= $img ?>" alt="" width="70" height="60">
                                        </div>
                                        <div class="text-center mt-3">
                                            <input type="submit" href="#" class="btn btn-lg btn-primary" value="Edit" name="edit">
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Reset password</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div style="color: red;">
                            <?php
                            if (isset($tb) && ($tb) != "") {
                                echo $tb;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>