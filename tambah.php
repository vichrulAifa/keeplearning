<html>
<head>
 <title>Daftar Barang Penjualan | TOKO ICUL</title>
	<style>
	input[type=text] {
		  padding: 12px 20px;
		  margin: 4px 0;
		  box-sizing: border-box;
		  width: 100%;}
		input[type=submit] {
		 background-color: #35A9DB;
		 color: white;
		 border: none;
  		 padding: 6px 20px;
  		 text-align: center;
  		 text-decoration: none;
  		 display: inline-block;
			font-size: 16px;}
		input[type=number] {
		  padding: 12px 20px;
		  margin: 4px 0;
		  box-sizing: border-box;
		  width: 100%;}
	</style>
</head>
<body style="font-family:arial">
 <center><h2>Daftar Barang Penjualan <br /> TOKO ICUL</h2></center>
 <hr />
 <b>Tambah Data Baru</b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
				<td>:</td>
                <td><input type="text" name="nama_barang" size="50" required autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Harga Barang</td>
				<td>:</td>
                <td><input type="number" name="harga_barang" size="50" required autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Stok Barang</td>
				<td>:</td>
                <td><input type="text" name="stok_barang" size="50" required autocomplete="off"></td>
            </tr>
            <tr> 
                <td></td>
				<td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $harga_barang = $_POST['harga_barang'];
        $stok_barang = $_POST['stok_barang'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_barang = "insert into barang values('','$nama_barang','$harga_barang','$stok_barang')";
     $kerjakan=mysqli_query($konek, $tambah_barang);
     if($kerjakan)
     {
     // Show message when user added
     //echo "Barang berhasil ditambahkan. <a href='index.php'>Lihat Data Barang</a>";
     header("location:index.php");
	 }
     else
      {
      echo "Gagal bro";
		 echo mysqli_error($konek);
     }
    }
    ?>
</body>
</html>