<!DOCTYPE html>
<html>
<head>
	<title>Laporan Rekruitmen Bidan Klinik Daqu</title>
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
		<h3 style="text-align:center; margin-top: 0px;"><strong>Laporan Hasil Rekruitmen Bidan Klinik daqu Sehat</strong></h3>

		<table border='1'>
			<tr style='text-align: center;'>
				<th><strong>Ranking</strong></th>
				<th><strong>Nama</strong></th>
				<th><strong>NIK</strong></th>
				<th><strong>No Tes</strong></th>
				<th><strong>Jenis Kelamin</strong></th>
				<th><strong>Alamat</strong></th>
				<th><strong>Pendidikan</strong></th>
				<th><strong>Status</strong></th>
			</tr>
  		  	
	  	<?php
  		include "config/connect.php";
  		session_start();

  		$table = mysql_query("SELECT peserta.NIK, peserta.nama_lengkap, peserta.no_tes, peserta.jk, peserta.alamat, peserta.pendidikan, tbl_rangking.nilai, tbl_rangking.ranking, tbl_rangking.status FROM peserta INNER JOIN tbl_rangking ON peserta.NIK=tbl_rangking.NIK ORDER BY tbl_rangking.nilai DESC ");

		while ($view = mysql_fetch_array($table)){
			if($view['status'] == "") $status = "Tidak Diterima";
			else $status = "Diterima";
			echo "<tr>
					<td align=center>$view[ranking]</td>
					<td>$view[nama_lengkap]</td>
					<td align=center>$view[NIK]</td>
					<td align=center>$view[no_tes]</td>
					<td align=center>$view[jk]</td>
					<td>$view[alamat]</td>								
					<td align=center>$view[pendidikan]</td>
					
					<td align=center>".ucwords($status)."</td>
				</tr>";
		}
	  	?>
	  </table>
	<script>
		// window.load = print_d();  
		// function print_d(){  
	 		window.print();
	 	//}  
 	</script>
</body>
</html>