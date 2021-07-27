<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Simple Login With PHP Native" />
  <meta name="author" content="Rud Az" />

  <title>Simple Login With PHP Native</title>

  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />

  <link rel="stylesheet" href="assets/css/pe-icon-7.css">

  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <section class="bg-gradient position-relative h-100vh">
    <div class="bg-overlay-home" style="background-image: url(assets/images/animation.png);"></div>
    <div class="home-table">
      <div class="home-table-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="account_box bg-gradient">
                <?php
                session_start();
                if (isset($_SESSION['flashdata'])) {
                  ?>
                  <div class="col-12">
                    <div class="alert alert-<?= $_SESSION['flashdata']['alerts'] ?> alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong><b>Message :</b>
                      </strong>
                      <?= $_SESSION['flashdata']['message'] ?>
                    </div>
                  </div>
                  <?php
                  unset($_SESSION['flashdata']);
                }
                ?>
                <form method="POST" action="s_login">
                  <div class="col-lg-12 mt-3">
                    <label class="text-white">Username</label>
                    <input type="text" name="username" class="form-control trial-input" placeholder="Username">
                  </div>
                  <div class="col-lg-12 mt-3">
                    <label class="text-white">Password</label>
                    <input type="password" name="password" class="form-control trial-input" placeholder="Password">
                  </div>
                  <div class="col-lg-12 mt-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label text-white" for="customCheck1">Remember me</label>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" name="signin" class="btn btn-custom w-100 mt-3">Sign In</button>
                  </div>
                  <div>
                    <p class="mb-0 text-center mt-3">
                      <a href="#" class="text-white font-weight-bold">Forgot your password ?</a>
                    </p>
                  </div>
                </form>
              </div>
              <div class="text-center mt-4">
                <p>
                  <small class="text-white mr-2">Don't have an account ?</small> <a href="#" class="text-white font-weight-bold">Create an account</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>