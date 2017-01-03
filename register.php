<?php
    include "config/connect.php";

    $stmt = "";
    if (isset($_GET['register'])) {
        if ($_GET['register'] == 'pdf') {
            $stmt = "<div class='alert alert-danger'>Maaf, berkas yang Anda upload tidak sesuai format (pdf).</div>";
        } else if ($_GET['register'] == 'form') {
            $stmt = "<div class='alert alert-danger'>Maaf, silahkan isi semua form.</div>";
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
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
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

    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php echo $stmt; ?>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tambah" data-toggle="tab">Registrasi</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tambah">
                    <form class="form-horizontal" method="POST" action="crud.php?action=input" id="form"
                          enctype="multipart/form-data" style="margin-top:20px;">
                        <div class="form-group col-sm-10">
                            <label for="nik" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" name="username"
                                       placeholder="Username">
                                <div id="msg"></div>
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="nama" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="tmp_lahir" class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="confirm_pass" name="confirm_pass"
                                       placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="nik" class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="No. KTP">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama"
                                       placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="tmp_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                                       placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                       placeholder="Tanggal Lahir (YYYY-MM-DD)">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2">
                                <select id="jk" name="jk" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="pend" class="col-sm-2 control-label">Pendidikan</label>
                            <div class="col-sm-2">
                                <select id="pend" name="pend" class="form-control" placeholder="Pendidikan">
                                    <?php
                                        $qry = 'select * from pendidikan';
                                        $qry2 = mysql_query($qry);
                                        while ($data = mysql_fetch_array($qry2)) {
                                            ?>
                                            <option
                                                value='<?php echo $data['jenjang']; ?>'><?php echo $data['jenjang']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-sm-10">
                            <label for="foto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-10">
                                <div class="input-group input-file">
                                    <div class="form-control">
                                        Upload Foto
                                    </div>
								  <span class="input-group-addon">
								    <a class='btn btn-primary' href='javascript:;'>
								      Browse
								      <input type="file" name="foto" id='foto'
                                             onchange="$(this).parent().parent().parent().find('.form-control').html($(this).val());">
								    </a>
								  </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <label for="foto" class="col-sm-2 control-label">Berkas Lamaran</label>
                            <div class="col-sm-10">
                                <div class="input-group input-file">
                                    <div class="form-control">
                                        Gunakan ekstensi file pdf
                                    </div>
								  <span class="input-group-addon">
								    <a class='btn btn-primary' href='javascript:;'>
								      Browse
								      <input type="file" name="berkas" id='berkas'
                                             onchange="$(this).parent().parent().parent().find('.form-control').html($(this).val());">
								    </a>
								  </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-10">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name='register' value='register' class="btn btn-default">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div id="msg"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#username").keyup(function () {
            $("#msg").html("");
            $.ajax({
                url: "cekusername.php",
                data: {
                    username: $('#username').val(),
                    NIK: $('#nik').val(),
                },
                success: function (data) {
                        $("#msg").html(data);

                }
            });
        });
        $("#nik").keyup(function () {
            $("#msg").html("");
            $.ajax({
                url: "cekusername.php",
                data: {
                    username: $('#username').val(),
                    NIK: $('#nik').val(),
                },
                success: function (data) {
                        $("#msg").html(data);

                }
            });
        });
    });
</script>
</body>
</html>
