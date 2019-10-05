<?php

include "../../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';

if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from tbl_kategori where kat_id='$_GET[id]'");

  header('location:../../media.php?module=kategori');
}

if ($act=='tambah'){

$result = $db->exec("INSERT INTO tbl_kategori( kat_nama, kat_limit, id_pengaturan) 

VALUES('$_POST[kat_nama]', '$_POST[kat_limit]', '1')");

  
  header('location:../../media.php?module=kategori');
}


if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE tbl_kategori 
SET kat_nama='$_POST[kat_nama]',
kat_limit='$_POST[kat_limit]'

where kat_id='$_POST[kat_id]'");

  header('location:../../media.php?module=kategori');
}


?>
