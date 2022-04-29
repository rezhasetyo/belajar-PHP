<?php
include "koneksi.php";

$query = "SELECT * from hutang ORDER BY id ASC";
$ambil_data = mysqli_query($konek,$query);
?>
<div class="jumbotron">

  <div class="col-9" align="right" >
    <a href="index.php">
    <button class="btn btn-danger"> Kembali </button>
    </a>
    <a href="?hal=form">
    <button class="btn btn-info"> Tambah </button>
    </a>
  </div>

  <br><h3>Daftar Hutang</h3>
    <div class="col-8">
      <table class="table table-light">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Hoetang</th>
            <th scope="col"> <div align="center">Aksi</div></th>
          </tr>
        </thead>
        <tbody>

          <!-- ini yang akan di ulang-->
          <?php
          $no = 0;
          while($getdata = mysqli_fetch_assoc($ambil_data))
          {
            $no++;
          ?>
          <tr>
            <th scope="row" ><?php echo $no;?></th>
              <td><?php echo $getdata['nama']?></td>
              <td><?php
                $tanggal_baru = date("d-m-Y", strtotime($getdata['tanggal_lahir']));
                echo $tanggal_baru;
              ?></td>
             <td><?php
                $jk = $getdata['jenis_kelamin'];
                  if($jk=='L')
                    echo "Laki-laki";
                  else
                    echo "Perempuan";
              ?></td>
              <td><?php echo $getdata['alamat']?></td>
              <td><?php echo $getdata['hutang']?></td>
              <td align="center"><a href="hapus.php?id=<?php echo $getdata['id']?>">
              <button class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin akan menghapus?'); if (ok) return true; else return false">Hapus
              </button> 
              </a>
              <a href="index.php?hal=form&id=<?php echo $getdata['id']?>">
              <button class="btn btn-info btn-sm">Edit
              </button> 
              </a>
              </td>
          </tr>
          <?php
          }
          ?>
          <!--akhir dari data yang diulang-->

        </tbody>
      </table>
    </div>
</div>