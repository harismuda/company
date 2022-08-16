<?php 
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Company Profile</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="layout" align="center" class="box">
	<div id="header"></div>
	</div>
	<div id="kolom2">
		<div align="center">
			<h2> Input Data </h2>

			<form action="prosesInput.php" method="get">
				<table border="1">
					<tr>
						<td>Judul</td><td>:</td><td><input type="textarea" name="judul" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Nama</td><td>:</td><td><input type="textarea" name="nama" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Bidang</td><td>:</td><td><input type="text" name="bidang" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Kata Pengantar</td><td>:</td><td><input type="text" name="kp" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Visi Dan Misi</td><td>:</td><td><input type="text" name="vdm" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Profile</td><td>:</td><td><input type="text" name="profile" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td>Layanan</td><td>:</td><td><input type="text" name="layanan" maxlength="150" size="70"></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><a href="http://localhost/company/crud.php">KEMBALI</a> &nbsp;&nbsp;
							<input type="reset" value="Reset"/> &nbsp;&nbsp;
							<input type="submit" value="tambahkan"/> </td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div>
		<div id="footer" style="color: red"><b> <marquee>INPUT</marquee></b>
		</div>
	</div>
</body>
</html></title>
</head>
<body>

</body>
</html>