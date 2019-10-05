<?php

include "../../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';







if ($act=='bayar'){



$affected_rows = $db->exec("UPDATE tbl_nilai 
SET keterangan='Sudah Bayar'
where id_nilai='$_GET[id]'");

$affected_rows = $db->exec("UPDATE tbl_user 
SET keterangan='Sudah Bayar' 
where id_user='$_GET[idu]'");

header('location:../../media.php?module=hasilpoltek');
}




  

?>
