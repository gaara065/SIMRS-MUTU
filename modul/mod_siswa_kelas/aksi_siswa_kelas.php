<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from siswa_kelas where id_siswa_kelas='$_GET[id2]'");




  
   header("location:../../media.php?module=siswa_kelas&id=".$_GET['id']."");
}




if ($act=='pilih'){






$stmt = $db->query("SELECT * FROM siswa_kelas WHERE id_mapel_jadwal='$_GET[id]' AND id_siswa='$_GET[id2]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu == 0){

$result = $db->exec("INSERT INTO siswa_kelas(id_mapel_jadwal, id_siswa) 

VALUES('$_GET[id]', '$_GET[id2]')");
	
}




  header("location:../../media.php?module=siswa_kelas&id=".$_GET['id']."");
  
  
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE siswa_kelas 
SET 
jam='$_POST[jam]',
id_mapel='$_POST[id_mapel]'
	

 
where id_siswa_kelas='$_POST[id_siswa_kelas]'");


  
  header("location:../../media.php?module=siswa_kelas&act=tabelubah&hari=".$_POST['hari']."&id=".$_POST['id_mapel_jadwal']."");
}


?>
