<?php
require_once("db.php");

if(isset($_GET["cari"])) {
  $value = $_GET["cari"];
  $query = "SELECT * FROM mahasiswa WHERE nim like '%$value%'";
}else {
  $query = "SELECT * FROM mahasiswa";
}
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lihat Data</title>
</head>
<body>
  <table align="center" width="50%" cellpadding="5" border="1" style="border-collapse: collapse">
    <tr>
      <td colspan="2">
        <form action="list.php" method="get">
          <input type="text" name="cari" placeholder="Cari Mahasiswa">
          <input type="submit" value="Cari">
        </form>
      </td>
      <td>
        <a href="registrasi.php">Registrasi</a>
      </td>
    </tr>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Aksi</th>
    </tr> 
    <?php if(mysqli_num_rows($result) > 0) : ?>
    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <td><?php echo $row["nama"] ?></td>
      <td><?php echo $row["nim"] ?></td>
      <td><a href="delete.php?nim=<?php echo $row['nim'] ?>">Hapus</a></td>
    </tr>
    <?php } endif ?>
  </table>
</body>
</html>
