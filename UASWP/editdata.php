 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'UASspp.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $NIM = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM mahasiswa WHERE NIM='$NIM'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_error($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='datamahasiswa.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='datamahasiswa';</script>";
  }         
  ?>

<html>
<head>	
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="crud.css">
</head>
 
<body class="background">
	<a href="datamahasiswa.php">Go to Home</a>
	<br/><br/>
	<center><h1>EDIT DATA MAHASISWA</h1></center>

	 <form method="POST" action="prosesedit.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NIM</label>
          <input type="text" name="NIM" value="<?php echo $data['NIM']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>NAMA</label>
         <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" />
        </div>
        <div>
          <label>TAHUN AJARAN</label>
         <input type="text" name="Thn_Ajaran" required=""value="<?php echo $data['Thn_Ajaran']; ?>" />
        </div>
        <div>
          <label>SEMESTER</label>
         <input type="text" name="Semester" required="" value="<?php echo $data['Semester']; ?>"/>
        </div>
        <div>
          <label>JENIS TAGIHAN</label>
         <input type="text" name="Jns_Tagihan" required=""value="<?php echo $data['Jns_Tagihan']; ?>" />
        </div>
        <div>
          <label>CICILAN KE</label>
         <input type="text" name="Cicilan_ke" required=""value="<?php echo $data['Cicilan_ke']; ?>" />
        </div>
        <div>
          <label>NOMINAL</label>
         <input type="text" name="Nominal" required=""value="<?php echo $data['Nominal']; ?>" />
        </div>
        <div>
          <label>STATUS BAYAR</label>
         <input type="text" name="Stat_Bayar" required=""value="<?php echo $data['Stat_Bayar']; ?>" />
        </div>
        <label>TANGGAL BAYAR</label>
         <input type="text" name="Tgl_Bayar" required=""value="<?php echo $data['Tgl_Bayar']; ?>" />
        </div>
        <div>
         <button type="submit">Update</button>
        </div>
        </section>
      </form>
  </body>
</html>