<?php 
	session_start();

	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1) {		
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator Site Klinik Daqu</title>
	<link rel="stylesheet" type="text/css" href="css/yeti.css">
	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>  	
</head>
<body>
	
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="dashboard.php">Daqu Sehat</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="peserta.php">Peserta</a></li>
			<li><a href="info.php">Info</a></li>
	        <li class="active"><a href="nilai_peserta.php">Penilaian Peserta</a></li>
	        <li><a href="laporan.php">Laporan</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <strong><?php echo "".$_SESSION['nama']; ?></strong></a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <strong>Logout</strong></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">		
				<ul class="nav nav-tabs">
				    <li class="active"><a href="#list"  data-toggle="tab">Daftar Nilai Pesetra</a></li>
				    <li><a href="#proses1"  data-toggle="tab">Proses Nilai I</a></li>
				    <li><a href="#proses2"  data-toggle="tab">Proses Nilai II</a></li>
				    <li><a href="#rangking"  data-toggle="tab">Perangkingan</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="list">
						<div class="table-responsive" style="margin-top:20px;">
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
										<th style='text-align: center;'>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM data_peserta");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										<td style='text-align: center;'>
											<a role='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#$view[NIK]'><span class='glyphicon glyphicon-pencil'></span></a>
		  									
										</td>
										</tr>
										<div id='$view[NIK]' class='modal fade' role='dialog'>
											<div class='modal-dialog'>										
												<div class='modal-content'>		
													<form class='form-horizontal' id='form' method='POST' action='crud.php?action=in_nilai' enctype='multipart/form-data'>										
														<div class='modal-header'>
															<h2 class='modal-tittle'>Nilai Peserta Rekruitmen</h2>
														</div>
														<div class='modal-body'>
															<input type='hidden' name='id' id='id' value='$view[NIK]'></input>												
															<div class='form-group'>
																<label for='pendi' class='control-label'>Pendidikan</label>						
															    <input type='text' class='form-control' id='pendi' name='pendi' value='$view[pend]'>	
															    	<div id='msg_pendi'></div>
															</div>
															<div class='form-group'>
															    <label for='t_kem' class='control-label'>Tes Kemampuan</label>
															    <input type='text' class='form-control' id='t_kem' name='t_kem' value='$view[t_kemampuan]'>
															    <div id='msg_t_kem'></div>
															</div>
															<div class='form-group'>
															    <label for='t_tul' class='control-label'>Tes Tulis</label>	
															    <input type='text' class='form-control' id='t_tul' name='t_tul' value='$view[t_tulis]'>
															    <div id='msg_t_tul'></div>
															</div>
															<div class='form-group'>
															    <label for='t_priba' class='control-label'>Tes Kepribadian</label>
															    <input type='text' class='form-control' id='t_priba' name='t_priba' value='$view[t_pribadi]'>
															     <div id='msg_t_priba'></div>
															</div>
															<div class='form-group'>
															    <label for='wwc1' class='control-label'>Wawancara I</label>
															    <input type='text' class='form-control' id='wwc1' name='wwc1' value='$view[wawancara1]'>
															     <div id='msg_wwc1'></div>
															</div>
															<div class='form-group'>
															    <label for='wwc2' class='control-label'>Wawancara II</label>
															    <input type='text' class='form-control' id='wwc2' name='wwc2' value='$view[wawancara2]'>
															    <div id='msg_wwc2'></div>
															</div>
														</div>
														<div class='modal-footer'>
															<div class='form-group'>
															    <div class='col-sm-12'>
															     	<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
	        														<button type='submit' class='btn btn-primary'>Save</button>
															    </div>
															 </div>
														</div>
													</form>
												</div>
											</div>
										</div>";
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="proses1">
						<div class="table-responsive">
							<h3 style="text-align: center;"> Nilai Kuadrat</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_kuadrat");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>

							<h3 style="text-align: center;"> Kuadrat dan Akar Kuadrat</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Jenis Nilai</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_jumlah_kuadrat");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[jenis_nilai]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>

							<h3 style="text-align: center;">Normalisasi Matrik Keputusan</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_normalisasi_matriks");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="proses2">
						<div class="table-responsive">
							<h3 style="text-align: center;"> Weighted Normalized Decision Matrix</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_wndm");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>

							<h3 style="text-align: center;">Solusi Ideal Positif Negatif</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Pendidikan</th>
										<th style='text-align: center;'>Tes Kemampuan</th>
										<th style='text-align: center;'>Tes Tulis</th>
										<th style='text-align: center;'>Tes Kepribadian</th>
										<th style='text-align: center;'>Wawancara I</th>
										<th style='text-align: center;'>Wawancara II</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_positif_negatif");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[jenis_nilai]</td>
										<td style='text-align: center;'>$view[pend]</td>
										<td style='text-align: center;'>$view[t_kemampuan]</td>
										<td style='text-align: center;'>$view[t_tulis]</td>
										<td style='text-align: center;'>$view[t_pribadi]</td>
										<td style='text-align: center;'>$view[wawancara1]</td>
										<td style='text-align: center;'>$view[wawancara2]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>

							<h3 style="text-align: center;"> Separasi</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Ideal Positif</th>
										<th style='text-align: center;'>Ideal Negatif</th>
									</tr>
								</thead>
								<tbody>
								<?php  include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_separasi");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[ideal_positif]</td>
										<td style='text-align: center;'>$view[ideal_negatif]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane" id="rangking">
						<div class="table-responsive">
							<h3 style="text-align: center;"> Perangkingan</h3>
							<table class="table table-striped table-hover">
								<thead>
									<tr class="success">
										<th>Nama</th>
										<th style='text-align: center;'>Nilai</th>
										<th style='text-align: center;'>Rangking</th>
									</tr>
								</thead>
								<tbody>
								<?php	include "config/connect.php";
									$table = mysql_query("SELECT * FROM tbl_rangking ORDER BY ranking");

									while ($view = mysql_fetch_array($table)) {					
									
									echo "<tr>
										<td>$view[nama]</td>
										<td style='text-align: center;'>$view[nilai]</td>
										<td style='text-align: center;'>$view[ranking]</td>
										</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function () {
			$("#form").submit(function (event) {
				$("#msg_pendi").html("");
				$("#msg_t_kem").html("");
				$("#msg_t_tul").html("");
				$("#msg_t_priba").html("");
				$("#msg_wwc1").html("");
				$("#msg_wwc2").html("");
				if ($("#pendi").val() < 0  || $("#pendi").val() > 100) {
					$("#message_username").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}
				if ($("#t_kem").val() < 0  || $("#t_kem").val() > 100) {
					$("#msg_t_kem").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}
				if ($("#t_tul").val() < 0  || $("#pendi").val() > 100) {
					$("#msg_t_tul").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}
				if ($("#t_priba").val() < 0  || $("#t_priba").val() > 100) {
					$("#msg_t_priba").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}
				if ($("#wwc1").val() < 0  || $("#wwc1").val() > 100) {
					$("#msg_wwc1").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}
				if ($("#wwc2").val() < 0  || $("#wwc2").val() > 100) {
					$("#msg_wwc2").html("Data tidak valid nilai harus diantara 0 -100");
					event.preventDefault();
				}


			});

		});
</script>
</body>
</html>

<?php 
		}
		else {
			header('location:peserta_seleksi.php');
		}
	}

	else {
		header('location:index.php');
	}
 ?>


