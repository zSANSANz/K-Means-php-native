<?php 
	session_start();
	include "config/connect.php";
	
	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1) {		
		
		$stmt1 = "";
		if(isset($_POST['add'])){
			// SELECT `id`, `judul`, `buka_pendaftaran`, `terakhir_pendaftaran`, `pengumuman_hasil`, `isi`, `status` FROM `event` 
			$qrySelect = "SELECT * FROM `info` WHERE  `judul` = '".$_POST['judul']."' and `buka_pendaftaran` = '".$_POST['buka_pendaftaran']."' and `terakhir_pendaftaran` = '".$_POST['terakhir_pendaftaran']."' and `pengumuman_hasil` = '".$_POST['pengumuman_hasil']."' and isi = '".$_POST['isi']."'";
			$qrySelect2 = mysql_query($qrySelect);
			$count = mysql_num_rows($qrySelect2);
			if($count == 0){
				//INSERT INTO `questionnaire`(`id`, `id_pelanggan`, `id_sifat_questionnaire`, `id_object_questionnaire`, `bobot`, `isi`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
				$qry = "INSERT INTO `info` (`judul`, `buka_pendaftaran`, `terakhir_pendaftaran`, `pengumuman_hasil`, `isi`) VALUES ('".$_POST['judul']."','".$_POST['buka_pendaftaran']."','".$_POST['terakhir_pendaftaran']."','".$_POST['pengumuman_hasil']."','".$_POST['isi']."')";
				$qry2 = mysql_query($qry);
				if($qry2) $stmt1 = "<div class='alert alert-success'>Tambah Data Berhasil</div>";
					else $stmt1 = "<div class='alert alert-danger'>Tambah Data Gagal</div>";
			}
			else{
				$stmt1 = "<div class='alert alert-danger'>Data Sudah Ada</div>";
			}
		}
		
		if(isset($_POST['edits']) && isset($_POST['id'])){

			$qrySelect = "SELECT * FROM `info` WHERE  `judul` = '".$_POST['judul']."' and `buka_pendaftaran` = '".$_POST['buka_pendaftaran']."' and `terakhir_pendaftaran` = '".$_POST['terakhir_pendaftaran']."' and `pengumuman_hasil` = '".$_POST['pengumuman_hasil']."' and isi = '".$_POST['isi']."'";
			$qrySelect2 = mysql_query($qrySelect);
			$count = mysql_num_rows($qrySelect2);
			if($count == 0){
				//UPDATE `event` SET `id`=[value-1],`judul`=[value-2],`buka_pendaftaran`=[value-3],`terakhir_pendaftaran`=[value-4],`pengumuman_hasil`=[value-5],`isi`=[value-6],`status`=[value-7] WHERE 1
				$qry = "UPDATE info SET `judul` = '".$_POST['judul']."', `buka_pendaftaran` = '".$_POST['buka_pendaftaran']."', `terakhir_pendaftaran` = '".$_POST['terakhir_pendaftaran']."', `pengumuman_hasil` = '".$_POST['pengumuman_hasil']."', `isi` = '".$_POST['isi']."' WHERE id = ".$_POST['id'];
				$qry2 = mysql_query($qry);
				if($qry2) $stmt1 = "<div class='alert alert-success'>Edit Data Berhasil</div>";
					else $stmt1 = "<div class='alert alert-danger'>Edit Data Gagal</div>";
			}
			else{
				$stmt1 = "<div class='alert alert-danger'>Data Sudah Ada</div>";
			}
		}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator Site Klinik Daqu</title>
	<link rel="stylesheet" type="text/css" href="plugins/fileinput/css/fileinput.min.css">
	<link rel="stylesheet" type="text/css" href="css/yeti.css">	
	<script type="text/javascript" src="plugins/fileinput/js/fileinput.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		.input-file { position: relative; margin: 0px 0px 0 } /* Remove margin, it is just for stackoverflow viewing */
		.input-file .input-group-addon { border: 0px; padding: 0px; }
		.input-file .input-group-addon .btn { border-radius: 0 4px 4px 0 }
		.input-file .input-group-addon input { cursor: pointer; position:absolute; width: 72px; z-index:2;top:0;right:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0; background-color:transparent; color:transparent; }
  	</style>  	
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
	        <li><a href="peserta.php">Peserta <span class="sr-only">(current)</span></a></li>
			<li class="active"><a href="info.php">Info</a></li>
	        <li><a href="nilai_peserta.php">Penilaian Peserta</a></li>
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
		<?php echo $stmt1; ?>
		<div class="panel panel-default">
			<div class="panel-body">
				<h2 style="text-align:center;">Info Lowongan</h2>
				
				<?php
				
				$qrySelect = "select * from info";
				$qrySelect2 = mysql_query($qrySelect);
				$count = mysql_num_rows($qrySelect2);
				if($count == 0){
					?>
					
					
					<!-- /.panel-heading -->
					<div class="panel-body">
						<form action="?content=Input_Event" method="post">
							<fieldset>
							<br>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Judul</div>
									<div class="input-group  col-md-6">
										<input class="form-control " name="judul" size="10" type="text"> 
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Buka Pendaftaran</div>
									<div class="input-group date form_date col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control" name="buka_pendaftaran" placeholder='yyyy-mm-dd' size="10" type="text"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Akhir Pendaftaran</div>
									<div class="input-group date form_date col-md-6" data-date=""  data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control" name="terakhir_pendaftaran" placeholder='yyyy-mm-dd' size="10" type="text"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Pengumuman Hasil</div>
									<div class="input-group date form_date col-md-6" data-date=""  data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input class="form-control" name="pengumuman_hasil" placeholder='yyyy-mm-dd' size="10" type="text"> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="control-label" for="dtp_input2">Isi</div>
									<textarea class='form-control' name='isi' cols='4' rows='6'></textarea>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<input type="submit" name="add" value="Submit" class="btn btn-primary" style="float:right"> &nbsp&nbsp&nbsp&nbsp
							</div>
							</fieldset>
						</form>
					</div>
					<?php
				}
				else{
					$form_date = "";
					$icon_date = "";
					$disabled = "disabled";
					if(isset($_POST['edit'])){
						$disabled = "";
						$form_date = "date form_date";
						$icon_date = "<span class='input-group-addon' ><span disabled class='glyphicon glyphicon-calendar'></span></span>";
					}
					$qrySelect2 = mysql_query($qrySelect);
					$data = mysql_fetch_array($qrySelect2);
					
					?>
					
					<!-- /.panel-heading -->
					<div class="panel-body">
						<form action="?content=Input_Event" method="post">
							<input type='hidden' name='id' value='<?php echo $data['id']; ?>'>
							<fieldset>
							<br>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Judul</div>
									<div class="input-group  col-md-6">
										<input <?php echo $disabled; ?> class="form-control " name="judul" size="10" type="text" value='<?php echo $data['judul']; ?>'> 
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Buka Pendaftaran</div>
									<div class="input-group <?php echo $form_date; ?> col-md-6" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input <?php echo $disabled; ?> class="form-control" name="buka_pendaftaran" placeholder='yyyy-mm-dd' size="10" type="text" value='<?php echo $data['buka_pendaftaran']; ?>'> 
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Akhir Pendaftaran</div>
									<div class="input-group <?php echo $form_date; ?> col-md-6" data-date=""  data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input <?php echo $disabled; ?> class="form-control" name="terakhir_pendaftaran" placeholder='yyyy-mm-dd' size="10" type="text" value='<?php echo $data['terakhir_pendaftaran']; ?>'> 
									
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								<div class="form-group">
									<div class="col-md-6 control-label" for="dtp_input2">Pengumuman Hasil</div>
									<div class="input-group <?php echo $form_date; ?>  col-md-6" data-date=""  data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input <?php echo $disabled; ?> class="form-control" name="pengumuman_hasil" placeholder='yyyy-mm-dd' size="10" type="text" value='<?php echo $data['pengumuman_hasil']; ?>'> 
										
									</div><input id="dtp_input2" type="hidden" value="">
								</div>
								
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<div class="control-label" for="dtp_input2">Isi</div>
									<textarea <?php echo $disabled; ?> class='form-control' name='isi' cols='4' rows='6'><?php echo $data['isi']; ?></textarea>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<?php
									if(isset($_POST['edit'])){
								?>
									<input type="submit" name="edits" value="Edit" class="btn btn-primary" style="float:right"> &nbsp&nbsp&nbsp&nbsp
								
								<?php
									}
									else{
								?>
									<input type="submit" name="edit" value="Edit" class="btn btn-primary" style="float:right"> &nbsp&nbsp&nbsp&nbsp
								<?php
									}
								?>
							</div>
							</fieldset>
						</form>
					</div>
					<?php
				}
			
				?>
			</div>
		</div>		
	</div>
	<script>  
	  function print_d(){  
	  	window.open("cetak_laporan.php","_blank");  
	  }  
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