<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from jurusan where id_jurusan='$_GET[id]'");




  
  header('location:../../media.php?module=jurusan');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO jurusan( kode, nama) 

VALUES('$_POST[kode]', '$_POST[nama]')");

  
  header('location:../../media.php?module=jurusan');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE jurusan 
SET kode='$_POST[kode]',
nama='$_POST[nama]'
	

 
where id_jurusan='$_POST[id_jurusan]'");


  
  header('location:../../media.php?module=jurusan');
}


?>
