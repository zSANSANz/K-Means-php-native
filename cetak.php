<!DOCTYPE html>
<html>
<head>
	<title>Cetak Hasil Rekruitmen Bidan Klinik Daqu</title>
	<style>
		* {
		    box-sizing: border-box;
		}

		.header {
			text-align: center;
		    padding: 15px;
		}

		.row:after {
		    content: "";
		    clear: both;
		    display: block;
		}

		[class*="col-"] {
		    float: left;
		    padding: 15px;
		}

		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}

		table {
		    border-collapse: collapse;
		    width: 100%;
		}

		th, td {
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
	<div class="header">
		<h2>Hasil Rekruitmen Klinik Daqu Sehat</h2>
		<h1>_____________________________________________________</h1>
	</div>
		<h3 style="text-align:center; margin-top: 0px;"><strong>Data Diri Peserta Rekruitment</strong></h3>
  	<div class="row">
  		<div class="col-3">		  	
	  	<?php
  		include "config/connect.php";
  		session_start();

  		$nilai = mysql_query("SELECT * FROM tbl_kedekatan_relatif WHERE NIK = '".$_SESSION['NIK']."'");
		$topsis = mysql_fetch_array($nilai);

		$rank = mysql_query("SELECT * FROM tbl_rangking WHERE NIK = '".$_SESSION['NIK']."'");
		$ing = mysql_fetch_array($rank);

  		$select = mysql_query("SELECT * FROM peserta WHERE NIK = '".$_SESSION['NIK']."'");
  		$view = mysql_fetch_array($select);

 	echo "<img src='images/$view[foto]'  width='150'>
 		<h3 style='margin-left: 48px;'>$view[no_tes]</h3></div>";
	echo "<div class='col-9'>
			<table>
 				<tr>
  					<td>Nama Lengkap</td><td>:</td><td>$view[nama_lengkap]</td>
  				</tr>
  				<tr>
  					<td>NIK</td><td>:</td> <td>$view[NIK]</td>
  				</tr>
  				<tr>
  					<td>Tempat Lahir</td><td>:</td><td>$view[tmp_lahir]</td>
  				</tr>
  				<tr>
  					<td>Tanggal Lahir</td><td>:</td> <td>$view[tgl_lahir]</td>
  				</tr>
  				<tr>
  					<td>Alamat</td><td>:</td><td>$view[alamat]</td>
  				</tr>
  				<tr>
  					<td>Pendidikan</td><td>:</td> <td>$view[pendidikan]</td>
  				</tr>
  				<tr>
  					<td><strong>Nilai Topsis</strong></td><td><strong>:</strong></td> <td><strong>$topsis[dekat_relatif]</strong></td>
  				</tr>
  				<tr>
  					<td><strong>Ranking</strong></td><td><strong>:</strong></td> <td><strong>$ing[ranking]</strong></td>
  				</tr>
  			</table>
		</div>
	</div>";

		$tabel = mysql_query("SELECT * FROM data_peserta WHERE nama= '$_SESSION[nama]'");
		$nilai = mysql_fetch_array($tabel);

	echo "<p><strong>Nilai Hasil Rekruitmen</strong></p>
		<table border='1'>
			<tr style='text-align: center;'>
				<th><strong>Pendidikan</strong></th>
			   	<th><strong>Tes Kemampuan</strong></th>
				<th><strong>Tes Tulis</strong></th>
				<th><strong>Tes Kepribadian</strong></th>
				<th><strong>Wawancara I</strong></th>
				<th><strong>Wawancara II</strong></th>
			</tr>
			<tr style='text-align: center;'>
			    <td>$nilai[pend]</td>
			    <td>$nilai[t_kemampuan]</td>
			    <td>$nilai[t_tulis]</td>
			    <td>$nilai[t_pribadi]</td>
			    <td>$nilai[wawancara1]</td>
			    <td>$nilai[wawancara2]</td>
			</tr>
		</table>";
	  	?>
	<script>
		// window.load = print_d();  
		// function print_d(){  
	 		window.print();
	 	//}  
 	</script>
</body>
</html>