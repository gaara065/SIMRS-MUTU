<?php


$aksi="modul/mod_mapel_jadwal/aksi_mapel_jadwal.php";
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
echo ucwords(" data kelas ");
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
               <table  id="example1" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  
			  <a href='media.php?module=mapel_jadwal&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
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
<th>Siswa</th>
<th>Jadwal</th>
    
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

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



<td><a href='media.php?module=siswa_kelas&id=$data[id_mapel_jadwal]'>
													
													<button type='button' class='btn btn-warning btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Siswa</button>
													</a></td>
													
													
<td><a href='media.php?module=mapel_jadwal_detail&id=$data[id_mapel_jadwal]'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Mapel</button>
													</a></td>


<td>  
													<a href='media.php?module=mapel_jadwal&act=ubah&id=$data[id_mapel_jadwal]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=mapel_jadwal&act=hapus&id=$data[id_mapel_jadwal]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
    
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
 		       <div class="pull-right box-tools">
               <a href='media.php?module=mapel_jadwal'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=mapel_jadwal&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
<div class="form-group">
                  <label>Pilihan Tahun Akademik</label>
                 <select class="form-control" name="id_tahun_akademik">	  
			  <?php
$stmt = $db->query('SELECT * FROM tahun_akademik');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_tahun_akademik]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
	<div class="form-group">
                  <label>Pilihan Semester</label>
                 <select class="form-control" name="semester">	  
			  <?php

   
	   echo "
	     <option value='1'>1</option>
		  <option value='2'>2</option>
		   <option value='3'>3</option>
		    <option value='4'>4</option>
			 <option value='5'>5</option>
			  <option value='6'>6</option>
	   
	   ";

														?>
														
														        </select>
                </div>	

				


	<div class="form-group">
                  <label>Pilihan Kelas</label>
                 <select class="form-control" name="id_kelas">	  
			  <?php
$stmt = $db->query('SELECT * FROM kelas');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_kelas]'>$row[nama] - $row[jenis]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

	<div class="form-group">
                  <label>Pilihan Jurusan</label>
                 <select class="form-control" name="id_jurusan">	  
			  <?php
$stmt = $db->query('SELECT * FROM jurusan');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_jurusan]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	


	<div class="form-group">
                  <label>Pilihan Kurikulum</label>
                 <select class="form-control" name="id_kurikulum">	  
			  <?php
$stmt = $db->query('SELECT * FROM kurikulum');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_kurikulum]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
		

	<div class="form-group">
                  <label>Pilihan Guru/Wali Kelas</label>
                 <select class="form-control" name="id_guru">	  
			  <?php
$stmt = $db->query('SELECT * FROM guru');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_guru]'>$row[nama]</option>
	   
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
               <a href='media.php?module=mapel_jadwal'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT a.id_mapel_jadwal as id_mapel_jadwal, b.nama as aa, a.semester as bb, c.nama as cc, c.jenis as dd, f.nama as ee, d.nama as ff, e.nama as gg,
																 b.id_tahun_akademik as id_tahun_akademik, c.id_kelas as id_kelas, f.id_jurusan as id_jurusan, d.id_kurikulum as id_kurikulum, e.id_guru as id_guru
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

								where a.id_mapel_jadwal='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=mapel_jadwal&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_mapel_jadwal" value="<?php echo $rowa['id_mapel_jadwal']; ?>"/>

 
 
				
				
<div class="form-group">
                  <label>Pilihan Tahun Akademik</label>
                 <select class="form-control" name="id_tahun_akademik">	  
			  <?php
			   echo "
	     <option value='$rowa[id_tahun_akademik]'>$rowa[aa]</option>
	   
	   ";
	   
$stmt = $db->query('SELECT * FROM tahun_akademik');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_tahun_akademik]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
	<div class="form-group">
                  <label>Pilihan Semester</label>
                 <select class="form-control" name="semester">	  
			  <?php
 echo "
	     <option value='$rowa[bb]'>$rowa[bb]</option>
	   
	   ";
   
	   echo "
	     <option value='1'>1</option>
		  <option value='2'>2</option>
		   <option value='3'>3</option>
		    <option value='4'>4</option>
			 <option value='5'>5</option>
			  <option value='6'>6</option>
	   
	   ";

														?>
														
														        </select>
                </div>	

				


	<div class="form-group">
                  <label>Pilihan Kelas</label>
                 <select class="form-control" name="id_kelas">	  
			  <?php
			  echo "
	     <option value='$rowa[id_kelas]'>$rowa[cc] - $rowa[dd]</option>
	   
	   ";
	   
$stmt = $db->query('SELECT * FROM kelas');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_kelas]'>$row[nama] - $row[jenis]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

	<div class="form-group">
                  <label>Pilihan Jurusan</label>
                 <select class="form-control" name="id_jurusan">	  
			  <?php
			  
			  	  echo "
	     <option value='$rowa[id_jurusan]'>$rowa[ee]</option>
	   
	   ";
	   
	 
$stmt = $db->query('SELECT * FROM jurusan');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_jurusan]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	


	<div class="form-group">
                  <label>Pilihan Kurikulum</label>
                 <select class="form-control" name="id_kurikulum">	  
			  <?php
			  	  echo "
	     <option value='$rowa[id_kurikulum]'>$rowa[ff]</option>
	   
	   ";
	   
$stmt = $db->query('SELECT * FROM kurikulum');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_kurikulum]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	
				
		

	<div class="form-group">
                  <label>Pilihan Guru/Wali Kelas</label>
                 <select class="form-control" name="id_guru">	  
			  <?php
			    	  echo "
	     <option value='$rowa[id_guru]'>$rowa[gg]</option>
	   
	   ";
	   
$stmt = $db->query('SELECT * FROM guru');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_guru]'>$row[nama]</option>
	   
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
