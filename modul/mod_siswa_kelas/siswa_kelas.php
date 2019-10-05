<?php


$aksi="modul/mod_siswa_kelas/aksi_siswa_kelas.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



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
  	 <div class="box table-responsive no-padding"> <div class="pull-right box-tools">
               <a href='media.php?module=mapel_jadwal'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
               <table  id="" class="table table-bordered table-striped">
			   
<?php			   
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
		
	where a.id_mapel_jadwal='$_GET[id]'
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
     		    
			  
			   <a href='media.php?module=siswa_kelas&act=tambah&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kode</th>   	  
<th>Nama</th> 
<th>Alamat</th> 
<th>Email</th> 
<th>Hp</th>     
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM siswa_kelas a
		inner join siswa b
		on a.id_siswa=b.id_siswa
		 inner join mapel_jadwal c
		 on a.id_mapel_jadwal=c.id_mapel_jadwal
		 
			where a.id_mapel_jadwal='$_GET[id]'
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[kode]</td>
<td>$data[nama]</td>
<td>$data[alamat]</td>
<td>$data[email]</td>
<td>$data[hp]</td>



                           
<td>  
													<a href='media.php?module=siswa&act=detail&id=$data[id_siswa]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa_kelas&act=hapus&id=$_GET[id]&id2=$data[id_siswa_kelas]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
	

	
		
	
case "tabelubah":



?>

	

<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" jadwal Mata Pelajaran ");
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
               <table  id="" class="table table-bordered table-striped">
			     <div class="box-header">
     		    <div class="pull-right box-tools">
               <a href='media.php?module=siswa_kelas&id=<?php echo "$_GET[id]"; ?>'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
			  
			  <a href='media.php?module=siswa_kelas&act=tambah&hari=<?php echo "$_GET[hari]"; ?>&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th>Hari</th> 
<th>jam</th> 	  
<th>Mapel</th> 
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT a.id_siswa_kelas as id_siswa_kelas, c.nama as aa, a.jam as bb
      FROM siswa_kelas a 
		inner join mapel_jadwal b 
		on a.id_mapel_jadwal=b.id_mapel_jadwal
			inner join mapel c
			on a.id_mapel=c.id_mapel
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='$_GET[hari]'
				order by a.jam asc
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$_GET[hari]</td>
<td>$data[bb]</td>
<td>$data[aa]</td>

<td>  
													<a href='media.php?module=siswa_kelas&act=ubah&hari=$_GET[hari]&id=$_GET[id]&id2=$data[id_siswa_kelas]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=siswa_kelas&act=hapus&hari=$_GET[hari]&id=$_GET[id]&id2=$data[id_siswa_kelas]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
	 <div class="pull-right box-tools">
               <a href='media.php?module=siswa_kelas&id=<?php echo "$_GET[id]"; ?>'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
               <table  id="example6" class="table table-bordered table-striped">
			   <br/>
			   
			   
			     <div class="box-header">
     		    
			  
			
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kode</th>   	  
<th>Nama</th> 
<th>Alamat</th> 
<th>Email</th> 
<th>Hp</th>     
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM siswa 
		 
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[kode]</td>
<td>$data[nama]</td>
<td>$data[alamat]</td>
<td>$data[email]</td>
<td>$data[hp]</td>



                           
<td>  
											       "; ?>
													
<a href="<?php echo "$aksi?module=siswa_kelas&act=pilih&id=$_GET[id]&id2=$data[id_siswa]"; ?>" onclick="return confirm('Data Terpilih?')" ><button type='button' class='btn btn-warning style2'><font color='white'>Pilih </font></button></a>
                                      
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

 case "ubah":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
               <a href='media.php?module=siswa_kelas&act=tabelubah&hari=<?php echo "$_GET[hari]"; ?>&id=<?php echo "$_GET[id]"; ?>'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT *
from siswa_kelas
inner join mapel
on siswa_kelas.id_mapel=mapel.id_mapel
where id_siswa_kelas='$_GET[id2]'");

$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=siswa_kelas&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_siswa_kelas" value="<?php echo "$_GET[id2]"; ?>"/>

	<input type="hidden" name="id_mapel_jadwal" value="<?php echo "$_GET[id]"; ?>"/>
	
	<input type="hidden" name="hari" value="<?php echo "$_GET[hari]"; ?>"/>
	

				
				<div class="form-group">
                  <label>Jam</label>
                 <input type="text" placeholder="" class="form-control" name="jam" value='<?php echo "$rowa[jam]"; ?>'>
                </div>

			
<div class="form-group">
                  <label>Pilihan Mapel</label>
                 <select class="form-control" name="id_mapel">	  
			  <?php
			 echo "   <option value='$rowa[id_mapel]'>$rowa[nama]</option>";
			 
$stmt = $db->query('SELECT * FROM mapel');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_mapel]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
				
		
				
				
				

 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />

                                                  
												
													
												
											
							
 
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

 }
 

?>
