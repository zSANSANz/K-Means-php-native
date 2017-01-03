<?php
    session_start();
    include "config/connect.php";

    if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
        if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) {
            $stmt = "";
            if ($_SESSION['level'] == 2) $stmt = "<div class='alert alert-info'>Mohon check dan setujui peserta yang diterima.</div>";

            $action = "";
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
            }

            if (isset($_POST['submit'])) {
                $qry = "select * from tbl_rangking";
                $qry2 = mysql_query($qry);
                while ($nik = mysql_fetch_array($qry2)) {
                    if (isset($_POST[$nik['NIK']])) {
                        $qryUp = "UPDATE `tbl_rangking` SET `status`= 'diterima' WHERE NIK = '" . $nik['NIK'] . "'";
                        $qryUpdate = mysql_query($qryUp);
                        if ($qryUpdate) $stmt = "<div class='alert alert-success'>Update success.</div>";
                        else $stmt = "<div class='alert alert-danger'>Update failed.</div>";
                    } else {
                        $qryUp = "UPDATE `tbl_rangking` SET `status`= '' WHERE NIK = '" . $nik['NIK'] . "'";
                        $qryUpdate = mysql_query($qryUp);
                        if ($qryUpdate) $stmt = "<div class='alert alert-success'>Update success.</div>";
                        else $stmt = "<div class='alert alert-danger'>Update failed.</div>";
                    }
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
                    .input-file {
                        position: relative;
                        margin: 0px 0px 0
                    }

                    /* Remove margin, it is just for stackoverflow viewing */
                    .input-file .input-group-addon {
                        border: 0px;
                        padding: 0px;
                    }

                    .input-file .input-group-addon .btn {
                        border-radius: 0 4px 4px 0
                    }

                    .input-file .input-group-addon input {
                        cursor: pointer;
                        position: absolute;
                        width: 72px;
                        z-index: 2;
                        top: 0;
                        right: 0;
                        filter: alpha(opacity=0);
                        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                        opacity: 0;
                        background-color: transparent;
                        color: transparent;
                    }
                </style>
            </head>
            <body>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                            <?php if ($_SESSION['level'] == 1) { ?>
                                <li><a href="peserta.php">Peserta <span class="sr-only">(current)</span></a></li>
                                <li><a href="info.php">Info</a></li>
                                <li><a href="nilai_peserta.php">Penilaian Peserta</a></li>
                                <li class="active"><a href="laporan.php">Laporan</a></li>
                            <?php } else if ($_SESSION['level'] == 2) {
                                ?>
                                <li class="active"><a href="laporan.php">Laporan</a></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>
                                    <strong><?php echo "" . $_SESSION['nama']; ?></strong></a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>
                                    <strong>Logout</strong></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <?php echo $stmt; ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 style="text-align:center;">Laporan Hasil Rekruitmen</h2>
                        <button type="button" class="btn btn-default" onclick="print_d()" style='float:left'><span
                                class="glyphicon glyphicon-print"></span></button>
                        <?php
                            if ($_SESSION['level'] == 2 && $action == '') {

                            ?>
                            <a class='btn btn-primary' href='laporan.php?action=check' role='button'
                               style='float:right'>Check</a>
                            <?php
                        }
                            else if ($_SESSION['level'] == 2 && $action != ''){
                        ?>
                        <form action='laporan.php' method='post'>
                            <input type='submit' class='btn btn-primary' name='submit' style='float:right' value='Save'>
                            <?php
                                }
                            ?>
                            <br>
                            <table id="data" class="display table table-striped table-hover" style="margin-top:20px;">
                                <thead>
                                <tr class="success">
                                    <th>
                                        <center>Ranking</center>
                                    </th>
                                    <th>
                                        <center>Nama</center>
                                    </th>
                                    <th>
                                        <center>NIK</center>
                                    </th>
                                    <th>
                                        <center>No Tes</center>
                                    </th>
                                    <th>
                                        <center>Jenis Kelamin</center>
                                    </th>
                                    <th>
                                        <center>Alamat</center>
                                    </th>
                                    <th>
                                        <center>Pendidikan</center>
                                    </th>
                                    <th>
                                        <center>Nilai Topsis</center>
                                    </th>
                                    <?php
                                        if ($_SESSION['level'] == 2) {
                                            ?>
                                            <th>
                                                <center>Disetujui</center>
                                            </th>
                                            <?php
                                        }
                                    ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $table = mysql_query("SELECT peserta.NIK, peserta.nama_lengkap, peserta.no_tes, peserta.jk, peserta.alamat, peserta.pendidikan, tbl_rangking.nilai, tbl_rangking.status, tbl_rangking.ranking FROM peserta INNER JOIN tbl_rangking ON peserta.NIK=tbl_rangking.NIK ORDER BY tbl_rangking.nilai DESC ");

                                    while ($view = mysql_fetch_array($table)) {

                                        echo "<tr>
								<td align=center>$view[ranking]</td>
								<td>$view[nama_lengkap]</td>
								<td align=center>$view[NIK]</td>
								<td align=center>$view[no_tes]</td>
								<td align=center>$view[jk]</td>
								<td>$view[alamat]</td>								
								<td align=center>$view[pendidikan]</td>
								<td align=center>$view[nilai]</td>";

                                        if (($_SESSION['level'] == 2 && $action == '')) {
                                            $status = "";
                                            if ($view['status'] == '') $status = "<p class='glyphicon glyphicon-unchecked'></p>";
                                            else $status = "<p class='glyphicon glyphicon-check'></p>";
                                            echo "<td align=center>" . $status . "</td>";
                                        } else if (($_SESSION['level'] == 2 && $action != '')) {
                                            $status = "";
                                            if ($view['status'] != '') $status = 'checked';
                                            echo "<td align=center><input type='checkbox' name='" . $view['NIK'] . "' $status></div>";
                                        }
                                        ?>
                                        <td>
                                            <a role='button' class='btn btn-primary btn-sm' data-toggle='modal'
                                               data-target='#<?php echo $view['NIK']; ?>'><span
                                                    class='glyphicon glyphicon-pencil'></span></a>

                                        </td>
                                        <?php
                                        $pes = mysql_query("SELECT * FROM peserta where NIK = '$view[NIK]'");
                                        $det = mysql_fetch_array($pes);
                                        echo "</tr>
								
								<div id='$det[NIK]' class='modal fade' role='dialog'>
										<div class='modal-dialog'>										
											<div class='modal-content'>		
												<form class='form-horizontal' method='POST' action='crud.php?action=edit' enctype='multipart/form-data'>										
													<div class='modal-header'>
														<h2 class='modal-tittle'>Data Peserta Rekruitmen</h2>
													</div>
													<div class='modal-body'>
														<input type='hidden' name='id' id='id' value='$det[no_tes]'></input>
														<input type='hidden' name='nik_lama' id='nik_lama' value='$det[NIK]'></input>
														<div class='form-group'>
														    <label for='nikk' class='control-label'>NIK</label>						
														    <input type='text' class='form-control' id='nikk' name='nikk' value='$det[NIK]' disabled>		
														 </div>												
														<div class='form-group'>
														    <label for='namaa' class='control-label'>Nama Lengkap</label>						
														    <input type='text' class='form-control' id='namaa' name='namaa' value='$det[nama_lengkap]'>		
														 </div>
														 <div class='form-group'>
														    <label for='t_lahir' class='control-label'>Tempat Lahir</label>
														    <input type='text' class='form-control' id='t_lahir' name='t_lahir' value='$det[tmp_lahir]'>
														 </div>
														 <div class='form-group'>
														    <label for='tg_lahir' class='control-label'>Tanggal Lahir</label>	
														    <input type='text' class='form-control' id='tg_lahir' name='tg_lahir' value='$det[tgl_lahir]'>
														 </div>
														 <div class='form-group'>
														    <label for='jk' class='control-label'>Jenis Kelamin</label>
														    <select class='form-control' id='jk' name='jk'>
														    	<option class='selected' value='$det[jk]'>$det[jk]</option>
														    	<option value='Laki-laki'>Laki-laki</option>
														    	<option value='Perempuan'>Perempuan</option>
														    </select>
														 </div>
														 <div class='form-group'>
														    <label for='almt' class='control-label'>Alamat</label>
														    <input type='text' class='form-control' id='almt' name='alamat' value='$det[alamat]'>
														 </div>
														 <div class='form-group'>
														    <label for='pdd' class='control-label'>Pendidikan</label>
														    <select class='form-control' id='pdd' name='pendidikan'>";
                                        $qry = 'select * from pendidikan';
                                        $qry2 = mysql_query($qry);
                                        while ($data = mysql_fetch_array($qry2)) {
                                            $selected = '';
                                            if ($det['pendidikan'] == $data['jenjang']) $selected = 'selected';
                                            ?>
                                            <option <?php echo $selected; ?>
                                                value='<?php echo $data['jenjang']; ?>'><?php echo $data['jenjang']; ?></option>
                                            <?php
                                        }
                                        echo "</select>
														 </div>
														 <div class='form-group'>
														 	<label for='foto1' class='control-label'>Foto</label><br/>
														 	<img src='images/$det[foto]' width='150' class='img-thumbnail' style='text-align: center;'>
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
														 	<a href='pdf.php?file=$det[berkas]' width='150' class='img-thumbnail'>$det[berkas]</a>
															
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
                        </form>
                    </div>
                </div>
            </div>
            <script>
                function print_d() {
                    window.open("cetak_laporan.php", "_blank");
                }
            </script>
            </body>
            </html>

            <?php
        } else {
            header('location:peserta_seleksi.php');
        }
    } else {
        header('location:index.php');
    }
?>