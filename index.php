<?php
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Senarai Pelajar</title>
</head>
<style type="text/css">
	h2{
		text-align: center;
		padding-top: 20px;
	}
	body{
		background-color: skyblue;
	}
</style>
<body>
	<h2>REKOD MAKLUMAT PELAJAR KVKS</h2>
	<center>
		<table border="1" cellpadding="5" cellspacing="0" bgcolor="white">
			<tr>
				<th>ID PELAJAR</th>
				<th>NAMA PELAJAR</th>
				<th>KELAS</th>
				<th>SUHU</th>
				<th>TARIKH</th>
				<th>CATATAN</th>
				<th>PADAM</th>
			</tr>
			<?php

		$papar =mysqli_query($connect, "SELECT * FROM pelajar");
		while ($row = mysqli_fetch_array($papar)) {
			// code...
			echo "
			<tr>
				<td>".$row['id_pelajar']."</td>
				<td>".$row['nama_pelajar']."</td>
				<td>".$row['kelas']."</td>
				<td>".$row['suhu']."</td>
				<td>".$row['tarikh']."</td>
				<td>".$row['catatan']."</td>
				<td>","<a href=\"padam.php>id_pelajar=".$row['id_pelajar']."\"Onclick=\"return comfirm('Rekod ini akan dihapuskan)\">Padam</td>
				<tr>
	";
}
?>
		</table>
		<p><a href="tambah.php"><button name="tambah" type="submit">&#43;
		TAMBAH PELAJAR</button></a></p>
	</center>

</body>
</html>