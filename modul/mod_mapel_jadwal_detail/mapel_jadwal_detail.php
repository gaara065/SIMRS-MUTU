<?php


$aksi="modul/mod_mapel_jadwal_detail/aksi_mapel_jadwal_detail.php";
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
echo ucwords(" data Jadwal Mata pelajaran ");
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
     		    
			  
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Senin  
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=senin&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
</th> 
<th>Selasa
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=selasa&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
</th>
<th>Rabu
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=rabu&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
</th>
<th>kamis
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=kamis&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
</th>
<th>Jumat
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=jumat&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
</th>
<th>Sabtu
<a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=sabtu&id=<?php echo "$_GET[id]"; ?>' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='senin'
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='selasa'
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='rabu'
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='kamis'
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='jumat'
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
			
				where a.id_mapel_jadwal='$_GET[id]' and a.hari='sabtu'
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
               <a href='media.php?module=mapel_jadwal_detail&id=<?php echo "$_GET[id]"; ?>'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
			  
			  <a href='media.php?module=mapel_jadwal_detail&act=tambah&hari=<?php echo "$_GET[hari]"; ?>&id=<?php echo "$_GET[id]"; ?>'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
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

$stmt = $db->query("SELECT a.id_mapel_jadwal_detail as id_mapel_jadwal_detail, c.nama as aa, a.jam as bb
      FROM mapel_jadwal_detail a 
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
													<a href='media.php?module=mapel_jadwal_detail&act=ubah&hari=$_GET[hari]&id=$_GET[id]&id2=$data[id_mapel_jadwal_detail]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=mapel_jadwal_detail&act=hapus&hari=$_GET[hari]&id=$_GET[id]&id2=$data[id_mapel_jadwal_detail]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=<?php echo "$_GET[hari]"; ?>&id=<?php echo "$_GET[id]"; ?>'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=mapel_jadwal_detail&act=tambah"; ?>' enctype='multipart/form-data'>

		<input type="hidden" name="id_mapel_jadwal" value="<?php echo "$_GET[id]"; ?>"/>
	
<div class="form-group">
                  <label>Pilihan Hari</label>
                 <select class="form-control" name="hari">	  
			  <?php

   
	   echo "
	     <option value='senin'>senin</option>
		 	     <option value='selasa'>selasa</option>
				 	     <option value='rabu'>rabu</option>
						 	     <option value='kamis'>kamis</option>
								 	     <option value='jumat'>jumat</option>
												<option value='sabtu'>sabtu</option>
										 
	   
	   ";

														?>
														
														        </select>
                </div>	
				
				<div class="form-group">
                  <label>Jam</label>
                 <input type="text" placeholder="" class="form-control" name="jam" value=''>
                </div>

			
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
               <a href='media.php?module=mapel_jadwal_detail&act=tabelubah&hari=<?php echo "$_GET[hari]"; ?>&id=<?php echo "$_GET[id]"; ?>'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT *
from mapel_jadwal_detail
inner join mapel
on mapel_jadwal_detail.id_mapel=mapel.id_mapel
where id_mapel_jadwal_detail='$_GET[id2]'");

$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=mapel_jadwal_detail&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_mapel_jadwal_detail" value="<?php echo "$_GET[id2]"; ?>"/>

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
