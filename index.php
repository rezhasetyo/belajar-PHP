<?php
  $hal = $_GET['hal'];
  include "koneksi.php";  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Belajar Bootstrap 4 : DTS 2020</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />      <!-- Menyisipkan Link Style CSS Bootstrap -->
  <?php include "header.php"; ?>                              <!-- MENYISIPKAN HEADER -->
</head>

<body>
  <?php
    if(isset($hal)) {
      //jika $hal ada isinya
      include $hal.".php";
    }else {
      include "depan.php";  } ?>
</body>

<!-- Menyisipkan Link Jquery Bootstrap -->
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <!-- MENYISIPKAN FOOTER -->
  <?php include "footer.php"; ?>     
</html>
