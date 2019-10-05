<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from ekstrakulikuler where id_ekstrakulikuler='$_GET[id]'");




  
  header('location:../../media.php?module=ekstrakulikuler');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO ekstrakulikuler( kode, nama) 

VALUES('$_POST[kode]', '$_POST[nama]')");

  
  header('location:../../media.php?module=ekstrakulikuler');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE ekstrakulikuler 
SET kode='$_POST[kode]',
nama='$_POST[nama]'
	

 
where id_ekstrakulikuler='$_POST[id_ekstrakulikuler]'");


  
  header('location:../../media.php?module=ekstrakulikuler');
}


?>
