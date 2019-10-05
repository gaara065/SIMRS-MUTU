<?php

include "../../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from tbl_soal where id_soal='$_GET[id]'");


  header('location:../../media.php?module=soal');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO tbl_soal( soal,a,b,c,d,knc_jawaban,kategori,jenis) 

VALUES('$_POST[soal]', '$_POST[a]', '$_POST[b]', '$_POST[c]', '$_POST[d]', '$_POST[knc_jawaban]', '$_POST[kategori]', 'teks')");

  
  header('location:../../media.php?module=soal');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE tbl_soal 
SET 
soal='$_POST[soal]', 
a='$_POST[a]', 
b='$_POST[b]', 
c='$_POST[c]', 
d='$_POST[d]', 
knc_jawaban='$_POST[knc_jawaban]'

 
where id_soal='$_POST[id_soal]'");


  
  header('location:../../media.php?module=soal');
}


?>
