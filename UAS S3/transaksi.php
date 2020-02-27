<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_transaksi="insert into transaksi(id_transaksi, nama_transaksi, tgl_transaksi, harga, qty, id_barang)values
	('".$_POST['id_transaksi']."',
	 '".$_POST['nama_transaksi']."',
	 '".$_POST['tgl_transaksi']."',
	 '".$_POST['harga']."',
	 '".$_POST['qty']."',
	 '".$_POST['id_barang']."')";
	 $proses_data=mysqli_query($input,$query_transaksi);
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
	<table>
		<tr>
			<td>Id transaksi</td>
			<td><input name="id_transaksi" type="number"></td>
		</tr>
	<tr>
			<td>Nama transaksi</td>
			<td><input name="nama_transaksi" type="text"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input name="tgl_transaksi" type="date"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="harga" type="text"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input name="qty" type="text"></td>
		</tr>
<tr>
			<td>Id Barang</td>
			<td><input name="id_barang" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from transaksi
									inner join barang on transaksi.id_barang=barang.id_barang
									inner join kategori on barang.kategori_id=kategori.id_kategori
									inner join satuan on barang.satuan_id=satuan.id_satuan");
?>


<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>Id transaksi</th>
            <th>Nama transaksi</th>
			<th>Tanggal transaksi</th>
            <th>Harga</th>
			<th>Qty</th>
            <th>Id Barang</th>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_transaksi"];?></td>
            <td><?php echo $data["nama_transaksi"];?></td>
			<td><?php echo $data["tgl_transaksi"];?></td>
			<td><?php echo $data["harga"];?></td>
			<td><?php echo $data["qty"];?></td>
			<td><?php echo $data["nama_barang"];?></td>
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

