<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from karyawan where id_karyawan='$_GET[id]'");




  
  header('location:../../media.php?module=karyawan');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO karyawan( kode, nama, jabatan) 

VALUES('$_POST[kode]', '$_POST[nama]', '$_POST[jabatan]')");

  
  header('location:../../media.php?module=karyawan');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE karyawan 
SET kode='$_POST[kode]',
nama='$_POST[nama]',
jabatan='$_POST[jabatan]'
	

 
where id_karyawan='$_POST[id_karyawan]'");


  
  header('location:../../media.php?module=karyawan');
}


?>
