<?php


$aksi="modul/mod_siswa/aksi_siswa.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';


/* $stmtsiswa = $db->query("
SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.alias as ff, e.nama as gg,
		g.id_siswa as id_siswa, g.kode as h1, g.nama as h2, g.alamat as h3, g.email as h4, g.hp as h5, g.ortu as h6, g.ortu_alamat as h7, g.ortu_hp as h8, 
		g.lahir as h9, g.lahir_tgl as h10, g.riwayat_sekolah as h11
      FROM siswa g
		inner join siswa_kelas h 
		on g.id_siswa=h.id_siswa
			inner join  mapel_jadwal a
			on h.id_mapel_jadwal=a.id_mapel_jadwal
		inner join tahun_akademik b
		on a.id_tahun_akademik=b.id_tahun_akademik
			inner join kelas c
			on a.id_kelas=c.id_kelas
				inner join kurikulum d
				on a.id_kurikulum=d.id_kurikulum
					inner join guru e
					on a.id_guru=e.id_guru
						inner join jurusan f
						on a.id_jurusan=f.id_jurusan
							
		
	where g.id_siswa='$_GET[id]'
		order by h.id_siswa_kelas desc
");
$rsiswa = $stmtsiswa->fetch(PDO::FETCH_ASSOC);
*/
//cek urutan
//SELECT * FROM siswa g inner join siswa_kelas h on g.id_siswa=h.id_siswa inner join mapel_jadwal a on h.id_mapel_jadwal=a.id_mapel_jadwal inner join tahun_akademik b on a.id_tahun_akademik=b.id_tahun_akademik inner join kelas c on a.id_kelas=c.id_kelas inner join kurikulum d on a.id_kurikulum=d.id_kurikulum inner join guru e on a.id_guru=e.id_guru inner join jurusan f on a.id_jurusan=f.id_jurusan where g.id_siswa='3' 


switch($_GET['act']){
  // Tampil Banner
  default:

 



?>

	

<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" data siswa ");
?>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manajemen Aplikasi</a></li>
    
      </ol>
    </section>
	 
    <section class="content">
	    
 
   
      <div class="row">
	  
        <div class="col-xs-12">
   
		  
		  
          <!-- /.box -->

          <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  id="example6" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  
			  <a href='media.php?module=siswa&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="20%">No Registrasi</th>  

<th>Nama</th> 
<th>Password</th> 
<th>Jenis Tes</th>  	   
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT a.id_user,a.username,a.nama,a.password, b.nama_ujian
      FROM tbl_user a
        inner join tbl_pengaturan_ujian b
        on a.ujian=b.id
		 order by a.id_user desc
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                               
<td>$data[username]</td>
<td>$data[nama]</td>
<td>$data[password]</td>
<td>$data[nama_ujian]</td>  

<td>  
													<a href='media.php?module=siswa&act=detail&id=$data[id_user]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa&act=hapus&id=$data[id_user]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php echo "
													</td>
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
    <?php
  
  
  
  
  break;
	

	
		
	
case "tambah":
 
 ?>


<div class="content-wrapper">
           <section class="content-header">
      <h1>
     <?php
echo ucwords(" tambah data siswa ");
?>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manajemen Aplikasi</a></li>
    
      </ol>
    </section>
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
 		       <div class="pull-right box-tools">
               <a href='media.php?module=siswa'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=tambah"; ?>' enctype='multipart/form-data'>
	
	<div class="col-md-6">

				<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value=''>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>
				
				
				      <div class="form-group">
                  <label>Tempat Lahir</label>
                 
                  <input type="text" class="form-control" name="lahir" value=""> 
              
                </div>
				
				
				  <div class="form-group">
                  <label>Tanggal Lahir</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="lahir_tgl" value="">
                </div>
</div>
				<div class="form-group">
                  <label>Alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value=''>
                </div>
				
				<div class="form-group">
                  <label>Email</label>
                 <input type="text" placeholder="" class="form-control" name="email" value=''>
                </div>
				
				<div class="form-group">
                  <label>Hp</label>
                 <input type="text" placeholder="" class="form-control" name="hp" value=''>
                </div>
				
				 </div>  
				<div class="col-md-6">
				
				<div class="form-group">
                  <label>Nama Ortu/Wali</label>
                 <input type="text" placeholder="" class="form-control" name="ortu" value=''>
                </div>
				
				<div class="form-group">
                  <label>Alamat Ortu/Wali</label>
                 <input type="text" placeholder="" class="form-control" name="ortu_alamat" value=''>
                </div>
				
				<div class="form-group">
                  <label>Hp Ortu/Wali</label>
                 <input type="text" placeholder="" class="form-control" name="ortu_hp" value=''>
                </div>
				
				
				
		
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

          </div>                                        
												
													
												
											
							
 
 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
          <!-- /.box -->
        </div>
		
		
		
		
		
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
    <?php
 
  



  break;

 
 case "detail":
 



$stmtsiswa = $db->query("
SELECT	g.id_siswa as id_siswa, g.kode as h1, g.nama as h2, g.alamat as h3, g.email as h4, g.hp as h5, g.ortu as h6, g.ortu_alamat as h7, g.ortu_hp as h8, 
		g.lahir as h9, g.lahir_tgl as h10, g.riwayat_sekolah as h11,g.ortu_user as h12,g.ortu_pass as h13, g.foto as h14
      FROM siswa g
		
							
		
	where g.id_siswa='$_GET[id]'
");
$rsiswa = $stmtsiswa->fetch(PDO::FETCH_ASSOC);



 

$stmtsiswa2 = $db->query("
SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.alias as ff, e.nama as gg,
		g.id_siswa as id_siswa, g.kode as h1, g.nama as h2, g.alamat as h3, g.email as h4, g.hp as h5, g.ortu as h6, g.ortu_alamat as h7, g.ortu_hp as h8, 
		g.lahir as h9, g.lahir_tgl as h10, g.riwayat_sekolah as h11, g.ortu_user as h12, g.ortu_pass as h13, g.foto as h14
      FROM siswa g
		inner join siswa_kelas h 
		on g.id_siswa=h.id_siswa
			inner join  mapel_jadwal a
			on h.id_mapel_jadwal=a.id_mapel_jadwal
		inner join tahun_akademik b
		on a.id_tahun_akademik=b.id_tahun_akademik
			inner join kelas c
			on a.id_kelas=c.id_kelas
				inner join kurikulum d
				on a.id_kurikulum=d.id_kurikulum
					inner join guru e
					on a.id_guru=e.id_guru
						inner join jurusan f
						on a.id_jurusan=f.id_jurusan
							
		
	where g.id_siswa='$_GET[id]'
		order by h.id_siswa_kelas desc
");
$rsiswa2 = $stmtsiswa2->fetch(PDO::FETCH_ASSOC);


 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
           <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-info pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 			<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
	 <!--	 <a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>-->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=ubah"; ?>' enctype='multipart/form-data'>
			  <input type="hidden" class="form-control" name="id_siswa" value="<?php  echo "$rsiswa[id_siswa]"; ?>"> 
              <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../images/gallery/<?php echo "$rsiswa[h14]"; ?>" alt="">

              <h3 class="profile-username text-center"><?php  echo $rsiswa2['h2']; ?></h3>

              

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Kelas</b> <a class="pull-right"><?php  echo "$rsiswa2[cc]  $rsiswa2[dd]"; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Semester</b> <a class="pull-right"><?php  echo "$rsiswa2[bb]"; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Jurusan</b> <a class="pull-right"><?php  echo "$rsiswa2[ee]"; ?></a>
                </li>
				 <li class="list-group-item">
                  <b>Tahun Akademik</b> <a class="pull-right"><?php  echo "$rsiswa2[aa]"; ?></a>
                </li>
              </ul>

      
            </div>
            <!-- /.box-body -->
          </div>
		  
		
		  
		   <div class="box box-primary">
     <div class="box-header with-border">
              <h3 class="box-title">Riwayat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Riwayat Sekolah</strong>

              <p class="text-muted">
			      <div class="form-group">
              
                 
                  <input type="text" class="form-control" name="riwayat_sekolah" value="<?php  echo "$rsiswa[h11]"; ?>"> 
          
                </div>
              
              </p>
			    <p class="text-muted">
              
              </p>

              <hr>
            <!-- /.box-body -->
          </div>
		    </div>
		  
		  
              </div>
			  
			  
			  <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body col-md-6">
			  
			  
      <div class="form-group">
                  <label>Kode</label>
                 
                  <input type="text" class="form-control" name="kode"  value="<?php  echo "$rsiswa[h1]"; ?>"> 
              
                </div>
				
				
				      <div class="form-group">
                  <label>Nama</label>
                 
                  <input type="text" class="form-control" name="nama"  value="<?php  echo "$rsiswa[h2]"; ?>"> 
              
                </div>
				
				      <div class="form-group">
                  <label>Tempat Lahir</label>
                 
                  <input type="text" class="form-control" name="lahir"  value="<?php  echo "$rsiswa[h9]"; ?>"> 
              
                </div>
				
				
				  <div class="form-group">
                  <label>Tanggal Lahir</label>
               <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="lahir_tgl" value="<?php echo "$rsiswa[h10]"; ?>">
                </div>
</div>
				
				
				    <div class="form-group">
                  <label>Alamat</label>
                 
                  <input type="text" class="form-control" name="alamat"  value="<?php  echo "$rsiswa[h3]"; ?>"> 
              
                </div>
				
				    <div class="form-group">
                  <label>Email</label>
                 
                  <input type="text" class="form-control" name="email"  value="<?php  echo "$rsiswa[h4]"; ?>"> 
              
                </div>
				
				
				    <div class="form-group">
                  <label>Hp</label>
                 
                  <input type="text" class="form-control" name="hp"  value="<?php  echo "$rsiswa[h5]"; ?>"> 
              
                </div>
			<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<div class="form-group">
                  <label>Foto</label>
                      <input type='file' name='fupload' size='40'> 
					  
                </div>

			  <?php
			}
			?>
			
			   </div>
			 <div class="box-body col-md-6">  
			  
      <div class="form-group">
                  <label>Nama Ortu/Wali</label>
                 
                  <input type="text" class="form-control" name="ortu"  value="<?php  echo "$rsiswa[h6]"; ?>">
              
                </div>
				
				
				      <div class="form-group">
                  <label>Alamat</label>
                 
                  <input type="text" class="form-control" name="ortu_alamat"  value="<?php  echo "$rsiswa[h7]"; ?>"> 
              
                </div>
				
				
				    <div class="form-group">
                  <label>Hp</label>
                 
                  <input type="text" class="form-control" name="ortu_hp"  value="<?php  echo "$rsiswa[h8]"; ?>"> 
              
                </div>
				
				
				   <div class="form-group">
                  <label>User Ortu/Wali</label>
                 
                  <input type="text" class="form-control" name="ortu_user"  value="<?php  echo "$rsiswa[h12]"; ?>"> 
              
                </div>
				
				   <div class="form-group">
                  <label>Password Ortu/Wali</label>
                 
                  <input type="text" class="form-control" name="ortu_pass" value="<?php  echo "$rsiswa[h13]"; ?>"> 
              
                </div>
				
		
				
					<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				
				<button type="submit" class="btn btn-primary">Simpan</button>
				  <?php
			}
			?>
              </div>
			  
			  
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;


 case "detail1":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-info pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  id="" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
			  <a href='media.php?module=siswa&act=detail1tambah&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			  
			  	  <?php
			}
			?>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th>Thn</th>   	  
<th>Smt</th> 
<th>Kelas</th> 
<th>Jurusan</th>
<th>Kurikulum</th>
<th>Wali Kelas</th>
<th>Jml Siswa</th>
<th>Nilai</th>
    
	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
<th width="10%">Aksi</th>

	  <?php
			}
			?>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("
SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.alias as ff, e.nama as gg,
		g.id_siswa as id_siswa, g.kode as h1, g.nama as h2, g.alamat as h3, g.email as h4, g.hp as h5, g.ortu as h6, g.ortu_alamat as h7, g.ortu_hp as h8, 
		g.lahir as h9, g.lahir_tgl as h10, g.riwayat_sekolah as h11, g.ortu_user as h12, g.ortu_pass as h13, g.foto as h14,
		h.id_siswa_kelas as id_siswa_kelas
      FROM siswa g
		inner join siswa_kelas h 
		on g.id_siswa=h.id_siswa
			inner join  mapel_jadwal a
			on h.id_mapel_jadwal=a.id_mapel_jadwal
		inner join tahun_akademik b
		on a.id_tahun_akademik=b.id_tahun_akademik
			inner join kelas c
			on a.id_kelas=c.id_kelas
				inner join kurikulum d
				on a.id_kurikulum=d.id_kurikulum
					inner join guru e
					on a.id_guru=e.id_guru
						inner join jurusan f
						on a.id_jurusan=f.id_jurusan
							
		
	where g.id_siswa='$_GET[id]'
		
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   

$stmtb = $db->query("SELECT count(*) as jumlah, a.id_siswa_kelas as id_siswa_kelas
      FROM siswa_kelas a
		inner join siswa b
		on a.id_siswa=b.id_siswa
		 inner join mapel_jadwal c
		 on a.id_mapel_jadwal=c.id_mapel_jadwal
		 
			where a.id_mapel_jadwal='$data[id_mapel_jadwal]'
		
	
	 ");
$datab = $stmtb->fetch(PDO::FETCH_ASSOC);


	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[aa]</td>
<td>$data[bb]</td>
<td>$data[cc] - $data[dd]</td>

<td>$data[ee]</td>
<td>$data[ff]</td>
<td>$data[gg]</td>
<td>$datab[jumlah]</td>


<td><a href='media.php?module=siswa&act=detail1nilai&id=$_GET[id]&id2=$data[id_mapel_jadwal]&id3=$datab[id_siswa_kelas]'>
													
													<button type='button' class='btn btn-warning btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Nilai</button>
													</a></td>



<td>  
							
											       "; ?>
												   	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
													
													<a href="<?php echo "$aksi?module=siswa&act=hapus1&id=$_GET[id]&id2=$data[id_mapel_jadwal]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      	  <?php
			}
			?>
													<?php echo "
													</td>
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  case "detail1tambah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-info pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  id="" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th>Thn</th>   	  
<th>Smt</th> 
<th>Kelas</th> 
<th>Jurusan</th>
<th>Kurikulum</th>
<th>Wali Kelas</th>
<th>Jml Siswa</th>
    
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("
SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.alias as ff, e.nama as gg
      FROM mapel_jadwal a
		inner join tahun_akademik b
		on a.id_tahun_akademik=b.id_tahun_akademik
			inner join kelas c
			on a.id_kelas=c.id_kelas
				inner join kurikulum d
				on a.id_kurikulum=d.id_kurikulum
					inner join guru e
					on a.id_guru=e.id_guru
						inner join jurusan f
						on a.id_jurusan=f.id_jurusan
							

		
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   

$stmtb = $db->query("SELECT count(*) as jumlah
      FROM siswa_kelas a
		inner join siswa b
		on a.id_siswa=b.id_siswa
		 inner join mapel_jadwal c
		 on a.id_mapel_jadwal=c.id_mapel_jadwal
		 
			where a.id_mapel_jadwal='$data[id_mapel_jadwal]'
		
	
	 ");
$datab = $stmtb->fetch(PDO::FETCH_ASSOC);


	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[aa]</td>
<td>$data[bb]</td>
<td>$data[cc] - $data[dd]</td>

<td>$data[ee]</td>
<td>$data[ff]</td>
<td>$data[gg]</td>
<td>$datab[jumlah]</td>





<td>  
							
											       "; ?>
													
<a href="<?php echo "$aksi?module=siswa&act=pilih1&id=$_GET[id]&id2=$data[id_mapel_jadwal]"; ?>" onclick="return confirm('Data Terpilih?')" ><button type='button' class='btn btn-warning style2'><font color='white'>Pilih </font></button></a>
                                     
													<?php echo "
													</td>
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail1nilai":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-info pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  id="" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  <?php
			if ( $_SESSION['status'] == '1')
			{
				?>
			 <a href='media.php?module=siswa&act=detail1nilaitambah<?php echo "&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]"; ?>'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a>
			 	  <?php
			}
			?>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th>Mapel</th>   	  
<th>Nilai</th> 
<th>Bobot</th> 
<th>Lulus</th>

    <?php
			if ( $_SESSION['status'] == '1')
			{
				?>
<th width="10%">Aksi</th>
	  <?php
			}
			?>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("
SELECT *
	from siswa_kelas_nilai a
	inner join siswa_kelas b
	on a.id_siswa_kelas=b.id_siswa_kelas
		inner join mapel c 
		on a.id_mapel=c.id_mapel
			inner join nilai d
			on a.id_nilai=d.id_nilai
				
				where a.id_siswa_kelas='$_GET[id3]'

		
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   



	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[nama]</td>
<td>$data[nilai]</td>
<td>$data[bobot]</td>
<td>$data[lulus]</td>








<td>  "; 
if ( $_SESSION['status'] == '1')
			{
				echo "
													<a href='media.php?module=siswa&act=detail1nilaiubah&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]&id4=$data[id_siswa_kelas_nilai]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; 
			 ?>
												
			
													<a href="<?php echo "$aksi?module=siswa&act=detail1nilaihapus&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]&id4=$data[id_siswa_kelas_nilai]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      	  <?php
			}
			?>
													<?php echo "
													</td>												
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
    case "detail1nilaitambah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-info pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail1nilaitambahsimpan&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]"; ?>' enctype='multipart/form-data'>

		
	


			
<div class="form-group">
                  <label>Pilihan Mapel</label>
                 <select class="form-control" name="id_mapel">	  
			  <?php
$stmt = $db->query('SELECT * FROM mapel');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_mapel]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
				
				<div class="form-group">
                  <label>Pilihan Nilai</label>
                 <select class="form-control" name="id_nilai">	  
			  <?php
$stmt = $db->query('SELECT * FROM nilai');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_nilai]'>$row[nilai]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail1nilaiubah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-info pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail1nilaiubahsimpan&id=$_GET[id]&id2=$_GET[id2]&id3=$_GET[id3]&id4=$_GET[id4]"; ?>' enctype='multipart/form-data'>

		
	


<div class="form-group">
                  <label>Pilihan Mapel</label>
                 <select class="form-control" name="id_mapel" readonly>	  
			  <?php
$stmt = $db->query("SELECT * FROM 
					siswa_kelas_nilai a
					inner join mapel b
					on a.id_mapel=b.id_mapel 
					where a.id_siswa_kelas_nilai='$_GET[id4]'
 ");
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_mapel]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
				
				
				
				
				<div class="form-group">
                  <label>Pilihan Nilai</label>
                 <select class="form-control" name="id_nilai">	  
			  <?php
$stmt = $db->query('SELECT * FROM nilai');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_nilai]'>$row[nilai]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
  case "detail2":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  id="" class="table table-bordered table-striped">
			   
<?php		
$stmtc = $db->query("SELECT * FROM siswa_kelas WHERE id_siswa='$_GET[id]' order by id_siswa_kelas desc");
$rc = $stmtc->fetch(PDO::FETCH_ASSOC);

	   
$stmt = $db->query("SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.alias as ff, e.nama as gg
      FROM mapel_jadwal a
		inner join tahun_akademik b
		on a.id_tahun_akademik=b.id_tahun_akademik
			inner join kelas c
			on a.id_kelas=c.id_kelas
				inner join kurikulum d
				on a.id_kurikulum=d.id_kurikulum
					inner join guru e
					on a.id_guru=e.id_guru
						inner join jurusan f
						on a.id_jurusan=f.id_jurusan
		
	where a.id_mapel_jadwal='$rc[id_mapel_jadwal]'
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "

                                                 
Tahun Akademik $data[aa] - semester $data[bb]</br>
Jurusan $data[ee] - $data[cc]  $data[dd]</br>



";
}


?>
			   
			   
			     <div class="box-header">
     		    
			  
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Senin  

</th> 
<th>Selasa

</th>
<th>Rabu

</th>
<th>kamis

</th>
<th>Jumat

</th>
<th>Sabtu

</th>     
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	


	
	   




	   echo "
 <tr class='gradeX' > <td>";
                                                 
$stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='senin'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
 echo "</td><td> "; 
  
  $stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='selasa'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
  echo "</td><td> ";  
  
   $stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='rabu'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
  echo "</td><td> ";
  
   $stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='kamis'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
  echo "</td><td> ";
  
  
   $stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='jumat'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
  echo "</td><td> ";
  
   $stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$rc[id_mapel_jadwal]' and a.hari='sabtu'
		order by a.jam asc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

echo "	
 $data[bb] <br/> $data[aa]  <hr/>

";
  }
  echo "</td><td> ";
  
  
  echo "



                                                   
                                                </tr>
	 ";
	   $no++;
 
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail3":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			 <?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				
			<a href='media.php?module=siswa&act=detail3tambah&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			  <?php
			}
			?>
			
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th>Tahun</th>   	  
<th>Bulan</th>   
<th>Hadir</th>
<th>Sakit</th>
<th>Izin</th> 
<th>Alpha</th>    
<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
<th width="10%">Aksi</th>
  <?php
			}
			?>    
                </tr>
				
				      </thead>
                <tbody>
	<?php			
				
$stmt = $db->query("SELECT *
from siswa_kelas_hadir a

		where a.id_siswa='$_GET[id]'
		order by tahun desc, bulan asc
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   


$bulan = bulan($data['bulan']);


	   echo "
 <tr class='gradeX' >
    <td>$data[tahun]</td>  
 <td>$bulan</td>  	
  <td>$data[hadir]</td> 
<td>$data[sakit]</td> 
<td>$data[ijin]</td>  
<td>$data[alpha]</td>   

<td>  ";

	if ( $_SESSION['status'] == '1')
			{
				echo "
													<a href='media.php?module=siswa&act=detail3ubah&id=$_GET[id]&id4=$data[id_siswa_kelas_hadir]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa&act=detail3hapus&id=$_GET[id]&id4=$data[id_siswa_kelas_hadir]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php
			}
			echo "
													</td>	
													
													</tr>	";
													
}
?>


		

				
    
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
   


  break;
  
   case "detail3tambah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail3tambahsimpan&id=$_GET[id]"; ?>' enctype='multipart/form-data'>

		
	


			
<div class="form-group">
                  <label>Pilihan Tahun</label>
                 <select class="form-control" name="tahun">	  
			  <?php

   
	   echo "
	     <option value='2018'>2018</option>
		 <option value='2019'>2019</option>
		  <option value='2020'>2020</option>
	   
	   ";
   
														?>
														
														        </select>
                </div>	
				
				
				<div class="form-group">
                  <label>Pilihan Bulan</label>
                 <select class="form-control" name="bulan">	  
			  <?php
   echo "
	     <option value='1'>Januari</option>
		 <option value='2'>Februari</option>
		  <option value='3'>Maret</option>
		   <option value='4'>April</option>
		    <option value='5'>Mei</option>
			 <option value='6'>Juni</option>
			  <option value='7'>Juli</option>
			   <option value='8'>Agustus</option>
			    <option value='9'>September</option>
				 <option value='10'>Oktober</option>
				  <option value='11'>November</option>
				  <option value='12'>Desember</option>
	   
	   ";
														?>
														
														        </select>
                </div>	
				
				
				<div class="form-group">
                  <label>hadir</label>
                 <input type="text" placeholder="" class="form-control" name="hadir" value='0'>
                </div>
				
				
				<div class="form-group">
                  <label>sakit</label>
                 <input type="text" placeholder="" class="form-control" name="sakit" value='0'>
                </div>
				
				<div class="form-group">
                  <label>izin</label>
                 <input type="text" placeholder="" class="form-control" name="ijin" value='0'>
                </div>
				
				<div class="form-group">
                  <label>alpha</label>
                 <input type="text" placeholder="" class="form-control" name="alpha" value='0'>
                </div>
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail3ubah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail3ubahsimpan&id=$_GET[id]&id4=$_GET[id4]"; ?>' enctype='multipart/form-data'>

	<?php
	
$stmt = $db->query("SELECT * FROM siswa_kelas_hadir WHERE id_siswa_kelas_hadir='$_GET[id4]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);

?>
			
<div class="form-group">
                  <label>Pilihan Tahun</label>
                 <select class="form-control" name="tahun" readonly>	  
			  <?php

   
	   echo "
	     <option value='$r[tahun]'>$r[tahun]</option>

	   
	   ";
   
														?>
														
														        </select>
                </div>	
				
				
				<div class="form-group">
                  <label>Pilihan Bulan</label>
                 <select class="form-control" name="bulan" readonly>	  
			  <?php
			  $bulan = bulan($r['bulan']);
   echo "
	     <option value='$r[bulan]'>$bulan</option>
	   
	   ";
														?>
														
														        </select>
                </div>	
				
				
				<div class="form-group">
                  <label>hadir</label>
                 <input type="text" placeholder="" class="form-control" name="hadir" value='<?php echo "$r[hadir]"; ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>sakit</label>
                 <input type="text" placeholder="" class="form-control" name="sakit" value='<?php echo "$r[sakit]"; ?>'>
                </div>
				
				<div class="form-group">
                  <label>izin</label>
                 <input type="text" placeholder="" class="form-control" name="ijin" value='<?php echo "$r[ijin]"; ?>'>
                </div>
				
				<div class="form-group">
                  <label>alpha</label>
                 <input type="text" placeholder="" class="form-control" name="alpha" value='<?php echo "$r[alpha]"; ?>'>
                </div>
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
  
   case "detail4":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			 	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
			<a href='media.php?module=siswa&act=detail4tambah&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			  <?php
			}
			?>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="20%">Ekstrakulikuler</th>   	  
<th>Keterangan</th>   

    	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
<th width="10%">Aksi</th>  

  <?php
			}
			?>  
                </tr>
				
				      </thead>
                <tbody>
	<?php			
				
$stmt = $db->query("SELECT *
from siswa_kelas_ekstra a
	inner join ekstrakulikuler b
	on a.id_ekstrakulikuler=b.id_ekstrakulikuler
	
		where a.id_siswa='$_GET[id]'
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
    <td>$data[nama]</td>  
    <td>$data[catatan]</td>  
  

<td>  ";

	if ( $_SESSION['status'] == '1')
			{
				echo "
													<a href='media.php?module=siswa&act=detail4ubah&id=$_GET[id]&id4=$data[id_siswa_kelas_ekstra]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa&act=detail4hapus&id=$_GET[id]&id4=$data[id_siswa_kelas_ekstra]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php 
			}
			echo "
													</td>	
													
													</tr>	";
													
}
?>


		

				
    
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
   


  break;
  
   case "detail4tambah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail4tambahsimpan&id=$_GET[id]"; ?>' enctype='multipart/form-data'>

		
	


			
<div class="form-group">
                  <label>Pilihan Kegiatan</label>
                 <select class="form-control" name="id_ekstrakulikuler">	  
	

   
			  <?php
$stmt = $db->query('SELECT * FROM ekstrakulikuler');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_ekstrakulikuler]'>$row[nama]</option>
	   
	   ";
   }
		
	
   
														?>
														
														        </select>
                </div>	
				
				
				
				
				
				<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="catatan" value=''>
                </div>
				
				
			
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail4ubah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail4ubahsimpan&id=$_GET[id]&id4=$_GET[id4]"; ?>' enctype='multipart/form-data'>

	<?php
	
$stmt = $db->query("SELECT * FROM siswa_kelas_ekstra WHERE id_siswa_kelas_ekstra='$_GET[id4]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);

?>
			

			
<div class="form-group">
                  <label>Pilihan Kegiatan</label>
                 <select class="form-control" name="id_ekstrakulikuler" readonly>	  
	

   
			  <?php
$stmt = $db->query("SELECT * FROM ekstrakulikuler where id_ekstrakulikuler='$r[id_ekstrakulikuler]'");
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_ekstrakulikuler]'>$row[nama]</option>
	   
	   ";
   }
		
	
   
														?>
														
														        </select>
                </div>	
				
				
				
				
				
				<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="catatan" value='<?php echo "$r[catatan]"; ?>'>
                </div>
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
  
   case "detail5":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
				 
 	  	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
			 
			<a href='media.php?module=siswa&act=detail5tambah&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			
			  <?php
			}
			?>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Keterangan</th>   
    	<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
<th width="10%">Aksi</th>    
  <?php
			}
			?>
                </tr>
				
				      </thead>
                <tbody>
	<?php			
				
$stmt = $db->query("SELECT *
from siswa_kelas_catatan a
	
	
		where a.id_siswa='$_GET[id]'
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
 
    <td>$data[catatan]</td>  
  

<td>  ";

	if ( $_SESSION['status'] == '1')
			{
				echo "
													<a href='media.php?module=siswa&act=detail5ubah&id=$_GET[id]&id4=$data[id_siswa_kelas_catatan]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa&act=detail5hapus&id=$_GET[id]&id4=$data[id_siswa_kelas_catatan]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php 
													
			}
			echo "
													</td>	
													
													</tr>	";
													
}
?>


		

				
    
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
   


  break;
  
   case "detail5tambah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail5tambahsimpan&id=$_GET[id]"; ?>' enctype='multipart/form-data'>


				
				<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="catatan" value=''>
                </div>
				
				
			
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
   case "detail5ubah":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=siswa&act=detail&id=<?php echo "$_GET[id]"; ?>'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=siswa&act=detail1&id=<?php echo "$_GET[id]"; ?>'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=siswa&act=detail2&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=siswa&act=detail3&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=siswa&act=detail4&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=siswa&act=detail5&id=<?php echo "$_GET[id]"; ?>'> <button type="button" class="btn btn-info pull-left"> Catatan Wali Kelas</button></a>
				 
				 		<?php
			if ( $_SESSION['status'] == '1')
			{
				?>
				<a href='media.php?module=siswa'> <button type="button" class="btn btn-default pull-right"> Tutup</button></a>
				<?php
			}
			?>
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
         <div class="col-md-6 box-body">
              <!-- Date -->
	<?php										
	


$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa&act=detail5ubahsimpan&id=$_GET[id]&id4=$_GET[id4]"; ?>' enctype='multipart/form-data'>

	<?php
	
$stmt = $db->query("SELECT * FROM siswa_kelas_catatan WHERE id_siswa_kelas_catatan='$_GET[id4]'");
$r = $stmt->fetch(PDO::FETCH_ASSOC);

?>
			

			

				
				
				
				
				
				<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="catatan" value='<?php echo "$r[catatan]"; ?>'>
                </div>
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
 </form>
            </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
 }
 

?>
