<?php 
session_Start();
include ("koneksi.php");
if($_SESSION)["username"] =="";

?>
<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<head>
	<title>Company Profile</title>
	<link href="css/crud.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form action="logout.php">
		<div align="center"><input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Logout"></div>
	</form>
	<div id="layout" align="center" class="box">
	<div id="kolom2">
		<div align="center">
			<h2>Company Profile</h2>
			<?php
            $tampil = "select * from companyprofile";
            $q_buat = mysqli_query($conn,$tampil);
			?>

			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Nama</th>
					<th>Bidang</th>
					<th>Kata Pengantar</th>
					<th>Visi Dan Misi</th>
					<th>Profile</th>
					<th>Layanan</th>
					<th colspan="3">Company Profile</th>
					<th  colspan="2">Aksi</th>
				</tr>

				<?php
				$x = 1;
				while ($row = mysqli_fetch_array($q_buat)) {
					echo("<tr><td align=\"center\">".$x++."</td>");
					echo("<td align=\"center\">".$row['judul']."</td>");
					echo("<td align=\"center\">".$row['nama']."</td>");
					echo("<td align=\"center\">".$row['bidang']."</td>");
					echo("<td align=\"center\">".$row['kata_pengantar']."</td>");
					echo("<td align=\"center\">".$row['visi_dan_misi']."</td>");
					echo("<td align=\"center\">".$row['profile']."</td>");
					echo("<td align=\"center\">".$row['layanan']."</td>");
					echo("<td align=\"center\"><a href=\"company.php?judul=".$row['judul']."\">1 </a> </td>");
					echo("<td align=\"center\"><a href=\"company.php?judul=".$row['judul']."\">2 </a> </td>");
					echo("<td align=\"center\"><a href=\"company.php?judul=".$row['judul']."\">3 </a> </td>");
					echo("<td align=\"right\"><a href=\"editcrud.php?judul=".$row['judul']."\">edit </a> </td>");
					echo("<td align=\"right\"><a href=\"deletecrud.php?judul=".$row['judul']."\">delete </a> </td></tr>");
				}
				  ?>
			</table>
			<br>
			<form action="inputcrud.php" method="post">
				<div align="center"><input type="submit" name="submit" class="daftar" value="tambah data"></div>
			</form>
		</div>
	</br>
	</div>
	<div id="footer" style="color: red"><b><marquee>Company Profile</marquee></b>
	</div>
</div>
</body>
</html>