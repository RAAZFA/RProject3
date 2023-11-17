
<?php
require_once('koneksi.php');
if (isset($_POST['register'])) {
    $id_siswa = $_POST['id_siswa'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $password = md5($_POST['password']);
    $query = "INSERT INTO siswa_kls_11 
    VALUES (null,'$nis','$nama','$username','$kelas','$jurusan','$password')";
    mysqli_query($conn, $query);
    header("Location: login.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    if ($level == "siswa") {
        $query = "SELECT * FROM siswa_kls_11 where username='$username'";
        $hasil = mysqli_query($conn, $query);
        $siswa = mysqli_fetch_array($hasil);
        if ($siswa == NULL) {
            echo "
            <script>alert('username tidak ditemukan');
            window.location.replace('login.php'); 
            </script>";
        } else if ($password <> $siswa['password']) {
            echo "
            <script>alert('password salah');
            window.location.replace('login.php'); 
            </script>";
        } else {
            session_start();
            $_SESSION['nis'] = $siswa['nis'];
            $_SESSION['nama'] = $siswa['nama'];
            $_SESSION['username'] = $siswa['username'];
            $_SESSION['kelas'] = $siswa['kelas'];
            $_SESSION['jurusan'] = $siswa['jurusan'];
            $_SESSION['password'] = $siswa['password'];
            $_SESSION['level'] = "siswa";
            echo "
            <script>
            window.location.replace('index.php'); 
            </script>";
            //header("Location: index.php");
        }
    } else {
        $query = "SELECT * FROM guru where username='$username'";
        $hasil = mysqli_query($conn, $query);
        $guru = mysqli_fetch_array($hasil);
        if ($guru == NULL) {
            echo "
            <script>alert('username tidak ditemukan');
            window.location.replace('login.php'); 
            </script>";
        } else if ($password <> $guru['password']) {
            echo "
            <script>alert('password salah');
            window.location.replace('login.php'); 
            </script>";
        } else {
            session_start();
            $_SESSION['nama'] = $guru['nama'];
            $_SESSION['username'] = $guru['username'];
            $_SESSION['jurusan']  = $guru['jurusan'];
            $_SESSION['password'] = $guru['password'];
            $_SESSION['level'] = "guru";
            header("Location: index.php");
        }
    }
}
/*$query = "SELECT * FROM siswa_kls_11 where username='$username'";
    $hasil = mysqli_query($conn,$query);
    $siswa = mysqli_fetch_array($hasil);
    if ($password==$siswa['password']){
        session_start();
        $_SESSION['nis'] = $siswa['nis'];
        $_SESSION['nama'] = $siswa['nama'];
        $_SESSION['username'] = $siswa['username'];
        $_SESSION['kelas'] = $siswa['kelas']; 
        $_SESSION['password'] = $siswa['password'];
        header("Location: index.php");
    } 
    else {
        header("Location: login.php"); 
    }*/

if (isset($_POST['kehadiran'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $query = "INSERT INTO kehadiran(nis,nama,kelas,jurusan,waktu_hadir)
        VALUES ('$nis','$nama','$kelas','$jurusan', NOW())";
    mysqli_query($conn, $query);

    header("Location: LihatAbsen.php");
}
if (isset($_POST['kehadiran_guru'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $query = "INSERT INTO kehadiran_guru(nama,jurusan,waktu_hadir_guru)
        VALUES ('$nama','$jurusan', NOW())";
    mysqli_query($conn, $query);

    header("Location: LihatAbsen.php");
}
if (isset($_POST['update_profile'])) {
    $nik = $_POST['nis'];
    $nama =  $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $query = "UPDATE  siswa_kls_11 SET
    nama = '$nama',
    username = '$username',
    kelas = '$kelas',
    jurusan = '$jurusan' 
    where nis = '$nis'
    ";
    $hasil = mysqli_query($conn, $query);
    if ($password == $update['password']){
    session_start();
        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username; 
        $_SESSION['kelas'] = $kelas;
        $_SESSION['jurusan'] = $jurusan;
    }
    header("Location: Profile.php");
}
?>