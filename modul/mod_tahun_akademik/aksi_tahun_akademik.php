<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from tahun_akademik where id_tahun_akademik='$_GET[id]'");




  
  header('location:../../media.php?module=tahun_akademik');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO tahun_akademik( kode, nama, tahun) 

VALUES('$_POST[kode]', '$_POST[nama]', '$_POST[tahun]')");

  
  header('location:../../media.php?module=tahun_akademik');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE tahun_akademik 
SET kode='$_POST[kode]',
nama='$_POST[nama]',
tahun='$_POST[tahun]'
	

 
where id_tahun_akademik='$_POST[id_tahun_akademik]'");


  
  header('location:../../media.php?module=tahun_akademik');
}


?>
