<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_barang="insert into barang(id_barang,nama_barang,kategori_id,satuan_id)values
	('".$_POST['id_barang']."',
	 '".$_POST['nama_barang']."',
    '".$_POST['kategori_id']."',
'".$_POST['satuan_id']."')";
	 $proses_data=mysqli_query($input,$query_barang);
if($proses_data){
	echo 'Input Data Berhasil ';
} else {
	echo header ("location: index.php");
}
}


?>

<html>
<head>
	<title>SAHABAT BELAJAR</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<div class="header"></div>
	<div class="topnav">
	<a class="active" href="index.php">Home</a>
	<a href="barang.php">Barang</a>
	<a href="satuan.php">Satuan</a>
	<a href="kategori.php">Kategori</a>
	<a href="transaksi.php">Transaksi</a>
	<a href="laporan_transaksi.php">Laporan</a>
	</div>
	<form method="POST" action="">
	<table class="table1">
		<tr>
			<td>Id Barang</td>
			<td><input name="id_barang" type="number"></td>
		</tr>
	<tr>
			<td>Nama</td>
			<td><input name="nama_barang" type="text"></td>
		</tr>
		<tr>
			<td>Id Kategori</td>
			<td><input name="kategori_id" type="number"></td>
		</tr>
	<tr>
			<td>Satuan Id</td>
			<td><input name="satuan_id" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select * from barang
				inner join kategori on barang.kategori_id=kategori.id_kategori
				inner join satuan on barang.satuan_id=satuan.id_satuan");
?>


<form action="" method="post">
<link rel="stylesheet" href="style.css">
    <table class="table1">
		<h2>TAMPIL DATA BARANG</h2>
        <tr>
            <td>Id Barang</td>
            <td>Nama barang</td>
            <td>Nama Kategori</td>
            <td>Nama Satuan</td>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_barang"];?></td>
            <td><?php echo $data["nama_barang"];?></td>
            <td><?php echo $data["nama_kategori"];?></td>
            <td><?php echo $data["nama"];?></td>
        </tr>
        <?php  } ?>

    </table>
</form>
	</div>
	<div class="footer" >
	<p class="copy">Copyright 2019.Dimas_G24.</p>
	</div>	
</body>
</html>

