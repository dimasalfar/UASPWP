<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'UASspp.php';

	// membuat variabel untuk menampung data dari form
    $NIM         = $_POST['NIM'];
    $Nama        = $_POST['Nama'];
    $Thn_Ajaran  = $_POST['Thn_Ajaran'];
    $Semester    = $_POST['Semester'];
    $Jns_Tagihan = $_POST['Jns_Tagihan'];
    $Cicilan_ke  = $_POST['Cicilan_ke'];
    $Nominal     = $_POST['Nominal'];
    $Stat_Bayar  = $_POST['Stat_Bayar'];
    $Tgl_Bayar   = $_POST['Tgl_Bayar'];




                  $query = "INSERT INTO mahasiswa(NIM,Nama,Thn_Ajaran,Semester,Jns_Tagihan,Cicilan_ke,Nominal,Stat_Bayar,Tgl_Bayar) VALUES('$NIM', '$Nama', '$Thn_Ajaran', '$Semester', '$Jns_Tagihan', '$Cicilan_ke', '$Nominal', '$Stat_Bayar', '$Tgl_Bayar')";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='datamahasiswa.php';</script>";
                  }