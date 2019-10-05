<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from mapel_jadwal where id_mapel_jadwal='$_GET[id]'");




  
  header('location:../../media.php?module=mapel_jadwal');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO mapel_jadwal(id_tahun_akademik, semester, id_kelas, id_jurusan,id_kurikulum, id_guru) 

VALUES('$_POST[id_tahun_akademik]', '$_POST[semester]', '$_POST[id_kelas]', '$_POST[id_jurusan]', '$_POST[id_kurikulum]', '$_POST[id_guru]')");

  
  header('location:../../media.php?module=mapel_jadwal');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE mapel_jadwal 
SET 
id_jurusan='$_POST[id_jurusan]',
id_tahun_akademik='$_POST[id_tahun_akademik]',
semester='$_POST[semester]',
id_kelas='$_POST[id_kelas]',
id_kurikulum='$_POST[id_kurikulum]',
id_guru='$_POST[id_guru]'
	

 
where id_mapel_jadwal='$_POST[id_mapel_jadwal]'");


  
  header('location:../../media.php?module=mapel_jadwal');
}


?>
