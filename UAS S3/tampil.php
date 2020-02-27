`<html>
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
	<a href="tampil.php">TAMPIL BARANG</a>
	</div>
	<?php
include "koneksi.php";
$tampil_barang=mysqli_query($input, "SELECT br.id_barang, br.nama_barang, kt.nama_kategori, st.nama *FROM barang as br INNER JOIN kategori as kt on br.id_barang=kt.id_kategori INNER JOIN satuan as st on br.id_barang=st.id_satuan");
?>


<form action="" method="post">
    <table border="1" cellpadding="6" cellspacing="6">
        <tr>
            <th>Id Barang</th>
            <th>Nama barang</th>
            <th>Nama Kategori</th>
            <th>Nama Satuan</th>
        </tr>
        <?php while($data=mysqli_fetch_array($tampil_barang)){ ?>
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

