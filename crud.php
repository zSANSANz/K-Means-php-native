<?php  
	include "config/connect.php";

	function no_peserta($param='PST') {  //Pemberian nomer tes peserta secara otomatis
		$dataMax = mysql_fetch_assoc(mysql_query("SELECT SUBSTR(MAX(no_tes),-3) AS ID  FROM peserta"));

            if($dataMax['ID']=='') {
                $ID = $param."001";
            }else {
                $MaksID = $dataMax['ID'];
                $MaksID++;
                if($MaksID < 10) $ID = $param."00".$MaksID; // nilai kurang dari 10
                else if($MaksID < 100) $ID = $param."0".$MaksID; // nilai kurang dari 100
                else if($MaksID >= 100) $ID = $param."".$MaksID; // nilai lebih dari 100
            }
        return $ID;
    }

    function akar_kuadrat(){
    	$sum1 	= mysql_query("SELECT SUM(pend) sum FROM tbl_kuadrat");
		$sum1a	= mysql_fetch_assoc($sum1);

		$sum2 	= mysql_query("SELECT SUM(t_kemampuan) sum FROM tbl_kuadrat");
		$sum2a 	= mysql_fetch_assoc($sum2);

		$sum3 	= mysql_query("SELECT SUM(t_tulis) sum FROM tbl_kuadrat");
		$sum3a 	= mysql_fetch_assoc($sum3);

		$sum4 	= mysql_query("SELECT SUM(t_pribadi) sum FROM tbl_kuadrat");
		$sum4a 	= mysql_fetch_assoc($sum4);

		$sum5 	= mysql_query("SELECT SUM(wawancara1) sum FROM tbl_kuadrat");
		$sum5a 	= mysql_fetch_assoc($sum5);

		$sum6 	= mysql_query("SELECT SUM(wawancara2) sum FROM tbl_kuadrat");
		$sum6a 	= mysql_fetch_assoc($sum6);

		$akar1 = sqrt($sum1a['sum']);
		$akar2 = sqrt($sum2a['sum']);
		$akar3 = sqrt($sum3a['sum']);
		$akar4 = sqrt($sum4a['sum']);
		$akar5 = sqrt($sum5a['sum']);
		$akar6 = sqrt($sum6a['sum']);

		mysql_query("UPDATE tbl_jumlah_kuadrat SET 	pend 		= '$sum1a[sum]',
													t_kemampuan	= '$sum2a[sum]',
													t_tulis		= '$sum3a[sum]',
													t_pribadi	= '$sum4a[sum]',
													wawancara1	= '$sum5a[sum]',
													wawancara2	= '$sum6a[sum]'
												WHERE jenis_nilai = 'JUMLAH KUADRAT'");

		mysql_query("UPDATE tbl_jumlah_kuadrat SET 	pend 		= '$akar1',
													t_kemampuan	= '$akar2',
													t_tulis		= '$akar3',
													t_pribadi	= '$akar4',
													wawancara1	= '$akar5',
													wawancara2	= '$akar6'
												WHERE jenis_nilai = 'AKAR KUADRAT'");
    }

    function kuadrat($n1, $n2, $n3, $n4, $n5, $n6, $id){
    	//proses pengkuadratan
		$r1 = $n1 * $n1;
		$r2 = $n2 * $n2;
		$r3 = $n3 * $n3;
		$r4 = $n4 * $n4;
		$r5 = $n5 * $n5;
		$r6 = $n6 * $n6;		

		mysql_query("UPDATE tbl_kuadrat SET 	pend 		= '$r1',
												t_kemampuan	= '$r2',
												t_tulis		= '$r3',
												t_pribadi	= '$r4',
												wawancara1	= '$r5',
												wawancara2	= '$r6'
											WHERE NIK = '$id'");
    }

    // function normalisasi_matriks($id){

    // 	$data = mysql_query("SELECT * FROM data_peserta WHERE NIK = '$id'");
    	
    // 	$matriks = mysql_fetch_array($data);
    		
    // 		$nilaiaka = mysql_query("SELECT * FROM tbl_jumlah_kuadrat WHERE jenis_nilai = 'AKAR KUADRAT'");
    // 		$nilaiakar =  mysql_fetch_array($nilaiaka);

    // 		$nm1 = $matriks['pend'] / $nilaiakar['pend'];
    // 		$nm2 = $matriks['t_kemampuan'] / $nilaiakar['t_kemampuan'];
    // 		$nm3 = $matriks['t_tulis'] / $nilaiakar['t_tulis'];
    // 		$nm4 = $matriks['t_pribadi'] / $nilaiakar['t_pribadi'];
    // 		$nm5 = $matriks['wawancara1'] / $nilaiakar['wawancara1'];
    // 		$nm6 = $matriks['wawancara2'] / $nilaiakar['wawancara2'];

    // 		mysql_query("UPDATE tbl_normalisasi_matriks SET 	pend 		= '$nm1',
				// 												t_kemampuan	= '$nm2',
				// 												t_tulis		= '$nm3',
				// 												t_pribadi	= '$nm4',
				// 												wawancara1	= '$nm5',
				// 												wawancara2	= '$nm6'
				// 											WHERE NIK = '$id'");
		    	
    //  }

    function normalisasi_matriks_update(){

    	$nilaiaka = mysql_query("SELECT * FROM tbl_jumlah_kuadrat WHERE jenis_nilai = 'AKAR KUADRAT'");
    	$nilaiakar =  mysql_fetch_array($nilaiaka);

    	$data = mysql_query("SELECT * FROM data_peserta");
    	while($matriks = mysql_fetch_array($data)){ 		
    		
    		$nm1 = $matriks['pend'] / $nilaiakar['pend'];
    		$nm2 = $matriks['t_kemampuan'] / $nilaiakar['t_kemampuan'];
    		$nm3 = $matriks['t_tulis'] / $nilaiakar['t_tulis'];
    		$nm4 = $matriks['t_pribadi'] / $nilaiakar['t_pribadi'];
    		$nm5 = $matriks['wawancara1'] / $nilaiakar['wawancara1'];
    		$nm6 = $matriks['wawancara2'] / $nilaiakar['wawancara2'];

    		mysql_query("UPDATE tbl_normalisasi_matriks SET 	pend 		= '$nm1',
																t_kemampuan	= '$nm2',
																t_tulis		= '$nm3',
																t_pribadi	= '$nm4',
																wawancara1	= '$nm5',
																wawancara2	= '$nm6'
															WHERE NIK = '$matriks[NIK]'");
    	}
    }

    function wndcm(){

    	$bobot = mysql_query("SELECT * FROM tbl_kriteria");
    	$kriteria = mysql_fetch_array($bobot);

    	$data1 = mysql_query("SELECT * FROM tbl_normalisasi_matriks");
    	while ($wndm = mysql_fetch_array($data1)) {
    		
    		$wn1 = $wndm['pend'] * $kriteria['pend'];
    		$wn2 = $wndm['t_kemampuan'] * $kriteria['t_kemampuan'];
    		$wn3 = $wndm['t_tulis'] * $kriteria['t_tulis'];
    		$wn4 = $wndm['t_pribadi'] * $kriteria['t_pribadi'];
    		$wn5 = $wndm['wawancara1'] * $kriteria['wawancara1'];
    		$wn6 = $wndm['wawancara2'] * $kriteria['wawancara2'];

    	mysql_query("UPDATE tbl_wndm SET 	pend 		= '$wn1',
											t_kemampuan	= '$wn2',
											t_tulis		= '$wn3',
											t_pribadi	= '$wn4',
											wawancara1	= '$wn5',
											wawancara2	= '$wn6'
										WHERE NIK = '$wndm[NIK]'");
    	}
    }

    function positif_negatif(){

    	$plus1 	= mysql_query("SELECT MAX(pend) plus FROM tbl_wndm");
    	$positif1 = mysql_fetch_array($plus1);

    	$plus2 	= mysql_query("SELECT MAX(t_kemampuan) plus FROM tbl_wndm");
    	$positif2 = mysql_fetch_array($plus2);

    	$plus3 	= mysql_query("SELECT MAX(t_tulis) plus FROM tbl_wndm");
    	$positif3 = mysql_fetch_array($plus3);

    	$plus4 	= mysql_query("SELECT MAX(t_pribadi) plus FROM tbl_wndm");
    	$positif4 = mysql_fetch_array($plus4);

    	$plus5 	= mysql_query("SELECT MAX(wawancara1) plus FROM tbl_wndm");
    	$positif5 = mysql_fetch_array($plus5);

    	$plus6 	= mysql_query("SELECT MAX(wawancara2) plus FROM tbl_wndm");
    	$positif6 = mysql_fetch_array($plus6);

    	$min1 	= mysql_query("SELECT MIN(pend) min FROM tbl_wndm");
    	$negatif1 = mysql_fetch_array($min1);

    	$min2 	= mysql_query("SELECT MIN(t_kemampuan) min FROM tbl_wndm");
    	$negatif2 = mysql_fetch_array($min2);

    	$min3 	= mysql_query("SELECT MIN(t_tulis) min FROM tbl_wndm");
    	$negatif3 = mysql_fetch_array($min3);

    	$min4 	= mysql_query("SELECT MIN(t_pribadi) min FROM tbl_wndm");
    	$negatif4 = mysql_fetch_array($min4);

    	$min5 	= mysql_query("SELECT MIN(wawancara1) min FROM tbl_wndm");
    	$negatif5 = mysql_fetch_array($min5);

    	$min6 	= mysql_query("SELECT MIN(wawancara2) min FROM tbl_wndm");
    	$negatif6 = mysql_fetch_array($min6);

    	mysql_query("UPDATE tbl_positif_negatif SET pend 		= '$positif1[plus]',
													t_kemampuan	= '$positif2[plus]',
													t_tulis		= '$positif3[plus]',
													t_pribadi	= '$positif4[plus]',
													wawancara1	= '$positif5[plus]',
													wawancara2	= '$positif6[plus]'
												WHERE jenis_nilai = 'MAKS POSITIF'");

		mysql_query("UPDATE tbl_positif_negatif SET pend 		= '$negatif1[min]',
													t_kemampuan	= '$negatif2[min]',
													t_tulis		= '$negatif3[min]',
													t_pribadi	= '$negatif4[min]',
													wawancara1	= '$negatif5[min]',
													wawancara2	= '$negatif6[min]'
												WHERE jenis_nilai = 'MIN NEGATIF'");

    }

    function separasi(){

    	$pos = mysql_query("SELECT * FROM tbl_positif_negatif WHERE jenis_nilai = 'MAKS POSITIF'");
    	$np =  mysql_fetch_array($pos);

    	$neg = mysql_query("SELECT * FROM tbl_positif_negatif WHERE jenis_nilai = 'MIN NEGATIF'");
    	$nn =  mysql_fetch_array($neg);

    	$sep = mysql_query("SELECT * FROM tbl_wndm");
    	while($sp = mysql_fetch_array($sep)){ 		
    		
    		$spt1 = ($sp['pend'] - $np['pend']) * ($sp['pend'] - $np['pend']);
    		$spt2 = ($sp['t_kemampuan'] - $np['t_kemampuan']) * ($sp['t_kemampuan'] - $np['t_kemampuan']);
    		$spt3 = ($sp['t_tulis'] - $np['t_tulis']) * ($sp['t_tulis'] - $np['t_tulis']);
    		$spt4 = ($sp['t_pribadi'] - $np['t_pribadi']) * ($sp['t_pribadi'] - $np['t_pribadi']);
    		$spt5 = ($sp['wawancara1'] - $np['wawancara1']) * ($sp['wawancara1'] - $np['wawancara1']);
    		$spt6 = ($sp['wawancara2'] - $np['wawancara2']) * ($sp['wawancara2'] - $np['wawancara2']);

    		$spt = sqrt($spt1 + $spt2 + $spt3 + $spt4 + $spt5 + $spt6);

    		$sne1 = ($sp['pend'] - $nn['pend']) * ($sp['pend'] - $nn['pend']);
    		$sne2 = ($sp['t_kemampuan'] - $nn['t_kemampuan']) * ($sp['t_kemampuan'] - $nn['t_kemampuan']);
    		$sne3 = ($sp['t_tulis'] - $nn['t_tulis']) * ($sp['t_tulis'] - $nn['t_tulis']);
    		$sne4 = ($sp['t_pribadi'] - $nn['t_pribadi']) * ($sp['t_pribadi'] - $nn['t_pribadi']);
    		$sne5 = ($sp['wawancara1'] - $nn['wawancara1']) * ($sp['wawancara1'] - $nn['wawancara1']);
    		$sne6 = ($sp['wawancara2'] - $nn['wawancara2']) * ($sp['wawancara2'] - $nn['wawancara2']);

    		$sn = sqrt($sne1 + $sne2 + $sne3 + $sne4 + $sne5 + $sne6);

    		mysql_query("UPDATE tbl_separasi SET 	ideal_positif	= '$spt',
													ideal_negatif	= '$sn'
												WHERE NIK = '$sp[NIK]'");
    	}
    }

    function kedekatan_relatif(){

    	$relatif = mysql_query("SELECT * FROM tbl_separasi");

    	while ($kedekatan = mysql_fetch_array($relatif)) {
    		
    		$hasil = $kedekatan['ideal_negatif'] / ($kedekatan['ideal_positif'] + $kedekatan['ideal_negatif']);

    		mysql_query("UPDATE tbl_kedekatan_relatif SET 	dekat_relatif	= '$hasil'
														WHERE NIK = '$kedekatan[NIK]'");
    	}
    }

    function ranking(){
    	$rank = mysql_query("SELECT * FROM tbl_kedekatan_relatif ORDER BY dekat_relatif DESC");
    	$posisi = 1;

    	while ($peringkat = mysql_fetch_array($rank)) {
    		
    	mysql_query("UPDATE tbl_rangking SET 	nilai		= '$peringkat[dekat_relatif]',
												ranking	= '$posisi'
											WHERE NIK = '$peringkat[NIK]'");
    		$posisi++;
    	}
    }

    function upload_foto($file){

    	$lokasi 	= "images/";
    	$foto 		= $_FILES['foto']['name'];
    	$foto_tmp	= $_FILES['foto']['tmp_name'];

    	move_uploaded_file($foto_tmp, $lokasi.$foto);
    }
	
	function upload_berkas($file){

    	$lokasi 	= "berkas/";
    	$berkas 	= $_FILES['berkas']['name'];
    	$berkas_tmp	= $_FILES['berkas']['tmp_name'];

    	move_uploaded_file($berkas_tmp, $lokasi.$berkas);
    }


	if ($_GET['action'] == "input") {
		echo "k";
		if(isset($_POST['register'])){
			echo "k";
			$valid_array = array('');
			if((isset($_FILES['berkas']) && $_FILES['berkas']['size']>=0) && 
				(isset($_FILES['foto']) && $_FILES['foto']['size']>=0)){
					echo "k";
				$ext = strtolower(end(explode('.', $_FILES['berkas']['name'])));
				if(in_array($ext, $valid_array)){
					move_uploaded_file($_FILES['berkas']['tmp_name'], 'berkas/'.$_FILES['berkas']['name']);
					
					$unik = no_peserta();
					$foto3		= $_FILES['foto']['name'];
					$berkas		= $_FILES['berkas']['name'];
					
					mysql_query("INSERT INTO peserta (NIK, nama_lengkap, no_tes, tmp_lahir, tgl_lahir, jk, alamat, pendidikan, foto, berkas) VALUES ('$_POST[nik]', '$_POST[nama]', '$unik', '$_POST[tmp_lahir]', '$_POST[tgl_lahir]', '$_POST[jk]', '$_POST[alamat]', '$_POST[pend]', '$foto3', '$berkas')");
					if($_POST['pend'] == "S1") $pend = 100;
					else $pend = 50;
					mysql_query("INSERT INTO data_peserta (NIK, nama, pend, t_kemampuan, t_tulis, t_pribadi, wawancara1, wawancara2) VALUES ('$_POST[nik]','$_POST[nama]',$pend,'','','','','')");

					//$nik_pass = md5($_POST['nik']);
					$user = $_POST['username'];
					$pass = md5($_POST['password']);
					mysql_query("INSERT INTO user (NIK, nama, username, password, deskripsi, level) VALUES ('$_POST[nik]', '$_POST[nama]', '$user', '$pass', 'Peserta', '0')");
					
					mysql_query("INSERT INTO tbl_kuadrat (NIK, nama, pend, t_kemampuan, t_tulis, t_pribadi, wawancara1, wawancara2) VALUES ('$_POST[nik]','$_POST[nama]','','','','','','')");

					mysql_query("INSERT INTO tbl_normalisasi_matriks (NIK, nama, pend, t_kemampuan, t_tulis, t_pribadi, wawancara1, wawancara2) VALUES ('$_POST[nik]','$_POST[nama]','','','','','','')");

					mysql_query("INSERT INTO tbl_wndm (NIK, nama, pend, t_kemampuan, t_tulis, t_pribadi, wawancara1, wawancara2) VALUES ('$_POST[nik]','$_POST[nama]','','','','','','')");

					mysql_query("INSERT INTO tbl_separasi (NIK, nama, ideal_positif, ideal_negatif) VALUES('$_POST[nik]', '$_POST[nama]', '', '')");

					mysql_query("INSERT INTO tbl_kedekatan_relatif (NIK, nama, dekat_relatif) VALUES('$_POST[nik]', '$_POST[nama]', '')");

					mysql_query("INSERT INTO tbl_rangking(NIK, nama, nilai, ranking) VALUES('$_POST[nik]', '$_POST[nama]', '', '')");

					upload_foto();
				
					header('location:index.php?register=success');
					
				}else{
					header('location:register.php?register=pdf');
				}
				
			}else{
					header('location:register.php?register=form');
			}
		}
		
	}

	else if($_GET['action'] == "edit") {

		$foto		= $_FILES['foto']['name'];
		$temp1		= $_FILES['foto']['tmp_name'];
		$berkas		= $_FILES['berkas']['name'];
		$temp2		= $_FILES['berkas']['tmp_name'];
		
		if(!empty($temp1) && !empty($temp2)){
		echo $qry = "UPDATE peserta SET NIK = '$_POST[nik_lama]', 
										`nama_lengkap`='$_POST[namaa]',
										`tmp_lahir`='$_POST[t_lahir]',
										`tgl_lahir`='$_POST[tg_lahir]',
										`jk`='$_POST[jk]',
										`alamat`='$_POST[alamat]',
										`pendidikan`='$_POST[pendidikan]',
										foto = '$foto', 
										berkas 	= '$berkas'		
										WHERE 	NIK = '$_POST[nik_lama]'";
			
		}
		else{
			$stmt = "";
			if(!empty($temp1)){
				$stmt = ",foto = '$foto'";
			}
			else if(!empty($temp2)){
				$stmt = ",berkas = '$berkas'";
			}
			
			echo $qry = "UPDATE peserta SET NIK = '$_POST[nik_lama]', 
										`nama_lengkap`='$_POST[namaa]',
										`tmp_lahir`='$_POST[t_lahir]',
										`tgl_lahir`='$_POST[tg_lahir]',
										`jk`='$_POST[jk]',
										`alamat`='$_POST[alamat]',
										`pendidikan`='$_POST[pendidikan]'
										 $stmt
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry2 = "UPDATE data_peserta SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry3 = "UPDATE tbl_kedekatan_relatif SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry4 = "UPDATE tbl_normalisasi_matriks SET NIK = '$_POST[nik_lama]', 
										`nama` = '$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry5 = "UPDATE tbl_rangking SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry6 = "UPDATE tbl_separasi SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry7 = "UPDATE tbl_wndm SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry8 = "UPDATE user SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
				echo $qry9 = "UPDATE tbl_kuadrat SET NIK = '$_POST[nik_lama]', 
										`nama`='$_POST[namaa]'
										WHERE NIK = '$_POST[nik_lama]'";
		}
		$update1 = mysql_query($qry);
		 $update2 = mysql_query($qry2);
		 $update3 = mysql_query($qry3);
		 $update4 = mysql_query($qry4);
		 $update5 = mysql_query($qry5);
		 $update6 = mysql_query($qry6);
		 $update7 = mysql_query($qry7);
		 $update8 = mysql_query($qry8);
		 $update9 = mysql_query($qry9);
		if($update1 && $update2 && $update3 && $update4 && $update5 && $update6 && $update7 && $update8){
			echo $edit = "success";
			if(!empty($temp1)){
				upload_foto($_FILES['foto']);
			}
			else if(!empty($temp2)){
				upload_berkas($_FILES['berkas']);
			}
		}
		else echo $edit = "failed";
		
		header('location:peserta.php?edit='.$edit);
	}

	elseif ($_GET['action'] == "edit_peserta_seleksi") {

		echo $berkas		= $_FILES['berkas']['name'];
		//$temp1 		= $_FILES['berkas']['tmp_name'];
		
		if (!empty($berkas)){
			
			$qry = "UPDATE peserta SET alamat	= '$_POST[almt]',
										berkas 		= '$berkas'											
										WHERE 	NIK = '$_POST[nik_lama]'";
			$update = mysql_query($qry);
			if($update){
				$edit = "success";
				upload_berkas($_FILES['berkas']);
			}
			else $edit = "failed";
		}
		else $edit = "failed";
		
		header('location:peserta_seleksi.php?edit='.$edit);
	}

	elseif ($_GET['action'] == "delete") {

		$nik =  md5($_GET['id']);
		$un1	= mysql_query("SELECT * FROM peserta WHERE NIK = '$_GET[id]'");
		$link1	= mysql_fetch_array($un1);
		unlink("c:/xampp/htdocs/topsis/images/$link1[foto]");

		mysql_query("DELETE FROM peserta WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM data_peserta WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_kuadrat WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM user WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_normalisasi_matriks WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_wndm WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_separasi WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_kedekatan_relatif WHERE NIK = '$_GET[id]'");
		mysql_query("DELETE FROM tbl_rangking WHERE NIK = '$_GET[id]'");
		akar_kuadrat();
		positif_negatif();
		ranking();
		header('location:peserta.php');

	}

	elseif ($_GET['action'] == "in_nilai") {
		mysql_query("UPDATE data_peserta SET 	pend 		= '$_POST[pendi]',
												t_kemampuan	= '$_POST[t_kem]',
												t_tulis		= '$_POST[t_tul]',
												t_pribadi	= '$_POST[t_priba]',
												wawancara1	= '$_POST[wwc1]',
												wawancara2	= '$_POST[wwc2]'
											WHERE NIK = '$_POST[id]'");
		
		kuadrat($_POST['pendi'], $_POST['t_kem'], $_POST['t_tul'], $_POST['t_priba'], $_POST['wwc1'], $_POST['wwc2'], $_POST['id']);
		akar_kuadrat();
		//normalisasi_matriks($_POST['id']);
		normalisasi_matriks_update();
		wndcm();
		positif_negatif();
		separasi();
		kedekatan_relatif();
		ranking();
		
		header('location:nilai_peserta.php');
	}
	
	elseif ($_GET['action'] == "reset") {
		mysql_query("UPDATE data_peserta SET 	pend 		= '',
												t_kemampuan	= '',
												t_tulis		= '',
												t_pribadi	= '',
												wawancara1	= '',
												wawancara2	= ''
											WHERE NIK = '$_GET[id]'");
		kuadrat(0,0,0,0,0,0, $_GET['id']);		
		akar_kuadrat();
		normalisasi_matriks_update();	
		wndcm();
		positif_negatif();
		separasi();		
		kedekatan_relatif();	
		ranking();

		header('location:nilai_peserta.php');
	}
	
?>