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
<?php
include "koneksi.php";
$tampil_data=mysqli_query($input, "select  br.kategori_id, br.nama_barang, st.nama, tr.qty, tr.harga, qty*harga as total from transaksi as tr inner join barang as br on tr.id_transaksi=br.id_barang inner join satuan as st on br.id_barang=st.id_satuan");
?>
									
<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <td>kategori</td>
            <td>Nama Barang</td>
			<td>Satuan</td>
            <td>Qty</td>
			<td>harga</td>
            <td>total</td>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_data)){ ?>
        <tr>
            <td><?php echo $data["kategori_id"];?></td>
            <td><?php echo $data["nama_barang"];?></td>
			<td><?php echo $data["nama"];?></td>
			<td><?php echo $data["qty"];?></td>
			<td><?php echo $data["harga"];?></td>
			<td><?php echo $data["total"];?></td>
        </tr>
        <?php } ?>

    </table>
</form>
	</div>
	<div class="footer" >
	<p class="copy">Copyright 2019.Dimas_G24.</p>
	</div>	
</body>
</html>

