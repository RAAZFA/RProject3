<!DOCTYPE html>
<?php require_once('koneksi.php') ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale SEO Agency CSS Template by TemplateMo website</title>

    <?php require_once('CSS_SCRIPT.php') ?>
</head>

<body>
    <?php require_once('HEADLOGIN.php') ?>
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-9">
                    <div class="left-info">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i>+62 896-7000-4724</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>raazfa@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>lonely wolf</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-3">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/azzam.rafi.169/"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Pre-Header Area End ***** -->
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <form class="contact-form" action="auth.php" method="POST">
                                <div class="login-box">

                                    <form>
                                        <div class="user-box">
                                            <input type="text" name="username" required="">
                                            <label>Username</label>
                                        </div>
                                        <div class="user-box">
                                            <input type="password" name="password" required="">
                                            <label>Password</label>
                                        </div>

                                        <center>
                                        <fieldset>
                                            <div class="orange-button">
                                                <select name="level" class="btn btn-primary rounded-pill m-2">
                                                    <option value="siswa">Siswa </option>
                                                    <option value="guru">Guru </option>
                                                </select>
                                            </div>
                                        </fieldset>
                                            <button type="submit" class="btn btn-primary rounded-pill m-2" name="login">
                                                LOGIN
                                                <span></span>
                                            </button>
                                        </center>
                                        <div class="text-center mt-4 font-weight-light">
                                            don't have an account? <a href="regist.php" class="text-primary">Register </a>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- endinject -->
</body>

</html>