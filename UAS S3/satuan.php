<?php
//fungsi untuk menggabungkan file
include("koneksi.php");
if(isset($_POST['simpan'])){
	$query_satuan="insert into satuan(id_satuan,nama)values
	('".$_POST['id_satuan']."',
	 '".$_POST['nama']."')";
	 $proses_data=mysqli_query($input,$query_satuan);
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
			<td>Id Satuan</td>
			<td><input name="id_satuan" type="number"></td>
		</tr>
	<tr>
			<td>Nama</td>
			<td><input name="nama" type="text"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>
	
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select *from satuan");
?>


<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>Id Satuan</th>
            <th>Nama</th>

        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["id_satuan"];?></td>
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

