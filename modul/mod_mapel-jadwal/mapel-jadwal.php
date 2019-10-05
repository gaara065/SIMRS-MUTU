<?php


//$aksi="modul/mod_daftaruser/aksi_daftaruser.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';




switch($_GET['act']){
  // Tampil Banner
  default:

 



?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Jadwal Mata Pelajaran
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
     		    
			  
			  <a href='#'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kode</th>   	  
<th>Tahun Akademik</th> 
<th>Kelas</th>   
<th>Semester</th>   
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td>1111</td>
<td>2019/2020</td>
<td>Kelas X</td>
<td>1</td>

<?php
echo "
<td>  
													<a href='#' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "#"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Kegiatan Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php echo "
													</td>";
?>

	</tr>			
          
				
				
                <tr>
     
<td>1112</td>
<td>2019/2020</td>
<td>Kelas XI</td>
<td>1</td>

<?php
echo "
<td>  
													<a href='#' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "#"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Kegiatan Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php echo "
													</td>";
?>

	</tr>				

	   
          
                
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
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';

$today = date("m/d/Y");

   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftaruser&act=tambah"; ?>' enctype='multipart/form-data'>
	
	
	

              <!-- /.form group -->
		

<div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	  
			  <?php
$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

				<div class="form-group">
                  <label>Username</label>
                 <input type="text" placeholder="" class="form-control" name="username" value=''>
                </div>

				<div class="form-group">
                  <label>Password</label>
                 <input type="text" placeholder="" class="form-control" name="password" value=''>
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
               <a href='media.php?module=menuadmin'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Main Menu</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



$stmt = $db->query("SELECT * FROM user a, toko b where a.id_user='$_GET[id]' and a.id_toko=b.id_toko");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=daftaruser&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_user" value="<?php echo $rowa['id_user']; ?>"/>

 <div class="form-group">
                  <label>Pilihan Toko</label>
                 <select class="form-control" name="id_toko">	
		  <?php
echo "
	     <option value='$rowa[id_toko]'>$rowa[nama]</option>
	   
	   ";				 

$stmt = $db->query('SELECT * FROM toko');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[id_toko]'>$row[nama]</option>
	   
	   ";
   }
														?>
														
														        </select>
                </div>	

				<div class="form-group">
                  <label>Username</label>
                 <input type="text" placeholder="" class="form-control" name="username" value='<?php echo "$rowa[username]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Password</label>
                 <input type="text" placeholder="" class="form-control" name="password" value='<?php echo "$rowa[password]";  ?>'>
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
