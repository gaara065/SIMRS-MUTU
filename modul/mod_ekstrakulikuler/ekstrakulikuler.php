<?php


$aksi="modul/mod_ekstrakulikuler/aksi_ekstrakulikuler.php";
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
echo ucwords(" data ekstrakulikuler ");
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
     		    
			  
			  <a href='media.php?module=ekstrakulikuler&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kode</th>   	  
<th>Nama</th>      
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM ekstrakulikuler
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[kode]</td>
<td>$data[nama]</td>

<td>  
													<a href='media.php?module=ekstrakulikuler&act=ubah&id=$data[id_ekstrakulikuler]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=ekstrakulikuler&act=hapus&id=$data[id_ekstrakulikuler]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=ekstrakulikuler'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=ekstrakulikuler&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

				<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value=''>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
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
               <a href='media.php?module=ekstrakulikuler'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  ekstrakulikuler where id_ekstrakulikuler='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=ekstrakulikuler&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_ekstrakulikuler" value="<?php echo $rowa['id_ekstrakulikuler']; ?>"/>

 
<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value='<?php echo "$rowa[kode]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama]";  ?>'>
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
