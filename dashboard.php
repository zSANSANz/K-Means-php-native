<?php 
	session_start();

	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) {		
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
	      <a class="navbar-brand" href="#">Daqu Sehat</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Peserta <span class="sr-only">(current)</span></a></li>
	        <li><a href="nilai_peserta.php">Penilaian Peserta</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Kelola Peserta</a></li>
	            <li><a href="#">Kelola Kriteria</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <strong><?php echo "".$_SESSION['nama']; ?></strong></a></li>
	        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <strong>Logout</strong></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="jumbotron">
			<h1>Klinik Daqu Sehat</h1>
		  	<p>Sistem Informasi Rekruitmen Calon Bidan Klinik Daqu Sehat Menggunakan Metode TOPSIS</p>
			<?php 
				if($_SESSION['level'] == 1) $link = "peserta.php";
				else if($_SESSION['level'] == 2) $link = "laporan.php";
			?>
		  	<p><a class="btn btn-primary btn-lg" href="<?php echo $link; ?>" role="button">Start Aplikasi</a></p>
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