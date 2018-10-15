<?php 
require_once("db.php");

if(isset($_POST["submit"])) {
  $nama = $_POST["nama"];
  $nim = $_POST["nim"];
  $jk = $_POST["jk"];
  $prodi = $_POST["prodi"];
  $fak = $_POST["fak"];
  $asal = $_POST["asal"];
  $motto = $_POST["motto"];

  $query = "INSERT INTO mahasiswa VALUES('$nama', '$nim', '$jk', '$prodi', '$fak', '$asal', '$motto')";

  if(mysqli_query($conn, $query)) {

    header("Location: list.php?register=true");
  }else {
    echo "Gagal Input Data" . mysqli_error($conn);
  }
}else {
  header("Location: notfound.php");
}