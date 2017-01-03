<?php

$stmt = "";
if(isset($_POST['login'])){
	if(isset($_POST['username']) && isset($_POST['password'])){
		
		$qry = "SELECT `username`, `password` FROM `user` WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'";
		if(mysql_num_rows(mysql_query($qry)) > 0){
			$_SESSION['username'] = $_POST['username'];
			if($_SESSION['username'] == "admin")
				header("location:../admin/index.php?content=");
			else
				header("location:index.php?content=");
		}
		else 
			$stmt = "<div class='alert alert-danger'>Maaf, Username atau Password Anda Salah</div>";
		
	}
}
if(isset($_SESSION['register']) && $_SESSION['register'] == "register"){
	$stmt = "<div class='alert alert-success'>Register Berhasil, Silahkan login!</div>";
	$_SESSION['register'] = "";
}

?>


<html>
<head>
    <title>Survey Pelanggan PT Pupuk Kaltim</title>
    <link href="../dist/css/reset.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/baisnew.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="clearfix" id="login">
        <div class="header-login">
			<img src="../dist/img/kaltim.png"/>
            <h1><span style="color:#ea0">Sistem Survey Pelanggan PT Pupuk Kaltim</h1>
        </div>
        <div class="w60 left">
            <div class="p20">
                <div class="announcement" align="justify">
                    Assalamualaikum. Wr. Wb. <br> 
					<p style="text-indent: 0.5in;">Selamat datang di Sistem Survey Pelanggan PT Pupuk Kaltim.
					PT Pupuk Kaltim adalah produsen pupuk urea terbesar di Indonesia, disamping produsen amoniak dan pupuk NPK. 
					Pupuk Kaltim memenuhi kebutuhan pupuk domestik, baik untuk sektor tanaman pangan melalui distribusi pupuk bersubsidi, maupun non subsidi untuk sektor perkebunan dan industri. 
					Pupuk Kaltim merupakan anak perusahaan dari PT Pupuk Indonesia (Persero).
					Dalam aktivitasnya, Pupuk Kaltim sangat menekankan pentingnya menjalankan sebuah industri yang ramah lingkungan dan dapat memberi nilai tambah bagi masyarakat disekitarnya. 
					PT Pupuk Kaltim menyediakan survey pelanggan ini bertujuan untuk meningkatkan kualitas dari pupuk. 
					Sehingga dimohon bagi para pelanggan atas kesediaannya dalam mengisi survey ini. Terima Kasih.</p>
                    
                    <div style="text-align:right">
                        <strong>Kepala Unit Pupuk Kaltim</strong>
                    </div><br>
                    <strong>Informasi lebih lanjut :</strong><br>
                    Helpdesk Pupuk Kaltim • Gedung Pentagon, Dinoyo, Malang ^_^<br>
                    Telp.: 085708570857 • Email : supel@pupukkaltim.com<br>
                </div>
            </div>
        </div>
        <div class="w40 left">
            <div class="p20">
				<?php echo $stmt; ?>
                <form action="login.php" method="post">
                    <div class="login-inner p20">
                        <label>Username</label> 
						<input autocomplete="off" class="inputUp" placeholder=" Username" id="username" name="username" type="text"> 
						
						<label>Password</label> 
						<input class="inputMid" placeholder=" Password" id="password" name="password" type="password" value="">
						
						<label><a href="register.php" style="bgcolor:#5bc0de;">Register</a></label> 
                        <input class="inputBot" type="submit" name="login" value="Login">
						
                    </div>
                </form>
            </div>
			<div class="p20" align="center">
				<img src="../dist/img/pupuk_indonesia.jpg" width="200" height="100"/>
			</div>
			
        </div>
    </div>
    <footer class="clearfix" id="footer">
        <div class="w50 left">
            <div class="p20">
                <ul class="clearfix">
                    <li class="box">
                        <a href="https://pemasaran.pupukkaltim.com/live/" title="Sistem Penjualan Online">SPO</a>
                    </li>
                    <li class="box">
                        <a href="http://subsidi.pupukkaltim.com" title="Monitoring Penyaluran Pupuk Bersubsidi">MPPB</a>
                    </li>
                    <li class="box">
                        <a href="http://eproc.pupukkaltim.com/" title="E-Procurement">E-Procurement</a>
                    </li>
                    <li class="box">
                        <a href="http://www.pktbersih.com/ina/home/" title="Whistleblowing System">Whistleblowing System</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w50 right">
            <div class="p20" style="text-align:right">
                ©2016 • PT Pupuk Kaltim
            </div>
        </div>
        <div class="w50 left"></div>
       
    </footer>
</body>
</html>