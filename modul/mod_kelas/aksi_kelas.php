<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from kelas where id_kelas='$_GET[id]'");




  
  header('location:../../media.php?module=kelas');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO kelas( kode, nama, jenis) 

VALUES( '$_POST[kode]', '$_POST[nama]', '$_POST[jenis]')");

  
  header('location:../../media.php?module=kelas');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE kelas 
SET 
kode='$_POST[kode]',
nama='$_POST[nama]',
jenis='$_POST[jenis]'
	

 
where id_kelas='$_POST[id_kelas]'");


  
  header('location:../../media.php?module=kelas');
}


?>
