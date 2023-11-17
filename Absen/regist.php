<!DOCTYPE html>
<?php require_once('koneksi.php')?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale SEO Agency CSS Template by TemplateMo website</title>

    <?php require_once('CSS_SCRIPT.php') ?>

</head>

<body>

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
                            <br>
                            <br>
                            <br>

                            <form class="pt-3" action="auth.php" method="POST">
                                <div class="login-box">
                                    <h3>Register Absensi Siswa Kelas 11</h3>
                                    <br>
                                    <div class="user-box">
                                        <input type="text" name="nis" placeholder="NIS">
                                        <label>NIS</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="nama" placeholder="Nama">
                                        <label>Nama</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="username" placeholder="Username">
                                        <label>Username</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="kelas" placeholder="Kelas">
                                        <label>Kelas</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="text" name="jurusan" placeholder="Jurusan">
                                        <label>Jurusan</label>
                                    </div>
                                    <div class="user-box">
                                        <input type="password" name="password" placeholder="Password">
                                        <label>Password</label>
                                    </div>
                                    <br>
                                    <center>
                                        
                                    <button type="submit" class="btn btn-primary  m-2" name="register">
                                            Submit
                                            <span></span>
                                            </button>
                                    </center>
                                    <div class="text-center mt-4 font-weight-light">
                                        Already have an account? <a href="login.php" class="text-primary">Login</a>
                                    </div>
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