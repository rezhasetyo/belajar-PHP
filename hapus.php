<?php
include "koneksi.php";

$id = isset($_GET['id'])   ?   $_GET['id'] : '';

$query = "DELETE FROM daftar_hutang WHERE id='$id'";
$hapus = mysqli_query($konek,$query);
?>

<script type="text/javascript">
    window.location.href = "http://localhost/daftar_hutang/index.php?hal=data";
</script>