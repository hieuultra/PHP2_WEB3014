﻿<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template" />
  <meta name="author" content="Bootlab" />

  <title>Sign Up - AppStack - Admin &amp; Dashboard Template</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
</head>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
  $().ready(function() {
    $("#demoForm").validate({
      onfocusout: false,
      onkeyup: false,
      onclick: false,
      rules: {
        "username": {
          required: true,
          maxlength: 10
        },
        "password": {
          required: true,
          minlength: 3
        },
        "name": {
          required: true,
          minlength: 5
        },
        "address": {
          required: true,
        },
        "phone": {
          required: true,
        },
        "email": {
          required: true,
          email: true
        }
      },
      messages: {
        "username": {
          required: "Bắt buộc nhập username",
          maxlength: "Hãy nhập tối đa 10 ký tự"
        },
        "password": {
          required: "Bắt buộc nhập password",
          minlength: "Hãy nhập ít nhất 3 ký tự"
        },
        "name": {
          required: "Bắt buộc nhập ho ten",
          maxlength: "Hãy nhập ít nhất 5 ký tự"
        },
        "address": {
          required: "Bắt buộc nhập address",
        },
        "phone": {
          required: "Bắt buộc nhập phone",
        },
        "email": {
          required: "Bắt buộc nhập email",
          email: "Hãy nhập dúng định dạng email"
        }
      }
    });
  });
</script>
<style>
  label.error {
    color: red;
  }
</style>
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
              <h1 class="h2">Get started</h1>
              <p class="lead">
                Start creating the best possible user experience for you
                customers.
              </p>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <form method="post" action="signUpp" enctype="multipart/form-data" id="demoForm">
                    <div class="form-group">
                      <label>UserName</label>
                      <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" />
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input class="form-control form-control-lg" type="text" name="address" placeholder="Enter your address" />
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input class="form-control form-control-lg" type="text" name="phone" placeholder="Enter your phone" />
                    </div>
                    <div class="form-group">
                      <label>Image</label>
                      <input class="form-control form-control-lg" type="file" name="img" placeholder="Enter your image" />
                    </div>
                    <div class="text-center mt-3">
                      <input type="submit" href="#" class="btn btn-lg btn-primary" name="signUp" value="Sign up">
                    </div>
                  </form>
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

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>