<?php
$conn = mysqli_connect("localhost","root","","jurnal");

if(!$conn) {
  die("Gagal Terhubung" . mysqli_error($conn));
}