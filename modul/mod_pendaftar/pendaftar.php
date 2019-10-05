<?php


$aksi="modul/mod_pendaftar/aksi_pendaftar.php";
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
echo ucwords(" data pendaftar ");
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
     		    
			  
			  <a href='media.php?module=pendaftar&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="20%">NIK</th>  

<th>Nama</th> 
<th>Password</th> 
<th>Jenis Tes</th>  
<th>Jurusan</th> 
<th>Kelas</th> 	   
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT a.id_user,a.username,a.nama,a.password, b.nama_ujian,a.jurusan,a.kelas
      FROM tbl_user a
        inner join tbl_pengaturan_ujian b
        on a.ujian=b.id
          where a.status='0' and a.tujuan='1'
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
<td>$data[jurusan]</td>
<td>$data[kelas]</td>

<td>  
													<a href='media.php?module=pendaftar&act=ubah&id=$data[id_user]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=pendaftar&act=hapus&id=$data[id_user]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=pendaftar'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=pendaftar&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

<div class="form-group">
                  <label>Jenis Tes</label>

                  <select class="form-control" name="ujian" >	
		  <?php
      $stmt = $db->query("SELECT * FROM tbl_pengaturan_ujian");
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
        echo "
          <option value='$row[id]'>$row[nama_ujian]</option>
        
        ";
      } 
														?>
														
														        </select>              
                </div>


<div class="form-group">
                  <label>No Registrasi</label>
                 <input type="text" placeholder="" class="form-control" name="username" value=''>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>
        
				
				<div class="form-group">
                  <label>Password</label>
                 <input type="text" placeholder="" class="form-control" name="password" value='<?php        $digits = 3;
echo rand(pow(10, $digits-1), pow(10, $digits)-1);
?>'>
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

 case "poltek":
 
 ?>


<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" data pendaftar ");
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
     		    
			  
			  <a href='media.php?module=pendaftar&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
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
          where a.status='0' and a.tujuan='2'
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
													<a href='media.php?module=pendaftar&act=ubah&id=$data[id_user]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=pendaftar&act=hapus&id=$data[id_user]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=pendaftar'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=pendaftar&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

<div class="form-group">
                  <label>Jenis Tes</label>

                  <select class="form-control" name="ujian" >	
		  <?php
      $stmt = $db->query("SELECT * FROM tbl_pengaturan_ujian");
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
        echo "
          <option value='$row[id]'>$row[nama_ujian]</option>
        
        ";
      } 
														?>
														
														        </select>              
                </div>


<div class="form-group">
                  <label>No Registrasi</label>
                 <input type="text" placeholder="" class="form-control" name="username" value=''>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>
        
				
				<div class="form-group">
                  <label>Password</label>
                 <input type="text" placeholder="" class="form-control" name="password" value='<?php        $digits = 3;
echo rand(pow(10, $digits-1), pow(10, $digits)-1);
?>'>
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
