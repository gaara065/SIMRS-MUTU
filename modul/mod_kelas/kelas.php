<?php


$aksi="modul/mod_kelas/aksi_kelas.php";
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
     		    
			  
			  <a href='media.php?module=kelas&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kode</th>   	  

<th>Nama Kelas</th> 
<th>Ruang</th>     
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM kelas 
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[kode]</td>

<td>$data[nama]</td>
<td>$data[jenis]</td>

<td>  
													<a href='media.php?module=kelas&act=ubah&id=$data[id_kelas]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=kelas&act=hapus&id=$data[id_kelas]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=kelas'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=kelas&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

				
				<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value=''>
                </div>

	<div class="form-group">
                  <label>Pilihan Kelas</label>
                 <select class="form-control" name="nama">	  
			  <?php
			 echo "   <option value='X'>X</option>
					<option value='XI'>XI</option>
					<option value='XII'>XII</option>
			 ";
			 

														?>
														
														        </select>
                </div>	
				
				
				
		
				
				
				<div class="form-group">
                  <label>Jenis</label>
                 <input type="text" placeholder="" class="form-control" name="jenis" value=''>
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
               <a href='media.php?module=kelas'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT a.id_kelas as id_kelas,a.kode as c, b.nama as d, a.nama as e, a.jenis as f , a.id_jurusan as id_jurusan
      FROM kelas a inner join jurusan b 
	  on a.id_jurusan=b.id_jurusan where id_kelas='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=kelas&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_kelas" value="<?php echo $rowa['id_kelas']; ?>"/>

 

				
				
<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value='<?php echo "$rowa[c]";  ?>'>
                </div>



	<div class="form-group">
                  <label>Pilihan Kelas</label>
                 <select class="form-control" name="nama" readonly>	
				 
			  <?php
			 echo "   <option value='$rowa[e]'>$rowa[e]</option>
			
			 ";
			 

														?>
														
														        </select>
                </div>	
				
				
			
				
				
				<div class="form-group">
                  <label>Jenis</label>
                 <input type="text" placeholder="" class="form-control" name="jenis" value='<?php echo "$rowa[f]";  ?>'>
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
