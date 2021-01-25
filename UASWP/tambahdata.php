<html>
<head>
  <title>Tambah Data Mahasiswa</title>
 <link rel="stylesheet" type="text/css" href="crud.css">
</head>
 
<body class="background">
  <a href="datamahasiswa.php">Go to Home</a>
  <br/><br/>
  <center><h1>TAMBAH DATA MAHASISWA</h1></center>
  
 
  <form method="POST" action="prosestambah.php" enctype="multipart/form-data" >
      <section class="base">
      <div> 
        <label>NIM</label>
        <input type="text" name="NIM"/>
      </div>
      <div> 
        <label>NAMA</label>
        <input type="text" name="Nama">
      </div>
      <div> 
        <label>TAHUN AJARAN</label>
        <input type="text" name="Thn_Ajaran"/>
      </div>
        <label>SEMESTER</label>
        <input type="text" name="Semester"/>
      </div>
        <label>JENIS TAGIHAN</label>
        <input type="text" name="Jns_Tagihan"/>
      </div>
        <label>CICILAN KE</label>
        <input type="text" name="Cicilan_ke"/>
      </div>
        <label>NOMINAL</label>
        <input type="text" name="Nominal"/>
      </div>
        <label>STATUS BAYAR</label>
        <input type="text" name="Stat_Bayar"/>
      </div>
        <label>TANGGAL BAYAR</label>
        <input type="text" name="Tgl_Bayar"/>
      </div>
      <div>
        <button type="submit">Add</button>
      </div>
    </section>
  </form>
</body>
</html>