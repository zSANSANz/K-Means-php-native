<?php 
	session_start();
	
	include "config/connect.php";
	
if(isset($_POST['login'])){	


	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$select = mysql_query("SELECT * FROM user WHERE username = '$username' AND password='$password'");
	$login = mysql_fetch_array($select);

	if ($login['username'] == $username && $login['password'] == $password) {

		session_start();
		$_SESSION['username'] 	= $login['username'];
		$_SESSION['password']	= $login['password'];
		$_SESSION['nama']		= $login['nama'];
		$_SESSION['desk']		= $login['desk'];
		$_SESSION['level']		= $login['level'];
		
		if ($login['level'] == 1) {
			header('location:dashboard.php');
		}	
		else{
			header('location:peserta_seleksi.php');
		}
	}

	else {
		header('location:index.php');
	}	
	
	if ($_SESSION['username'] != null && $_SESSION['password'] != null) {
		if ($_SESSION['level'] == 1) {
			header('location:dashboard.php');
		}
		else {
			header('location:peserta_seleksi.php');
		}
	}
}
	
	$stmt = "";
	if(isset($_GET['register'])){
		$stmt = "<div class='alert alert-success'>Registrasi berhasil. Silahkan login.</div>";
	}
?>


<html>
<head>
    <title>Daqu Sehat</title>
    <link href="dist/css/reset.css" rel="stylesheet" type="text/css">
    <link href="dist/css/baisnew.css" rel="stylesheet" type="text/css">

	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.10.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});
		});
			
	</script>
</head>
<body>
    <div class="clearfix" id="login">
        <div class="header-login">
			<img src="dist/img/daqu.jpg" width ="200px"/ style='margin-bottom:20px'>
			<br>
			<div class='top-navigation-wrapper boxed-style'></div>
        </div>
        <div class="w60 left">
            <div class="p20">
                <div class="announcement" align="justify">
                    Assalamualaikum. Wr. Wb. <br> 
					<p style="text-indent: 0.5in;">Selamat datang di Sistem Informasi Daqu Sehat.
					Di Indonesia mungkin ini kali pertama. Penanganan medis untuk ibu hamil dan pasien umum, dengan terapi Al-Qur’an. Konsep medis baru ini, mulai dioperasikan di Klinik Daqu Sehat yang didirikan PPPA Daarul Qur’an di Malang. Pasien ibu hamil yang datang ke Klinik Daqu Sehat, tak hanya dapat penanganan medis umum, tetapi juga dapat terapi Al-Qur’an yang dirancang khusus. 
					Para orang tua, bisa menyiapkan anak-anaknya jadi penghafal Al-Qur’an sejak dini. Para pasien akan dapat dua resep. Yakni, resep obat umum dan resep terapi Al-Qur’an, juga panduan riyadhoh bagi ibu hamil dan pasien umum. Terima Kasih.</p>
                    <div class='alert alert-info'>
					<?php
						$qry = "select * from info";
						$qry2 = mysql_query($qry);
						$data = mysql_fetch_array($qry2);
						$tgl_tutup = strtotime($data['terakhir_pendaftaran']);
						$hari_ini = strtotime(date('Y-m-d'));
						$jml = ($hari_ini - $tgl_tutup)/86400;
						if($jml <= 0){
					
						$qry = "select * from info";
						$qry2 = mysql_query($qry);
						$data = mysql_fetch_array($qry2);
							echo "<p style='text-indent: 0.5in;'>".$data['isi'];
						$date_buka = date_create($data['buka_pendaftaran']);
						$date_buka = date_format($date_buka,"d M Y");
						$date_tutup = date_create($data['terakhir_pendaftaran']);
						$date_tutup = date_format($date_tutup,"d M Y");
					
					?>
					Pendaftaran dibuka pada <i><b><?php echo $date_buka; ?></b></i> sampai <i><b><?php echo $date_tutup; ?></b></i> dan hasil seleksi akan diumumkan pada
					<?php
						$date = date_create($data['pengumuman_hasil']);
						$date_hasil = date_format($date,"d M Y");
						echo  "<i><b>".$date_hasil."</b></i>.";
						echo "</p>";
						?>

                            <a class="fancybox-effects-b" href="lowongan.jpg" title="Lowongan"><u>Selengkapnya</u></a>
                           
                            <!-- Modal -->
                        
					<?php
					
						}
						else{
							echo "Pendaftaran lowongan Daqu Sehat telah ditutup. Terima kasih atas partisipasinya. ";
							
							$tgl_tutup = strtotime($data['pengumuman_hasil']);
							$hari_ini = strtotime(date('Y-m-d'));
							$jml = ($hari_ini - $tgl_tutup)/86400;
							
							if($jml >= 0){
								?>
									<a href='cetak_laporan.php' target="blank"><u><i>Hasil Seleksi</i></u></a>
								<?php
							}
						}
					?>
					</div>
                    <div style="text-align:right">
                        <strong>Kepala Unit Daqu</strong>
                    </div><br>
                    <strong>Informasi lebih lanjut :</strong><br>
                    Jalan Bendungan Sigura Gura Barat Raya No. 15 A Malang<br>
                    Telp.: 0341-2991199<br>
                </div>
            </div>
        </div>
        <div class="w40 left">
            <div class="p20">
				<?php echo $stmt; ?>
                <form action="proses.php" method="post">
                    <div class="login-inner p20">
                        <label>Username</label> 
						<input autocomplete="off" class="inputUp" placeholder=" Username" id="username" name="username" type="text"> 
						
						<label>Password</label> 
						<input class="inputMid" placeholder=" Password" id="password" name="password" type="password" value="">
						<?php
							
							$qry = "select * from info";
							$qry2 = mysql_query($qry);
							$data = mysql_fetch_array($qry2);
							$tgl_tutup = strtotime($data['terakhir_pendaftaran']);
							$hari_ini = strtotime(date('Y-m-d'));
							$jml = ($hari_ini - $tgl_tutup)/86400;
							if($jml <= 0){
						?>
							<label><a href="register.php" style="bgcolor:#8a0000;">Register</a></label> 
                        <?php
							}
						?>
						<input class="inputBot" type="submit" name="login" value="Login">
						
                    </div>
                </form>
            </div>

			
        </div>
    </div>
    <footer class="clearfix" id="footer">
        <div class="w50 left">
        </div>
        <div class="w50 right">
            
        </div>
        <div class="w50 left"></div>
    </footer>
</body>
</html>
