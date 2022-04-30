<?php
include "../Model/koneksi.php";
// require "/Model/koneksi.php";

// (isset($_POST['simpan'])){
// $nama               = $_POST['nama'];
// $tanggal_lahir      = $_POST['$tanggal_lahir'];
// $jenis_kelamin      = $_POST['jenis_kelamin'];
// $alamat             = $_POST['alamat'];
// $hutang             = $_POST['hutang'];
// $query=mysqli_query($konek, "INSERT INTO hutang($nama,$tanggal_lahir,$jenis_kelamin,$alamat,$hutang) VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$hutang')");


$id = isset($_POST['id'])   ?   $_POST['id'] : '';
$nama = isset($_POST['nama'])   ?   $_POST['nama'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir'])   ?   $_POST['tanggal_lahir'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin'])   ?   $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat'])   ?   $_POST['alamat'] : '';
$hutang = isset($_POST['hutang'])   ?   $_POST['hutang'] : '';

if($id!='') {
    $query = "UPDATE hutang SET nama='$nama', tanggal_lahir='$tanggal_lahir',
    jenis_kelamin='$jenis_kelamin', alamat='$alamat', hutang='$hutang'
    WHERE id='$id'";
    $ubah = mysqli_query($konek,$query);
} else {
    $query = "INSERT INTO hutang VALUES('','$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$hutang')";
    $input = mysqli_query($konek,$query);
}
?>

<script type="text/javascript">
    window.location.href = "http://localhost/PHP-daftarHutang/index.php?hal=data";
</script>