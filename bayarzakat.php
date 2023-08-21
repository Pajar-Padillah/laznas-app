<?php
include 'header_user.php';

if (empty($_SESSION['iduser'])) {
  echo "<script>document.location.href = 'login.php';</script>";
} else {

  if (isset($_POST['bayar'])) {
    $notransaksi = $_POST['notransaksi'];
    $nama_user = $_POST['nama'];
    $jeniszakat = $_POST['jeniszakat'];
    $jumlahbayar = $_POST['jumlahbayar'];
    $metode_bayar = $_POST['metode_bayar'];
    $id_user = $_SESSION['iduser'];
    $status = 0;

    if (simpantransaksi($id_user, $notransaksi, $nama_user, $jeniszakat, $jumlahbayar, $metode_bayar, $status)) {
      echo "<script>alert('Proses Transaksi Sukses, Lihat invoice')</script>";
      echo "<script>document.location.href = 'invoice.php';</script>";
      // echo "<script>alert('Proses Transaksi sukses')</script>";
      // echo "<script>window.location.href='profil.php'</script>";
    } else {
      echo "Error: " . "<br>" . mysqli_error($konek);
    }
  }

?>
  <style>
    #cara {
      background-color: #eee;
    }

    #form {
      background-color: white;
    }
  </style>


  <div class="page-header">
    <h1>
      <center>Bayar Zakat</center>
    </h1>
  </div>

  <form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
      <label>No Transaksi</label>
      <?php
      global $konek;
      $sql = mysqli_query($konek, "SELECT * FROM transaksi ORDER BY id DESC");
      $row = mysqli_fetch_array($sql);
      $a = $row['id'] + 1;

      ?>
      <input type="text" class="form-control" name="notransaksi" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                        echo date('YmdHis') . $a; ?>" readonly="readonly">
    </div>

    <div class="form-group">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['namalengkap']; ?>" readonly>
    </div>

    <div class="form-group">
      <label>Jenis Zakat</label>
      <div>
        <select class="form-control" name="jeniszakat">
          <option value="0">-- Pilih jenis Zakat --</option>
          <option value="Zakat Fitrah">Zakat Fitrah</option>
          <option value="Zakat Infak">Infak</option>
          <option value="Zakat Sedekah">Sedekah</option>
          <option value="Zakat Emas Perak">Zakat Emas/Perak</option>
          <option value="Zakat Perdagangan">Zakat Perdagangan</option>
          <option value="Zakat Pertanian">Zakat pertanian</option>
          <option value="Zakat Ternak">Zakat Hewan ternak</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Jumlah Bayar</label>
      <input type="number" class="form-control" name="jumlahbayar" value="<?php if (empty($_SESSION['a'])) {
                                                                            echo '0';
                                                                          } else {
                                                                            echo $_SESSION['a'];
                                                                          } ?>">
    </div>
    <div class="form-group">
      <label for="sel1">Metode Pembayaran</label>
      <select name="metode_bayar" class="form-control" id="sel1">
        <option value="0">Pilih Bank</option>
        <option value="BANK SYARIAH MANDIRI (7091234569)">BANK SYARIAH MANDIRI</option>
        <option value="CIMB NIAGA SYARIAH (86111110940)">CIMB NIAGA SYARIAH</option>
        <option value="BNI SYARIAH (0259304174)">BNI SYARIAH</option>
      </select>
    </div>
    <button type="submit" name="bayar" class="btn btn-block btn-success mb-5">B a y a r</button>
  </form>

  <?php include 'sidebar.php'; ?>
  </div>
  </div>

<?php }
include 'footer_user.php'; ?>