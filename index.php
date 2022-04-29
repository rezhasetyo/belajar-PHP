<?php
  $hal = $_GET['hal'];
  include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <?php
      include "header.php";
    ?>
</head>

<body>
    <?php
      if(isset($hal))
      {
        //jika $hal ada isinya
        include $hal.".php";
      }else{
        include "depan.php";
      }
    ?>
</body>

    <?php
      include "footer.php";
    ?>

</html>
