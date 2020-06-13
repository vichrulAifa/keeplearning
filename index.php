<?php
//ob_start();
session_start();
if(!isset($_SESSION['nama'])){
	header("location: indexx.php");
}
?>
<html>
<head>
 <title>Daftar Barang Penjualan di TOKO ICUL</title>
 <style>
 .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}

.table1, th, td {
    padding: 8px 20px;
    text-align: left;
}

.table1 tr:hover {
    background-color: #f5f5f5;
}

.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}
	 #lg {
		 margin-left: 1074px;
		 background-color: #35A9DB;
		 color: white;
		 border: none;
  		 padding: 6px 20px;
  		 text-align: center;
  		 text-decoration: none;
  		 display: inline-block;
  		 font-size: 16px;
	 }
	 #tmb {
		 background-color: #35A9DB;
		 color: white;
		 border: none;
  		 padding: 6px 20px;
  		 text-align: center;
  		 text-decoration: none;
  		 display: inline-block;
  		 font-size: 16px;
	 }
 </style>
</head>
<body style="font-family:arial">
	
 <center><h2>Daftar Barang Penjualan <br /> TOKO ICUL</h2></center>
 <hr />
 <a href="tambah.php"><button id="tmb">Tambah Data Baru</button></a>
 <a href="logout.php"><button id="lg">logout</button></a>
	<br /><br />
 <b>Data Barang</b>
 <table style="width:100%" class="table1">
  <tr>
   <th>No</th>
   <th>Kode</th>
   <th>Nama</th>
   <th>Harga</th>
   <th>Stok</th>
   <th colspan=2><center>Opsi</center></th>
  </tr>
  
  <?php 
  include "koneksi.php";
  $no = 1;
  $data = mysqli_query($konek,"select * from barang");
  while($r = mysqli_fetch_array($data)){
   $id_barang = $r['id_barang'];
   $nama_barang = $r['nama_barang'];
   $harga_barang = $r['harga_barang'];
   $stok_barang = $r['stok_barang'];
        ?>
  <tr><td><?php echo $no++; ?></td>
   <td><?php echo $id_barang; ?></td>
   <td><?php echo $nama_barang; ?></td>
   <td><?php echo $harga_barang; ?></td>
   <td><?php echo $stok_barang; ?></td>
  <td align=right width=70px><a href="edit.php?id=<?php echo $id_barang;?>">Edit</a></td>
  <td align=right width=70px><a href="hapus.php?id=<?php echo $id_barang;?>">Hapus</a></td>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>