<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from kurikulum where id_kurikulum='$_GET[id]'");




  
  header('location:../../media.php?module=kurikulum');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO kurikulum( kode, nama, alias) 

VALUES('$_POST[kode]', '$_POST[nama]', '$_POST[alias]')");

  
  header('location:../../media.php?module=kurikulum');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE kurikulum 
SET kode='$_POST[kode]',
nama='$_POST[nama]',
alias='$_POST[alias]'
	

 
where id_kurikulum='$_POST[id_kurikulum]'");


  
  header('location:../../media.php?module=kurikulum');
}


?>
