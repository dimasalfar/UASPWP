<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <link rel="stylesheet" type="text/css" href="crud.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome to Universitas Pembangunan Nasional Veteran Jakarta">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/5201.jpg"
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body"><header class="u-clearfix u-header u-header" id="sec-a6b5"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="index.html" class="u-image u-logo u-image-1" data-image-width="590" data-image-height="819">
          <img src="images/5201.jpg" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 2rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="#">
              <svg><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="datamahasiswa.php" style="padding: 10px 0px;">Data Mahasiswa</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="logout.php" style="padding: 10px 0px;">Logout</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="datamahasiswa.php" style="padding: 10px 20px;">Data Mahasiswa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html" style="padding: 10px 20px;">Login</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>

<?php 
include 'UASspp.php';
 ?>

<div class="container">
	<div class="page-header">
<center><h2 style="color:#f57e07; font-family: Trebuchet MS;">DATA MAHASISWA FIK UPN VETERAN JAKARTA</h2></center>
	</div>
<center><a style="background-color:#f57e07; padding:12px; color: white;" href="tambahdata.php">+ &nbsp; TAMBAH DATA</a><center>
 <br/> <br>
<table border=1>
  <thead>
  <tr>
    <th>No</th>
    <th>NIM</th>
    <th>NAMA</th>
    <th>TAHUN AJARAN</th>
    <th>SEMESTER</th>
    <th>JENIS TAGIHAN</th>
    <th>CICILAN KE</th>
    <th>NOMINAL</th>
    <th>STATUS BAYAR</th>
    <th>TANGGAL BAYAR</th>
    <th>ACTION</th>
  </tr>
</thead>
<tbody>
 	<?php 
 	$data = $conn ->query("SELECT * FROM Mahasiswa ORDER BY NIM ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) : 
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['NIM'] ?></td>
 	 	<td><?= $dta['Nama'] ?></td>
 	 	<td><?= $dta['Thn_Ajaran'] ?></td>
 	 	<td><?= $dta['Semester'] ?></td>
    <td><?= $dta['Jns_Tagihan'] ?></td>
    <td><?= $dta['Cicilan_ke'] ?></td>
    <td><?= $dta['Nominal'] ?></td>
    <td><?= $dta['Stat_Bayar'] ?></td>
    <td><?= $dta['Tgl_Bayar'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="editdata.php?id=<?= $dta['NIM'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusdata.php?id=<?= $dta['NIM'] ?>" onclick ="return confirm('Apakah anda yakin ingin menghapus data? data UKT Mahasiswa yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </tbody>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Mahasiswa Maka Akan menghapus Data Pembayaran dan data tagihan Mahasiswa pada tabel UKT</p>
 </div>



