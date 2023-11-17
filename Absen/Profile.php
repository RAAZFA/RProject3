<!DOCTYPE html>
<?php $halaman = "index";
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} ?>
<html lang="en">
<?php require_once('koneksi.php'); ?>
<?php if ($_SESSION['level'] == "siswa") { ?>
    <?php
    $nis = $_SESSION['nis'];
    $query = "SELECT*FROM kehadiran where nis = '$nis'";
    $siswa = mysqli_query($conn, $query);
    ?>
<?php } ?>

<?php if ($_SESSION['level'] == "guru") { ?>
    <?php
    $nama = $_SESSION['nama'];
    $query = "SELECT*FROM kehadiran_guru where nama = '$nama'";
    $guru = mysqli_query($conn, $query);
    ?>
<?php } ?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Raazfa Project</title>

    <?php require_once('CSS_SCRIPT.php') ?>

    TemplateMo 582 Tale SEO Agency

    https://templatemo.com/tm-582-tale-seo-agency


</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- ***** Pre-Header Area Start ***** -->
    <?php require_once('heading.php') ?>
    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-us-content">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-8">
                                <div class="absent" id="tampil_absen">
                                    <h3>Detail Profil <?= $_SESSION['nama'] ?></h3>
                                    <br>
                                    <?php if ($_SESSION['level'] == "siswa") { ?>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">NIS</div>
                                            <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['nis'] ?></div>
                                        </div>
                                    <?php } ?>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Nama</div>
                                        <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['nama'] ?></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Username</div>
                                        <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['username'] ?></div>
                                    </div>
                                    <br>
                                    <?php if ($_SESSION['level'] == "siswa") { ?>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Kelas</div>
                                            <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['kelas'] ?></div>
                                        </div>
                                        <br>
                                    <?php } ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jurusan</div>
                                        <div class="col-lg-9 col-md-8 label">: <?= $_SESSION['jurusan'] ?></div>
                                    </div>
                                    <br>
                                    <br>
                                    <form id="contact-form" action="auth.php" method="POST">
                                    <h4>Update Profil <?= $_SESSION['nama'] ?></h4>
                                    <br>
                                        <?php if ($_SESSION['level'] == "siswa") { ?>
                                            <div class="form-group">
                                                <label>NIS</label>
                                                <input type="text" class="form-control form-control-lg" name="nik" value="<?= $_SESSION['nis'] ?>" readonly>
                                            </div>
                                            <br>
                                        <?php } ?>
                                        
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control form-control-lg" name="nama" value="<?= $_SESSION['nama'] ?>">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control form-control-lg" name="username" value="<?= $_SESSION['username'] ?>">
                                        </div>
                                        <br>
                                        <?php if ($_SESSION['level'] == "siswa") { ?>
                                            <div class="form-group">
                                                <label>Kelas</label>
                                                <input type="text" class="form-control form-control-lg" name="kelas" value="<?= $_SESSION['kelas'] ?>">
                                            </div>
                                            <br>
                                        <?php } ?>
                                       
                                        <div class="form-group">
                                            <label>Jurusan</label>
                                            <input type="text" class="form-control form-control-lg" name="jurusan" value="<?= $_SESSION['jurusan'] ?>">
                                        </div>
                                        <br>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="link" class="orange-button" name="update_profile">update</button>
                                            </fieldset>
                                        </div>
                                    </form>
                                        <div class="more-info">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="info-item">
                                                        <i class="fa fa-phone"></i>
                                                        <h4><a href="#">0896-7000-4724</a></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="info-item">
                                                        <i class="fa fa-envelope"></i>
                                                        <h4><a href="#">raazfa@gmail.com</a></h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="info-item">
                                                        <i class="fa fa-map-marker"></i>
                                                        <h4><a href="LOGOUT.php">don't do it bro</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="infos section" id="infos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-image">
                                        <img src="assets/images/left-infos.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section-heading">
                                        <h2>More <em>About me</em> &amp; What <span>I</span></h2>
                                        <div class="line-dec"></div>
                                        <p>a super lazy human</p>
                                    </div>
                                    <div class="skills">
                                        <div class="skill-slide media">

                                            <h6>Ditigal Media</h6>
                                            <span>30%</span>
                                        </div>
                                        <div class="skill-slide media">

                                            <h6>Social Media Managing</h6>
                                            <span>30%</span>
                                        </div>
                                    </div>
                                    <p class="more-info">Hello , yeah just this word
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </footer>


        <?php require_once('script.php') ?>


</body>

</html>