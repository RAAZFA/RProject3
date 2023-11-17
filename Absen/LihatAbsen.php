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
                <?php if ($_SESSION['level'] == "siswa") { ?>
                  <div class="col-lg-12">
                    <div class="contact-us-content">
                      <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                          <div class="col-lg-12">
                            <div class="section-heading">
                              <h2><em>Absensi</em> <?= $_SESSION['level'] ?> <span></span></h2>
                            </div>
                            <div class="line-dec"></div>
                          </div>
                          <div class="row">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Num</th>
                                  <th scope="col">NIS</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Kelas</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Waktu Hadir</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1;
                                foreach ($siswa as $kehadiran) { ?>
                                  <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $kehadiran['nis'] ?></td>
                                    <td><?= $kehadiran['nama'] ?></td>
                                    <td><?= $kehadiran['kelas'] ?></td>
                                    <td><?= $kehadiran['jurusan'] ?></td>
                                    <td><?= $kehadiran['waktu_hadir'] ?></td>

                                  </tr>
                                <?php $no++;
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <?php if ($_SESSION['level'] == "guru") { ?>
                  <div class="col-lg-12">
                    <div class="contact-us-content">
                      <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                          <div class="col-lg-12">
                            <div class="section-heading">
                              <h2> Laporan <em>Absensi</em> <?= $_SESSION['level'] ?> <span></span></h2>
                            </div>
                            <div class="line-dec"></div>
                          </div>
                          <div class="row">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Num</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Waktu Hadir</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1;
                                foreach ($guru as $kehadiran_guru) { ?>
                                  <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $kehadiran_guru['nama'] ?></td>
                                    <td><?= $kehadiran_guru['jurusan'] ?></td>
                                    <td><?= $kehadiran_guru['waktu_hadir_guru'] ?></td>

                                  </tr>
                                <?php $no++;
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>

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