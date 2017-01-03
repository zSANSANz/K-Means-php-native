<?php
    include "config/connect.php";

    $sql = "select * from user WHERE username='$_GET[username]' OR NIK = '$_GET[NIK]'";
    $exec = mysql_query($sql) or die(mysql_error());
    $data = mysql_num_rows($exec);

    if ($data > 0) {
        echo "username/NIK sudah di pakai";
    }else{
        echo "username/NIK tersedia";
    }