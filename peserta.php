<?php 
	session_start();

	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) {
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
	<title>Administrator Site Klinik Daqu</title>
	<link rel="stylesheet" type="text/css" href="plugins/fileinput/css/fileinput.min.css">
	<link rel="stylesheet" type="text/css" href="css/yeti.css">	
	<script type="text/javascript" src="plugins/fileinput/js/fileinput.min.js"></script>
	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>  
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
				<li class="active"><a href="peserta.php">Peserta <span class="sr-only">(current)</span></a></li>
				<li><a href="info.php">Info</a></li>
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
			<?php echo $stmt; ?>
		<div class="panel panel-default">
			<div class="panel-body">		
				<ul class="nav nav-tabs">
				    <li class="active"><a href="#list" data-toggle="tab">Daftar Peserta</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="list">
						<table id="data" class="display table table-striped table-hover" style="margin-top:20px;">
							<thead>
								<tr class="success">
									<th >No Tes</th>
									<th ><center>NIK</center></th>
									<th >Nama</th>
									<th >Tempat Lahir</th>
									<th >Tanggal Lahir</th>
									<th ><center>Jenis Kelamin</center></th>
									<th ><center>Alamat</center></th>
									<th ><center>Pendidikan</center></th>
									<th ><center>Berkas</center></th>
								<?php
									if($_SESSION['level'] == 1){
								?>
									<th ><center>Aksi</center></th>
								<?php
									}
								?>
								</tr>
							</thead>
							<tbody>
							<?php  include "config/connect.php";
								$table = mysql_query("SELECT * FROM peserta");

								while ($view = mysql_fetch_array($table)) {					
								
								echo "<tr>
									<td>$view[no_tes]</td>
									<td>$view[NIK]</td>
									<td>$view[nama_lengkap]</td>
									<td>$view[tmp_lahir]</td>
									<td>$view[tgl_lahir]</td>
									<td align='center'>$view[jk]</td>
									<td>$view[alamat]</td>
									<td align='center'>$view[pendidikan]</td>";
									if($view['berkas'] == "") echo "<td align='center'>-</td>";
									else echo "<td align='center'><a href='pdf.php?file=$view[berkas]' width='150' target='blank'>view</a></td>";
							
								if($_SESSION['level'] == 1){
							?>
									<td>
										<a role='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#<?php echo $view['NIK']; ?>'><span class='glyphicon glyphicon-pencil'></span></a>
	  									<a role='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#hapus<?php echo $view['NIK']; ?>'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
							<?php
								}
								echo "</tr>
								
								<div id='$view[NIK]' class='modal fade' role='dialog'>
										<div class='modal-dialog'>										
											<div class='modal-content'>		
												<form class='form-horizontal' method='POST' action='crud.php?action=edit' enctype='multipart/form-data'>										
													<div class='modal-header'>
														<h2 class='modal-tittle'>Data Peserta Rekruitmen</h2>
													</div>
													<div class='modal-body'>
														<input type='hidden' name='id' id='id' value='$view[no_tes]'></input>
														<input type='hidden' name='nik_lama' id='nik_lama' value='$view[NIK]'></input>
														<div class='form-group'>
														    <label for='nikk' class='control-label'>NIK</label>						
														    <input type='text' class='form-control' id='nikk' name='nikk' value='$view[NIK]' disabled>		
														 </div>												
														<div class='form-group'>
														    <label for='namaa' class='control-label'>Nama Lengkap</label>						
														    <input type='text' class='form-control' id='namaa' name='namaa' value='$view[nama_lengkap]'>		
														 </div>
														 <div class='form-group'>
														    <label for='t_lahir' class='control-label'>Tempat Lahir</label>
														    <input type='text' class='form-control' id='t_lahir' name='t_lahir' value='$view[tmp_lahir]'>
														 </div>
														 <div class='form-group'>
														    <label for='tg_lahir' class='control-label'>Tanggal Lahir</label>	
														    <input type='text' class='form-control' id='tg_lahir' name='tg_lahir' value='$view[tgl_lahir]'>
														 </div>
														 <div class='form-group'>
														    <label for='jk' class='control-label'>Jenis Kelamin</label>
														    <select class='form-control' id='jk' name='jk'>
														    	<option class='selected' value='$view[jk]'>$view[jk]</option>
														    	<option value='Laki-laki'>Laki-laki</option>
														    	<option value='Perempuan'>Perempuan</option>
														    </select>
														 </div>
														 <div class='form-group'>
														    <label for='almt' class='control-label'>Alamat</label>
														    <input type='text' class='form-control' id='almt' name='alamat' value='$view[alamat]'>
														 </div>
														 <div class='form-group'>
														    <label for='pdd' class='control-label'>Pendidikan</label>
														    <select class='form-control' id='pdd' name='pendidikan'>";
																$qry = 'select * from pendidikan';
																$qry2 = mysql_query($qry);
																while($data = mysql_fetch_array($qry2)){
																	$selected = '';
																	if($view['pendidikan'] == $data['jenjang']) $selected = 'selected';
																	?>
																	<option <?php echo $selected; ?> value='<?php echo $data['jenjang']; ?>'><?php echo $data['jenjang']; ?></option>
																	<?php
																}
														    echo "</select>
														 </div>
														 <div class='form-group'>
														 	<label for='foto1' class='control-label'>Foto</label><br/>
														 	<img src='images/$view[foto]' width='150' class='img-thumbnail' style='text-align: center;'>
														 	<div class='input-group input-file'>
															  <div class='form-control'>
															   
															  </div>
															  <span class='input-group-addon'>
															    <a class='btn btn-primary' href='javascript:;'>
															      Browse
															      <input type='file' name='foto' id='foto' onchange='$(this).parent().parent().parent().find('.form-control').html($(this).val());'>
															    </a>
															  </span>
															</div>
														 </div>
														 <div class='form-group'>
														 	<label for='berkas1' class='control-label'>Berkas</label><br/>
														 	<a href='pdf.php?file=$view[berkas]' width='150' class='img-thumbnail'>$view[berkas]</a>
															
															<div class='input-group input-file'>
															  <div class='form-control'>
															    
															  </div>
															  <span class='input-group-addon'>
															    <a class='btn btn-primary'>
															      Browse
															      <input type='file' name='berkas'  >
															    </a>
															  </span>
															</div>
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
									</div>
									<div id='hapus$view[NIK]' class='modal fade' role='dialog'>
										<div class='modal-dialog'>										
											<div class='modal-content'>		
												<form class='form-horizontal' method='POST' action='crud.php?action=delete&id=$view[NIK]' enctype='multipart/form-data'>										
													<div class='modal-header'>
														<h2 class='modal-tittle'>Hapus Data</h2>
													</div>
													<div class='modal-body'>
														Anda yakin ingin menghapus data?
													</div>
													<div class='modal-footer'>
														<div class='form-group'>
														    <div class='col-sm-12'>
														     	<button type='button' class='btn btn-default' data-dismiss='modal'>Tidak</button>
	        													<button type='submit' class='btn btn-primary'>Ya</button>
														    </div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									
									";
									
								}
							?>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>		
	</div>
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