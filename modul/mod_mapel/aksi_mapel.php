<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from mapel where id_mapel='$_GET[id]'");




  
  header('location:../../media.php?module=mapel');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO mapel( kode, nama) 

VALUES('$_POST[kode]', '$_POST[nama]')");

  
  header('location:../../media.php?module=mapel');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE mapel 
SET kode='$_POST[kode]',
nama='$_POST[nama]'
	

 
where id_mapel='$_POST[id_mapel]'");


  
  header('location:../../media.php?module=mapel');
}


?>
