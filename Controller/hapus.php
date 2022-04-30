<?php
include "../Model/koneksi.php";

$id = isset($_GET['id'])   ?   $_GET['id'] : '';

$query = "DELETE FROM hutang WHERE id='$id'";
$hapus = mysqli_query($konek,$query);
?>

<script type="text/javascript">
    window.location.href = "http://localhost/PHP-daftarHutang/index.php?hal=data";
</script>