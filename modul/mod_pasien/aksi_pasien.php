<?php

include "../../koneksi.php";



$act = isset($_GET['act']) ? $_GET['act'] : '';

$module = isset($_GET['module']) ? $_GET['module'] : '';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';
$_POST['tgl'] = isset($_POST['tgl']) ? $_POST['tgl'] : '';
$_POST['nama'] = isset($_POST['nama']) ? $_POST['nama'] : '';
$_POST['id'] = isset($_POST['id']) ? $_POST['id'] : '';





if ($act=='hapus'){

$affected_rows = $db->exec("DELETE from pasien where id_pasien='$_GET[id]'");

  header('location:../../media.php?module=pasien');
}




if ($act=='tambah'){




$result = $db->exec("INSERT INTO pasien( no_rm, nama, tanggal,alamat,umur ,diagnosa,
dpjp,dr_ugd,pr_ugd,pr_poli,pr_ruangan,bidan_vk) 

VALUES('$_POST[no_rm]', '$_POST[nama]', '$_POST[tanggal]', '$_POST[alamat]', '$_POST[umur]'
, '$_POST[diagnosa]', '$_POST[dpjp]', '$_POST[dr_ugd]', '$_POST[pr_ugd]', '$_POST[pr_poli]'
, '$_POST[pr_ruangan]', '$_POST[bidan_vk]')");

  
  header('location:../../media.php?module=pasien');
}








if ($act=='ubah'){



$affected_rows = $db->exec("UPDATE pasien 
set
no_rm='$_POST[no_rm]', 
nama='$_POST[nama]',
 tanggal='$_POST[tanggal]',
 alamat='$_POST[alamat]',
 umur='$_POST[umur]' ,
 diagnosa='$_POST[diagnosa]',
dpjp='$_POST[dpjp]',
dr_ugd='$_POST[dr_ugd]',
pr_ugd='$_POST[pr_ugd]',
pr_poli='$_POST[pr_poli]',
pr_ruangan='$_POST[pr_ruangan]',
bidan_vk='$_POST[bidan_vk]'

where id_pasien='$_POST[id_pasien]'");


  
  header('location:../../media.php?module=pasien&act=datapasien&id='.$_POST['id_pasien'].'');
}



if ($act=='rm'){



  $affected_rows = $db->exec("UPDATE pasien 
  set
  rm_mulai='$_POST[rm_mulai]', 
  rm_selesai='$_POST[rm_selesai]',
  rm_penyiapan='$_POST[rm_penyiapan]',
  rm_form='$_POST[rm_form]',
  rm_Jamkomplain='$_POST[rm_Jamkomplain]',
  rm_ket='$_POST[rm_ket]',
  rm_responkomplain='$_POST[rm_responkomplain]'
  
  where id_pasien='$_POST[id_pasien]'");
  
  
    
    header('location:../../media.php?module=pasien&act=rm&id='.$_POST['id_pasien'].'');
  }



  if ($act=='ugd'){



    $affected_rows = $db->exec("UPDATE pasien 
    set
    ugd_pakaigelang='$_POST[ugd_pakaigelang]', 
    ugd_warnagelang='$_POST[ugd_warnagelang]',
    ugd_infogelang='$_POST[ugd_infogelang]',
    ugd_verbaliden='$_POST[ugd_verbaliden]',
    ugd_verbalread='$_POST[ugd_verbalread]',
    ugd_emergency='$_POST[ugd_emergency]',
    ugd_jamkomplain='$_POST[ugd_jamkomplain]',
    ugd_ket='$_POST[ugd_ket]',
    ugd_respon='$_POST[ugd_respon]'
    
    where id_pasien='$_POST[id_pasien]'");
    
    
      
      header('location:../../media.php?module=pasien&act=ugd&id='.$_POST['id_pasien'].'');
    }


    if ($act=='rajal'){



      $affected_rows = $db->exec("UPDATE pasien 
      set
      rajal_pakaigelang='$_POST[rajal_pakaigelang]', 
      rajal_warnagelang='$_POST[rajal_warnagelang]',
      rajal_infogelang='$_POST[rajal_infogelang]',
      rajal_jambuka='$_POST[rajal_jambuka]',
      rajal_masuk='$_POST[rajal_masuk]',
      rajal_selesai='$_POST[rajal_selesai]',
      rajal_waktutunggu='$_POST[rajal_waktutunggu]',
      rajal_jamkomplain='$_POST[rajal_jamkomplain]',
      rajal_ket='$_POST[rajal_ket]',
      rajal_responkomplain='$_POST[rajal_responkomplain]'
      
      where id_pasien='$_POST[id_pasien]'");
      
      
        
        header('location:../../media.php?module=pasien&act=rajal&id='.$_POST['id_pasien'].'');
      }

      if ($act=='vk'){



        $affected_rows = $db->exec("UPDATE pasien 
        set
        vk_eklampsi='$_POST[vk_eklampsi]', 
        vk_mgso4='$_POST[vk_mgso4]',
        vk_matipersalinan='$_POST[vk_matipersalinan]',
        vk_primi='$_POST[vk_primi]',
        vk_verbaliden='$_POST[vk_verbaliden]',
        vk_verbalread='$_POST[vk_verbalread]',
        vk_imd='$_POST[vk_imd]',
        vk_jamkomplain='$_POST[vk_jamkomplain]',
        vk_ket='$_POST[vk_ket]',
        vk_respon='$_POST[vk_respon]'
        
        where id_pasien='$_POST[id_pasien]'");
        
        
          
          header('location:../../media.php?module=pasien&act=vk&id='.$_POST['id_pasien'].'');
        }


        if ($act=='peri'){



          $affected_rows = $db->exec("UPDATE pasien 
          set
          peri_bblahir='$_POST[peri_bblahir]', 
          peri_bbpulang='$_POST[peri_bbpulang]',
          peri_kondisi='$_POST[peri_kondisi]',
          peri_verbaliden='$_POST[peri_verbaliden]',
          peri_visitspe='$_POST[peri_visitspe]',
          peri_verbalread='$_POST[peri_verbalread]',
          peri_jamkomplain='$_POST[peri_jamkomplain]',
          peri_ket='$_POST[peri_ket]',
          peri_respon='$_POST[peri_respon]'
          
          where id_pasien='$_POST[id_pasien]'");
          
          
            
            header('location:../../media.php?module=pasien&act=peri&id='.$_POST['id_pasien'].'');
          }



          if ($act=='lab'){



            $affected_rows = $db->exec("UPDATE pasien 
            set
            lab_jenis='$_POST[lab_jenis]', 
            lab_waktu='$_POST[lab_waktu]',
            lab_salah='$_POST[lab_salah]',
            lab_cito='$_POST[lab_cito]',
            lab_rutin='$_POST[lab_rutin]',
            lab_jamkomplain='$_POST[lab_jamkomplain]',
            lab_ket='$_POST[lab_ket]',
            lab_respon='$_POST[lab_respon]'
            
            where id_pasien='$_POST[id_pasien]'");
            
            
              
              header('location:../../media.php?module=pasien&act=lab&id='.$_POST['id_pasien'].'');
            }


            


?>
