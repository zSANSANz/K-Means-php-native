<?php 
	session_start();

	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1) {
			header('location:dashboard.php');
		}
		else {			
			$stmt = "";
			if(isset($_GET['edit'])){
				if($_GET['edit'] == 'failed')
					$stmt = "<div class='alert alert-danger'>Maaf, edit gagal.</div>";
				else 
					$stmt = "<div class='alert alert-success'>Selamat, edit sukses.</div>";
			}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rekruitmen Calon Bidan Klinik Daqu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/datatables/media/css/dataTables.bootstrap.min.css">
	<script src=""></script>
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>  	
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
	      <a class="navbar-brand" href="#">Daqu Sehat</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Profile <span class="sr-only">(current)</span></a></li>
	      </ul>	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <strong><?php echo "".$_SESSION['nama']; ?></strong></a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <strong>Logout</strong></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<?php echo $stmt; ?>
		<div class="panel panel-default">
			<div class="panel-body"> 
				<div class="row">				  						  	
				  	<?php
				  		include "config/connect.php";

				  		$nilai = mysql_query("SELECT * FROM tbl_kedekatan_relatif WHERE NIK = '".$_SESSION['NIK']."'");
						$topsis = mysql_fetch_array($nilai);

						$rank = mysql_query("SELECT * FROM tbl_rangking WHERE NIK = '".$_SESSION['NIK']."'");
						$ing = mysql_fetch_array($rank);
						
						$qry = "SELECT * FROM peserta WHERE NIK = '".$_SESSION['NIK']."'";
				  		$select = mysql_query($qry);
				  		$view = mysql_fetch_array($select);

						$qry = "select * from info";
						$qry2 = mysql_query($qry);
						$data = mysql_fetch_array($qry2);
						$pengumuman = $data['pengumuman_hasil'];
						$tgl_tutup = strtotime($data['pengumuman_hasil']);
						$hari_ini = strtotime(date('Y-m-d'));
						$jml = (($hari_ini - $tgl_tutup)/86400); 
						if($jml<0) $css = "align='right' style='margin-right:60px'";
						else $css = "";
				  		echo "<img src='images/$view[foto]'  width='230' alt='...'' class='img-thumbnail' $css>
				  		<div class='col-md-7' style='margin-top:10px;'>";
							
							if($jml < 0){
								echo "<div class='form-group col-sm-12'>
									<label class='col-sm-4 control-label'>No Tes</label>
									<label class='col-sm-8 control-label'>: $view[no_tes]</label>							
								</div>";
							}
								echo "<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Nama Lengkap</label>
								<label class='col-sm-8 control-label'>: $view[nama_lengkap]</label>							
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>NIK</label>
								<label class='col-sm-8 control-label'>: $view[NIK]</label>
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Tempat Lahir</label>
								<label class='col-sm-8 control-label'>: $view[tmp_lahir]</label>
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Tanggal Lahir</label>
								<label class='col-sm-8 control-label'>: $view[tgl_lahir]</label>
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Pendidikan</label>
								<label class='col-sm-8 control-label'>: $view[pendidikan]</label>
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Alamat</label>
								<label class='col-sm-8 control-label'>: $view[alamat] </label>
							
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'>Berkas</label>
								<label class='col-sm-8 control-label'>: <td style='text-align: center;'><a href='pdf.php?file=$view[berkas]' target='blank' >$view[berkas]</a></td></label>
								
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'></label>
								<label class='col-sm-8 control-label'><td style='text-align: center;'><a role='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#$view[NIK]'><span class='glyphicon glyphicon-pencil'> Edit</span></a></label>
							</div>";
							?>
							<div id='<?php echo $view['NIK']; ?>' class='modal fade' role='dialog'>
										<div class='modal-dialog'>										
											<div class='modal-content'>		
												<form class='form-horizontal' method='POST' action='crud.php?action=edit_peserta_seleksi' enctype='multipart/form-data'>	
													<div style='padding-left:20px; padding-top:10px;'>
														<h4 class='modal-tittle'>Data Peserta Rekruitmen</h4>
													</div>
													<div style='padding-left:20px; margin-top:10px;'>
														<input type='hidden' name='id' id='id' value='<?php echo $view['no_tes']; ?>'></input>
														<input type='hidden' name='nik_lama' id='nik_lama' value='<?php echo $view['NIK']; ?>'></input>
														<div class='form-group col-sm-12'>
														    <label for='nikk' class='control-label'>NIK</label>						
														    <input disabled type='text' class='form-control' id='nikk' name='nikk' value='<?php echo $view['NIK']; ?>'>		
														</div>												
														<div class='form-group col-sm-12'>
														    <label for='namaa' class='control-label'>Nama Lengkap</label>						
														    <input disabled type='text' class='form-control' id='namaa' name='namaa' value='<?php echo $view['nama_lengkap']; ?>'>		
														</div>
														 <div class='form-group col-sm-12'>
														    <label for='t_lahir' class='control-label'>Tempat Lahir</label>
														    <input disabled type='text' class='form-control' id='t_lahir' name='t_lahir' value='<?php echo $view['tmp_lahir']; ?>'>
														 </div>
														 <div class='form-group col-sm-12'>
														    <label for='tg_lahir' class='control-label'>Tanggal Lahir</label>	
														    <input disabled type='text' class='form-control' id='tg_lahir' name='tg_lahir' value='<?php echo $view['tgl_lahir']; ?>'>
														 </div>
														 <!--
														 <div class='form-group col-sm-12'>
														    <label for='jkl' class='control-label'>Jenis Kelamin</label>
														    <select class='form-control' id='jkl' name='jkl'>
														    	<?php
																$qry = 'select * from jenis_kelamin';
																$qry2 = mysql_query($qry);
																while($data = mysql_fetch_array($qry2)){
																	$selected = '';
																	if($view['jk'] == $data['jenis']) $selected = 'selected';
																	?>
																	<option <?php echo $selected; ?> value='<?php echo $data['jenis']; ?>'><?php echo $data['jenis']; ?></option>
																	<?php
																}
																?>
														    </select>
														 </div>
														 -->
														 <div class='form-group col-sm-12'>
														    <label for='pdd' class='control-label'>Pendidikan</label>
														    <select disabled class='form-control' id='pdd' name='pdd'>
															<?php
																$qry = 'select * from pendidikan';
																$qry2 = mysql_query($qry);
																while($data = mysql_fetch_array($qry2)){
																	$selected = '';
																	if($view['pendidikan'] == $data['jenjang']) $selected = 'selected';
																	?>
																	<option <?php echo $selected; ?> value='<?php echo $data['jenjang']; ?>'><?php echo $data['jenjang']; ?></option>
																	<?php
																}
															?>
														   </select>
														 </div>
														 <div class='form-group col-sm-12'>
														    <label for='almt' class='control-label'>Alamat</label>
														    <input type='text' class='form-control' id='almt' name='almt' value='<?php echo $view['alamat']; ?>'>
														 </div>
														 <div class='form-group col-sm-12'>
														 	<label for='berkas1' class='control-label'>Berkas</label><br/>
														 	<a href='pdf.php?file=<?php echo $view['berkas']; ?>' width='150' class='img-thumbnail'><?php echo $view['berkas']; ?></a>
															<span class="input-group-addon">
																<a class='btn btn-primary' href='javascript:;'>
																  Browse
																  <input type="file" name="berkas" id='berkas' value='<?php echo $view['berkas']; ?>'>
																</a>
															</span>
														 </div>
													</div>
													<div class='modal-footer'>
														<div class='form-group col-sm-12'>
														     	<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
	        													<button type='submit' name='edits' class='btn btn-primary'>Edit</button>
														</div>
													</div>
												</form>
											</div>
										</div>
								</div>
							<?php
							
							if($jml >= 0){
								
								?>
							<div class='form-group col-sm-12'>
								<div><strong>Hasil:</strong></div>
							</div>	
							<div class='form-group col-sm-12'>
								<?php
									$qryR = "SELECT * FROM `tbl_rangking` where NIK = ".$view['NIK'];
									$qry2 = mysql_query($qryR);
									$data = mysql_fetch_array($qry2);
									if($data['status'] == 'diterima'){
								?>
										<div class='alert alert-success'>Selamat, Anda diterima</div>
								<?php
									}
									else{
								?>
										<div class='alert alert-danger'>Maaf, Anda tidak diterima</div>
								<?php
									}
								?>
							</div>
							<!--
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'><h3><strong>Nilai Topsis</strong></h3></label>
								<label class='col-sm-8 control-label'><h3><strong>:<?php echo $topsis['dekat_relatif']; ?></strong></h3></label>
							</div>
							<div class='form-group col-sm-12'>
								<label class='col-sm-4 control-label'><h3><strong>Ranking</strong></h3></label>
								<label class='col-sm-8 control-label'><h3><strong>: <?php echo $ing['ranking']; ?></strong></h3></label>
							</div>
							-->
						</div>
				  	<div class='col-md-2'>
				  		<h1><strong>No. Tes:</strong></h1>
						<h1><strong><?php echo $view['no_tes']; ?></strong></h1>
				  	</div>
						
				</div>		
				<?php
					//echo "<h2><strong>Nilai Topsis : $topsis[dekat_relatif]</strong></h2>";
				?>
				<div class="table-responsive">
					<h3 style="text-align: center;"> Nilai Hasil Rekruitment</h3>
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
						
							$table = mysql_query("SELECT * FROM data_peserta WHERE nama = '$_SESSION[nama]'");
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

				<button type="button" class="btn btn-lg btn-default" onclick="print_d()"><span class="glyphicon glyphicon-print"></span></button>		
				<?php
					}
					else{
					
						$date=date_create($pengumuman);
						$tgl = date_format($date,"d-M-Y");
						//echo "hehe";
						echo "<div class='form-group col-sm-12'><div class='alert alert-info'>Hasil seleksi akan diumumkan pada ".$tgl."</div></div>";
					}
				?>
			</div>
		</div>		
	</div>
	<script>  
	  function print_d(){  
	  	window.open("cetak.php","_blank");  
	  }  
 </script>
</body>
</html>

<?php 
		}
	}

	else {
		header('location:index.php');
	}
?>