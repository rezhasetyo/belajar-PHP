<?php
  include "koneksi.php";

  $id = isset($_GET['id'])   ?   $_GET['id'] : '';

  $query = "SELECT * from hutang WHERE id='$id'";
  $ambil_data = mysqli_query($konek,$query);
  $getdata = mysqli_fetch_assoc($ambil_data);
?>

<div class="jumbotron">
  <br><h3>Form Daftar Hutang</h3>
  <div class="col-10">
    <form action ="simpan.php" method="POST" >
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" 
        placeholder="Input Nama Lengkap" value="<?php echo $getdata['nama'] ?>">
      </div>
      
      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" 
        placeholder="Inputkan Tanggal Lahir" value="<?php echo $getdata['tanggal_lahir'] ?>">
      </div>
     
      <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
          <option value="L"<?php if($getdata['jenis_kelamin']=='L')  echo"selected"; ?>>Laki-laki</option>
          <option value="P"<?php if($getdata['jenis_kelamin']=='P') echo"selected"; ?>>Perempuan</option>
        </select>
      </div>
     
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <!-- <textarea> JANGAN ADA SPASI -->
        <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Inputkan Alamat Lengkap" 
        value="<?php echo $getdata['alamat']?>"></textarea>     
      </div>

      <div class="form-group">
        <label for="hutang">Hutang Berapa?</label>
        <input type="number" id="hutang" class="form-control" name="hutang" 
        placeholder="Jumlah Hutang" value="<?php echo $getdata['hutang']?>">
      </div>

      <?php if($id!='') { ?>
        <input name="id" value="<?php echo $id?>" type="hidden">
      <?php } ?>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="index.php"><button type="button" class="btn btn-danger">Batal</button></a>
    </form>
    </div>
  </div>