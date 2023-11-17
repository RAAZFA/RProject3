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

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>RAAZFA Project</h6>
            <div class="line-dec"></div>
            <h4>Here <em>I want to introduce </em><span>I'm Rafi Azzam Fauzan</span></h4>
            <p>Jadi saya membuat website ini untuk latihan dan tugas akhir , untuk template nya kalian bisa lihat dibawah ini , <a href="index.php">Home</a>, <a href="#infos">About</a>, and <a href="https://themewagon.com/themes/free-bootstrap-5-seo-agency-website-template-tale/">Template download</a>.</p>
            <div class="main-button scroll-to-section"><a href="#contact">Discover More</a></div>
            <span>or</span>
            <div class="second-button"><a href="#">Check our FAQs</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-8">
                <form id="contact-form" action="auth.php" method="post">

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading" id="Absen">
                        <h2><em>Absensi</em> <?= $_SESSION['level'] ?> <span></span></h2>
                      </div>
                      <div class="line-dec"></div>
                    </div>
                    <?php if ($_SESSION['level'] == "siswa") { ?>
                      <div class="content-wrapper">
                        <div class="container-fluid flex-grow-1 container-p-y">
                          <div id="lokasi_null">
                            <div class="alert alert-primary alert-dismissible">
                              <i class="bx bx-location-plus"></i> Fitur GPS pada perangkat belum aktif. Aktifkan GPS dan refresh ulang halaman.
                            </div>
                          </div>
                          <div id="lokasi_salah">
                            <div class="alert alert-primary alert-dismissible">
                              <i class="bx bx-location-plus"></i> Kamu belum berada dalam jangkauan lokasi sekolah.
                            </div>
                          </div>
                          <div id="lokasi_benar">
                            <div class="alert alert-primary alert-dismissible">
                              Kamu sudah melakukan absen masuk.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="name" name="nis" value="<?= $_SESSION['nis'] ?>" readonly>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="nama" value="<?= $_SESSION['nama'] ?>" readonly>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="kelas" value="<?= $_SESSION['kelas'] ?>" readonly>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="jurusan" value="<?= $_SESSION['jurusan'] ?>" readonly>
                        </fieldset>
                      </div>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == "guru") { ?>
                      <div class="content-wrapper">
                        <div class="container-fluid flex-grow-1 container-p-y">
                          <div id="lokasi_null">
                            <div class="alert alert-primary alert-dismissible">
                              <i class="bx bx-location-plus"></i> Fitur GPS pada perangkat belum aktif. Aktifkan GPS dan refresh ulang halaman.
                            </div>
                          </div>
                          <div id="lokasi_salah">
                            <div class="alert alert-primary alert-dismissible">
                              <i class="bx bx-location-plus"></i> Kamu belum berada dalam jangkauan lokasi sekolah.
                            </div>
                          </div>
                          <div id="lokasi_benar">
                            <div class="alert alert-primary alert-dismissible">
                              Kamu sudah melakukan absen masuk.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="nama" value="<?= $_SESSION['nama'] ?>" readonly>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                          <input type="text" name="jurusan" value="<?= $_SESSION['jurusan'] ?>" readonly>
                        </fieldset>
                      </div>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == "siswa") { ?>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" name="kehadiran" class="orange-button">Hadir </button>
                        </fieldset>
                      </div>
                    <?php } ?>
                    <br>
                    <?php if ($_SESSION['level'] == "guru") { ?>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" name="kehadiran_guru" class="orange-button">Hadir </button>
                        </fieldset>
                      </div>
                      <br>
                    <?php } ?>
                    <br>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="link" class="orange-button"><a href="LihatAbsen.php"> Lihat Absen </a></button>
                      </fieldset>
                    </div>
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
  <script>
    const lokasi_benar = document.getElementById('lokasi_benar');
    const lokasi_salah = document.getElementById('lokasi_salah');
    const lokasi_null = document.getElementById('lokasi_null');
    lokasi_benar.style.display = "none";
    lokasi_salah.style.display = "none";
    lokasi_null.style.display = "none";
    const utara = -7.589;
    const selatan = -7.591;
    const barat = 110.9495;
    const timur = 110.9516;
    const successCallback = (position) => {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
      // const latitude = -7.59017784732292;
      // const longitude = 110.95072346694563;
      console.log(latitude);
      console.log(longitude);
      if ((latitude <= utara) && (latitude >= selatan) && (longitude >= barat) && (latitude <= timur)) {
        console.log('Lokasi benar');
        lokasi_benar.style.display = "block";
        lokasi_salah.style.display = "none";
        lokasi_null.style.display = "none";
      } else {
        console.log('Lokasi Salah');
        lokasi_benar.style.display = "none";
        lokasi_salah.style.display = "block";
        lokasi_null.style.display = "none";
      }
    };
    const errorCallback = (error) => {
      console.log('Lokasi tidak aktif');
      lokasi_benar.style.display = "none";
      lokasi_salah.style.display = "none";
      lokasi_null.style.display = "block";
    };
    navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
  </script>
  <?php require_once('script.php') ?>


</body>

</html>