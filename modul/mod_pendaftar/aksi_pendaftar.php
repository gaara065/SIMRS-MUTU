<?php

include "../../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';



if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from tbl_user where id_user='$_GET[id]'");

  header('location:../../media.php?module=pendaftar');
}




if ($act=='tambah'){

$result = $db->exec("INSERT INTO tbl_user( ujian, username, nama, password) 

VALUES('$_POST[ujian]', '$_POST[username]', '$_POST[nama]', '$_POST[password]')");

  
  header('location:../../media.php?module=pendaftar');
}




if ($act=='ubah'){

$affected_rows = $db->exec("UPDATE tbl_user 
SET username='$_POST[username]',
nama='$_POST[nama]',
password='$_POST[password]'

where id_user='$_POST[id_user]'");
  
  header('location:../../media.php?module=pendaftar');
}


?>
