<?php 
session_Start();
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
	<div id="kolom2">
		<div align="center">
			<h2> Edit Data </h2>
			<form action="prosesedit.php" method="GET"  >
				<table border="1">
					<tr>
						<td>Judul </td><td> : </td>
						<td> <input type="hidden" name="judul" value="<?php echo $_GET['judul']."\"" ?>" />
							<?php echo $_GET['judul']?> </td>
					</tr>
					<tr>
						<?php
                        $tampil = "select * from companyprofile where judul = '".$_GET['judul']."'";
                        $q_buat = mysqli_query($conn,$tampil);
                        $nm = "";
                        $bd = 0;

                        while ($row = mysqli_fetch_array($q_buat)) {
                        	$judul = $row['judul'];
                        	$nm = $row['nama'];
                        	$bd = $row['bidang'];
                        	$kp = $row['kata_pengantar'];
                        	$vdm = $row['visi_dan_misi'];
                        	$profile = $row['profile'];
                        	$layanan = $row['layanan'];
                        }

						?>
					<tr>
						<td>Nama</td><td>:</td><td><input type="text" name="nama" maxlength="150" size="70" value=<?php echo "\"$nm\""; ?> ></td>
					</tr>
					<tr>
						<td>Bidang</td><td>:</td><td><input type="text" name="bidang" maxlength="150" size="70" value=<?php echo "\"$bd\""; ?> ></td>
					</tr>
					<tr>
						<td>Kata Pengantar</td><td>:</td><td><input type="text" name="kp" maxlength="150" size="70" value=<?php echo "\"$kp\""; ?> ></td>
					</tr>
					<tr>
						<td>Visi Dan Misi</td><td>:</td><td><input type="text" name="vdm" maxlength="150" size="70" value=<?php echo "\"$vdm\""; ?> ></td>
					</tr>
					<tr>
						<td>Profile</td><td>:</td><td><input type="text" name="profile" maxlength="150" size="70" value=<?php echo "\"$profile\""; ?> ></td>
					</tr>
					<tr>
						<td>Layanan</td><td>:</td><td><input type="text" name="layanan" maxlength="150" size="70" value=<?php echo "\"$layanan\""; ?> ></td>
					</tr>
					<tr>
						<td align="center" colspan="3"> <a href="http://localhost/company/crud.php"> kembali</a> &nbsp;&nbsp;
							<input type="submit" value="EDIT"></td>
					</tr>
				</table>
			</form>

</body>
</html>