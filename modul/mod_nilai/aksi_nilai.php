<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from nilai where id_nilai='$_GET[id]'");




  
  header('location:../../media.php?module=nilai');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO nilai( kode, nilai, bobot, lulus) 

VALUES('$_POST[kode]', '$_POST[nilai]', '$_POST[bobot]', '$_POST[lulus]')");

  
  header('location:../../media.php?module=nilai');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE nilai 
SET kode='$_POST[kode]',
nilai='$_POST[nilai]',
bobot='$_POST[bobot]',
lulus='$_POST[lulus]'

	

 
where id_nilai='$_POST[id_nilai]'");


  
  header('location:../../media.php?module=nilai');
}


?>
