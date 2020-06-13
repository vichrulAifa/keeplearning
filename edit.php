<?php
// include database connection file
include "koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama_barang=$_POST['nama_barang'];
    $harga_barang=$_POST['harga_barang'];
    $stok_barang=$_POST['stok_barang'];

    // update user data
    $result = mysqli_query($konek, "UPDATE barang SET nama_barang='$nama_barang',harga_barang='$harga_barang',stok_barang='$stok_barang' WHERE id_barang=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($konek, "SELECT * FROM barang WHERE id_barang=$id");

while($r = mysqli_fetch_array($result))
{
    $nama_barang = $r['nama_barang'];
    $harga_barang = $r['harga_barang'];
    $stok_barang = $r['stok_barang'];
}
?>
<html>
<head>
 <title>Daftar Barang Penjualan | TOKO ICUL</title>
	<style>
		input[type=text] {
		  padding: 12px 20px;
		  margin: 4px 0;
		  box-sizing: border-box;
		  width: 100%;
		}
		input[type=submit] {
		 background-color: #35A9DB;
		 color: white;
		 border: none;
  		 padding: 6px 20px;
  		 text-align: center;
  		 text-decoration: none;
  		 display: inline-block;
  		 font-size: 16px;
	</style>
</head>
<body style="font-family:arial">
 <center><h2>Daftar Barang Penjualan <br /> TOKO ICUL</h2></center>
 <hr />
 <b>Edit Data Barang</b>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Barang</td>
				<td>:</td>
                <td><input type="text" size="50" name="nama_barang" value="<?php echo $nama_barang;?>"autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Harga Barang</td>
				<td>:</td>
                <td><input type="text" size="50" name="harga_barang" value="<?php echo $harga_barang;?>"autocomplete="off"></td>
            </tr>
            <tr> 
                <td>Stok Barang</td>
				<td>:</td>
                <td><input type="text" size="50" name="stok_barang" value="<?php echo $stok_barang;?>"autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
		</body>
</html>