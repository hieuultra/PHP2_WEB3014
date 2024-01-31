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
</head>
<style>
    label.error {
        color: red;
    }

    .tbao {
        color: red;
    }
</style>

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
    <main class="main d-flex w-100 mt-5">
        <div class="container d-flex flex-column mt-5">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Account</h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <!-- <img src="" alt="logo" class="img-fluid rounded-circle" width="132" height="132" /> -->
                                        <h1 class="m-0 display-5 font-weight-semi-bold">
                                            <span class="text-primary font-weight-bold border px-3 mr-1">Ultra</span>Shop
                                        </h1>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['auth']) && (is_array($_SESSION['auth']))) {
                                        extract($_SESSION['auth']);
                                    }
                                    ?>
                                    <div class="text-center mt-4 font-weight-bold border px-3 mr-1">
                                        HELLO <br />
                                        <?= $username ?>
                                    </div>
                                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px">
                                        <?php
                                        $hinhpath = "./upload/" . $img;
                                        if (is_file($hinhpath)) {
                                            $hinh = "<img src='" . $hinhpath . "' height='170'>";
                                        } else {
                                            $hinh = "No photo";
                                        }
                                        ?>
                                        <?= $hinh ?>
                                    </div>
                                    <div class="form-group">
                                        <?php if ($id_role == 1) { ?>
                                            <li><a href="act=mybill">My order </a></li>
                                        <?php } ?>
                                        <li> <a href="forgot_password">Forgot password?</a></li>
                                        <li> <a href="edit_account">Edit account </a> </li>
                                        <?php if ($id_role == 2) { ?>
                                            <li> <a href="../admin">Login admin </a></li>
                                        <?php } ?>
                                        <li> <a href="logOut">Log out </a></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="tbao">
                            <?php
                            if (isset($tbao) && ($tbao) != "") {
                                echo $tbao;
                            }
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>