<?php

include "../../koneksi.php";
include "../../fungsi_thumb.php";


$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from siswa where id_siswa='$_GET[id]'");




  
   header("location:../../media.php?module=siswa");
}




if ($act=='tambah'){




$stmt = $db->query("SELECT * FROM siswa WHERE kode='$_POST[kode]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu == 0){

$result = $db->exec("INSERT INTO siswa(kode, nama, alamat, email, hp, ortu, ortu_alamat , ortu_hp, lahir, lahir_tgl, ortu_user, ortu_pass) 

VALUES('$_POST[kode]', '$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[hp]', '$_POST[ortu]', '$_POST[ortu_alamat]', '$_POST[ortu_hp]', '$_POST[lahir]', '$_POST[lahir_tgl]','$_POST[kode]','$_POST[kode]')");
	
$insertId = $db->lastInsertId();

$result = $db->exec("INSERT INTO user(username, password, id_siswa, status) 

VALUES('$_POST[kode]', '$_POST[kode]', '$insertId', '2')");


	
	  header("location:../../media.php?module=siswa&act=detail&id=$insertId");
	}
else
{




  header("location:../../media.php?module=siswa");
}
  
}








if ($act=='ubah'){



$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
 
 
 
   if (empty($lokasi_file)){
	   
$affected_rows = $db->exec("UPDATE siswa 
SET 
kode='$_POST[kode]',
 nama='$_POST[nama]',
 alamat='$_POST[alamat]',
 email='$_POST[email]',
 hp='$_POST[hp]',
 ortu='$_POST[ortu]',
 ortu_alamat='$_POST[ortu_alamat]',
 ortu_hp='$_POST[ortu_hp]',
 lahir='$_POST[lahir]',
 lahir_tgl='$_POST[lahir_tgl]', 
 ortu_user='$_POST[ortu_user]',
 ortu_pass='$_POST[ortu_pass]',
 riwayat_sekolah='$_POST[riwayat_sekolah]'
        
where id_siswa='$_POST[id_siswa]'");



$affected_rows = $db->exec("UPDATE user 
SET 

 username='$_POST[ortu_user]',
 password='$_POST[ortu_pass]'
        
where id_siswa='$_POST[id_siswa]'");




   header("location:../../media.php?module=siswa&act=detail&id=".$_POST['id_siswa']."");
   
  }
  else
  {
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=siswa&act=detail&id=$_POST[id_siswa]')</script>";
    }
    else
	{
    UploadDisplay($nama_file_unik);
	
$affected_rows = $db->exec("UPDATE siswa 
SET 
kode='$_POST[kode]',
 nama='$_POST[nama]',
 alamat='$_POST[alamat]',
 email='$_POST[email]',
 hp='$_POST[hp]',
 ortu='$_POST[ortu]',
 ortu_alamat='$_POST[ortu_alamat]',
 ortu_hp='$_POST[ortu_hp]',
 lahir='$_POST[lahir]',
 lahir_tgl='$_POST[lahir_tgl]', 
 ortu_user='$_POST[ortu_user]',
 ortu_pass='$_POST[ortu_pass]',
 riwayat_sekolah='$_POST[riwayat_sekolah]', 
 foto      = '$nama_file_unik'  
 
where id_siswa='$_POST[id_siswa]'");

$affected_rows = $db->exec("UPDATE user 
SET 

 username='$_POST[ortu_user]',
 password='$_POST[ortu_pass]'
        
where id_siswa='$_POST[id_siswa]'");

 header("location:../../media.php?module=siswa&act=detail&id=".$_POST['id_siswa']."");
   }
  }
  
  
  
}






if ($act=='pilih1'){




$stmt = $db->query("SELECT * FROM siswa_kelas WHERE id_siswa='$_GET[id]' and id_mapel_jadwal='$_GET[id2]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu == 0){

$result = $db->exec("INSERT INTO siswa_kelas(id_siswa, id_mapel_jadwal) 

VALUES('$_GET[id]', '$_GET[id2]')");
	
	



	
	  header("location:../../media.php?module=siswa&act=detail1&id=$_GET[id]");
	}
else
{




    header("location:../../media.php?module=siswa&act=detail1&id=$_GET[id]");
}
  
}





if ($act=='hapus1'){

$affected_rows = $db->exec("DELETE from siswa_kelas where id_siswa='$_GET[id]' and id_mapel_jadwal='$_GET[id2]'");




  
 header("location:../../media.php?module=siswa&act=detail1&id=$_GET[id]");
}




if ($act=='detail1nilaitambahsimpan'){




$stmt = $db->query("SELECT * FROM siswa_kelas_nilai WHERE id_siswa_kelas='$_GET[id3]' and id_mapel='$_POST[id_mapel]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);
$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu == 0){

$result = $db->exec("INSERT INTO siswa_kelas_nilai(id_siswa_kelas, id_mapel, id_nilai) 

VALUES('$_GET[id3]', '$_POST[id_mapel]', '$_POST[id_nilai]')");
	
	



	
	  header("location:../../media.php?module=siswa&act=detail1nilai&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]");
	}
else
{




    header("location:../../media.php?module=siswa&act=detail1nilai&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]");
}
  
}



if ($act=='detail1nilaiubahsimpan'){


	$affected_rows = $db->exec("UPDATE siswa_kelas_nilai 
SET 
id_nilai='$_POST[id_nilai]'
 
where id_siswa_kelas_nilai='$_GET[id4]'");


	  header("location:../../media.php?module=siswa&act=detail1nilai&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]");
	
  
}

if ($act=='detail1nilaihapus'){


$affected_rows = $db->exec("DELETE from siswa_kelas_nilai where id_siswa_kelas_nilai='$_GET[id4]'");


	  header("location:../../media.php?module=siswa&act=detail1nilai&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]");
	
  
}


if ($act=='detail3tambahsimpan'){




$stmt = $db->query("SELECT * FROM siswa_kelas_hadir WHERE id_siswa='$_GET[id]' and tahun='$_POST[tahun]' and bulan='$_POST[bulan]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $db->query("
SELECT b.id_kelas as id_kelas
FROM siswa_kelas a
inner join mapel_jadwal b
on a.id_mapel_jadwal=b.id_mapel_jadwal

WHERE a.id_siswa='$_GET[id]'
order by a.id_siswa_kelas desc");
$r2 = $stmt2->fetch(PDO::FETCH_ASSOC);


$ketemu = $stmt->rowCount();


// Apabila username dan password ditemukan
if ($ketemu == 0){

$efektif=$_POST['hadir']+$_POST['ijin']+$_POST['sakit']+$_POST['alpha'];
$presentase=$_POST['hadir']/$efektif*100;

$result = $db->exec("INSERT INTO siswa_kelas_hadir(id_siswa, tahun, bulan, hadir, ijin, sakit, alpha, presentase,id_kelas) 

VALUES('$_GET[id]', '$_POST[tahun]', '$_POST[bulan]', '$_POST[hadir]', '$_POST[ijin]', '$_POST[sakit]', '$_POST[alpha]' , '$presentase', '$r2[id_kelas]')");
	
	



	
	  header("location:../../media.php?module=siswa&act=detail3&id=$_GET[id]");
	}
else
{




    header("location:../../media.php?module=siswa&act=detail3&id=$_GET[id]");
}
  
}



if ($act=='detail3ubahsimpan'){

$efektif=$_POST['hadir']+$_POST['ijin']+$_POST['sakit']+$_POST['alpha'];
$presentase=$_POST['hadir']/$efektif*100;


	$affected_rows = $db->exec("UPDATE siswa_kelas_hadir 
SET 
hadir='$_POST[hadir]',
ijin='$_POST[ijin]',
sakit='$_POST[sakit]',
alpha='$_POST[alpha]',
presentase='$presentase'
 
where id_siswa_kelas_hadir='$_GET[id4]'");


	  header("location:../../media.php?module=siswa&act=detail3&id=$_GET[id]");
	
  
}


if ($act=='detail3hapus'){


$affected_rows = $db->exec("DELETE from siswa_kelas_hadir where id_siswa_kelas_hadir='$_GET[id4]'");


 header("location:../../media.php?module=siswa&act=detail3&id=$_GET[id]");
	
  
}



if ($act=='detail4tambahsimpan'){


$result = $db->exec("INSERT INTO siswa_kelas_ekstra(id_siswa, id_ekstrakulikuler, catatan) 

VALUES('$_GET[id]', '$_POST[id_ekstrakulikuler]', '$_POST[catatan]')");

	
	  header("location:../../media.php?module=siswa&act=detail4&id=$_GET[id]");
}



if ($act=='detail4ubahsimpan'){


	$affected_rows = $db->exec("UPDATE siswa_kelas_ekstra 
SET 
catatan='$_POST[catatan]'
 
where id_siswa_kelas_ekstra='$_GET[id4]'");


	  header("location:../../media.php?module=siswa&act=detail4&id=$_GET[id]");
	
  
}


if ($act=='detail4hapus'){


$affected_rows = $db->exec("DELETE from siswa_kelas_ekstra where id_siswa_kelas_ekstra='$_GET[id4]'");


 header("location:../../media.php?module=siswa&act=detail4&id=$_GET[id]");
	
  
}



if ($act=='detail5tambahsimpan'){


$result = $db->exec("INSERT INTO siswa_kelas_catatan(id_siswa, catatan) 

VALUES('$_GET[id]', '$_POST[catatan]')");

	
	  header("location:../../media.php?module=siswa&act=detail5&id=$_GET[id]");
}



if ($act=='detail5ubahsimpan'){


	$affected_rows = $db->exec("UPDATE siswa_kelas_catatan 
SET 
catatan='$_POST[catatan]'
 
where id_siswa_kelas_catatan='$_GET[id4]'");


	  header("location:../../media.php?module=siswa&act=detail5&id=$_GET[id]");
	
  
}


if ($act=='detail5hapus'){


$affected_rows = $db->exec("DELETE from siswa_kelas_catatan where id_siswa_kelas_catatan='$_GET[id4]'");


 header("location:../../media.php?module=siswa&act=detail5&id=$_GET[id]");
	
  
}





?>
