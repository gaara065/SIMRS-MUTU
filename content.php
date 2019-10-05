<?php

if ($_GET['module']=='login' or $_GET['module']==''){

   include "modul/mod_login/login.php";
  
}


else if ($_GET['module']=='home'){

 include "modul/mod_home/home.php";
 
 
}

 elseif ($_GET['module']=='pasien'){

   include "modul/mod_pasien/pasien.php";
  
}
 elseif ($_GET['module']=='rm'){

   include "modul/mod_rm/rm.php";
  
}

elseif ($_GET['module']=='ugd'){

   include "modul/mod_ugd/ugd.php";
  
}

elseif ($_GET['module']=='rajal'){

   include "modul/mod_rajal/rajal.php";
  
}

elseif ($_GET['module']=='ranap'){

   include "modul/mod_ranap/ranap.php";
  
}



 elseif ($_GET['module']=='peri'){

   include "modul/mod_peri/peri.php";
  
}

 elseif ($_GET['module']=='lab'){

   include "modul/mod_lab/lab.php";
  
}


 elseif ($_GET['module']=='gizi'){

   include "modul/mod_gizi/gizi.php";
  
}


 elseif ($_GET['module']=='sani'){

   include "modul/mod_jurusan/jurusan.php";
  
}

 elseif ($_GET['module']=='nilai'){

   include "modul/mod_nilai/nilai.php";
  
}

 elseif ($_GET['module']=='tahun_akademik'){

   include "modul/mod_tahun_akademik/tahun_akademik.php";
  
}


 elseif ($_GET['module']=='kurikulum'){

   include "modul/mod_kurikulum/kurikulum.php";
  
}



 elseif ($_GET['module']=='mapel'){

   include "modul/mod_mapel/mapel.php";
  
}


 elseif ($_GET['module']=='mapel_jadwal'){

   include "modul/mod_mapel_jadwal/mapel_jadwal.php";
  
}

 elseif ($_GET['module']=='mapel_jadwal_detail'){

   include "modul/mod_mapel_jadwal_detail/mapel_jadwal_detail.php";
  
}

 elseif ($_GET['module']=='siswa_kelas'){

   include "modul/mod_siswa_kelas/siswa_kelas.php";
  
}


 elseif ($_GET['module']=='siswa'){

   include "modul/mod_siswa/siswa.php";
  
}

elseif ($_GET['module']=='siswa-filter'){

   include "modul/mod_siswa-filter/siswa-filter.php";
  
}



 elseif ($_GET['module']=='ortu-siswa'){

   include "modul/mod_ortu-siswa/ortu-siswa.php";
  
}