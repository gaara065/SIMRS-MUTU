<?php

include "../../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from guru where id_guru='$_GET[id]'");




  
  header('location:../../media.php?module=guru');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO guru( kode, nama, jabatan) 

VALUES('$_POST[kode]', '$_POST[nama]', '$_POST[jabatan]')");

  
  header('location:../../media.php?module=guru');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE tbl_pengaturan_ujian 
SET nama_ujian='$_POST[nama_ujian]',
waktu='$_POST[waktu]',
nilai_min='$_POST[nilai_min]'
	

 
where id='$_POST[id]'");


  
  header('location:../../media.php?module=pengaturan');
}



if ($act=='lulus'){



  $affected_rows = $db->exec("UPDATE modul 
  SET isi_modul='$_POST[editor1]'
  
   
  where id_modul='4'");
  
  
    
    header('location:../../media.php?module=pengaturan');
  }



  if ($act=='poltek'){



    $affected_rows = $db->exec("UPDATE modul 
    SET isi_modul='$_POST[editor2]'
    
     
    where id_modul='5'");
    
    
      
      header('location:../../media.php?module=pengaturan');
    }



  

?>
