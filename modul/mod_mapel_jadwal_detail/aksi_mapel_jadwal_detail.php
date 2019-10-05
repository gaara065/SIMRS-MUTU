<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from mapel_jadwal_detail where id_mapel_jadwal_detail='$_GET[id2]'");




  
   header("location:../../media.php?module=mapel_jadwal_detail&act=tabelubah&hari=".$_GET['hari']."&id=".$_GET['id']."");
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO mapel_jadwal_detail(id_mapel_jadwal, id_mapel, hari, jam) 

VALUES('$_POST[id_mapel_jadwal]', '$_POST[id_mapel]', '$_POST[hari]', '$_POST[jam]')");

  
  header("location:../../media.php?module=mapel_jadwal_detail&act=tabelubah&hari=".$_POST['hari']."&id=".$_POST['id_mapel_jadwal']."");
  
  
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE mapel_jadwal_detail 
SET 
jam='$_POST[jam]',
id_mapel='$_POST[id_mapel]'
	

 
where id_mapel_jadwal_detail='$_POST[id_mapel_jadwal_detail]'");


  
  header("location:../../media.php?module=mapel_jadwal_detail&act=tabelubah&hari=".$_POST['hari']."&id=".$_POST['id_mapel_jadwal']."");
}


?>
