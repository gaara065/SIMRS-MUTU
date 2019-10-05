<?php


$aksi="modul/mod_pengaturan/aksi_pengaturan.php";
$_GET['act'] = isset($_GET['act']) ? $_GET['act'] : '';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '';



switch($_GET['act']){
  // Tampil Banner
  default:

 



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
               <a href='media.php?module=pengaturan'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  tbl_pengaturan_ujian ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pengaturan&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id" value="<?php echo $rowa['id']; ?>"/>

 
<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama_ujian" value='<?php echo "$rowa[nama_ujian]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Waktu ( dalam menit )</label>
                 <input type="text" placeholder="" class="form-control" name="waktu" value='<?php echo "$rowa[waktu]";  ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>Nilai Minimal ( skala 0 sd 100 )</label>
                 <input type="text" placeholder="" class="form-control" name="nilai_min" value='<?php echo "$rowa[nilai_min]";  ?>'>
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
		
		
		
  
        
        </div>
        <div class="row">







        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
              
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  modul where id_modul='4' ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pengaturan&act=lulus"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id" value="<?php echo $rowa['id']; ?>"/>

 
<div class="form-group">
                  <label>Pengaturan teks pemberitahuan lulus STIEP</label>
   
                 <textarea id="editor1" name="editor1" rows="10" cols="80"><?php echo $rowa['isi_modul']; ?></textarea>

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








        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
              
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  modul where id_modul='5' ");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pengaturan&act=poltek"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id" value="<?php echo $rowa['id']; ?>"/>

 
<div class="form-group">
                  <label>Pengaturan teks pemberitahuan lulus POLTEKNIK PUTRA BANGSA</label>
   
                 <textarea id="editor2" name="editor2" rows="10" cols="80"><?php echo $rowa['isi_modul']; ?></textarea>

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
               <a href='media.php?module=pengaturan'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=pengaturan&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

				<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value=''>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value=''>
                </div>
				
				
				<div class="form-group">
                  <label>Jabatan</label>
                 <input type="text" placeholder="" class="form-control" name="jabatan" value=''>
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
               <a href='media.php?module=pengaturan'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  pengaturan where id_pengaturan='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pengaturan&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pengaturan" value="<?php echo $rowa['id_pengaturan']; ?>"/>

 
<div class="form-group">
                  <label>Kode</label>
                 <input type="text" placeholder="" class="form-control" name="kode" value='<?php echo "$rowa[kode]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama]";  ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>Jabatan</label>
                 <input type="text" placeholder="" class="form-control" name="jabatan" value='<?php echo "$rowa[jabatan]";  ?>'>
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
