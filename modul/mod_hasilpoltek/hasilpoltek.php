<?php

$aksi="modul/mod_hasilpoltek/aksi_hasilpoltek.php";
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
echo ucwords(" data hasil tes POLTEKNIK PUTRA BANGSA");
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
     		    
			  
		 <a href='media.php?module=hasilpoltek'><button type='button' class='btn btn-success style2'><font color='white'>Sudah Bayar </font></button></a>
			     <a href='media.php?module=hasilpoltek&act=lulus'><button type='button' class='btn btn-warning style2'><font color='white'>Lulus </font></button></a>
				 <a href='media.php?module=hasilpoltek&act=tidak'><button type='button' class='btn btn-info style2'><font color='white'>Tidak Lulus </font></button></a> 

            </div>
                <thead>
                <tr>
     
<th width="20%">NIK</th>   	  
<th>Nama</th> 
<th>Nilai</th> 
<th width="20%">Keterangan</th>     
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM tbl_user a
        inner join tbl_nilai b
        on a.id_user=b.id_user
        where b.keterangan='sudah bayar' and a.tujuan='2'
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   

	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[username]</td>
<td>$data[nama]</td>
<td>$data[score]</td>
<td>$data[keterangan]</td>


                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
              <a href='print.php?id=1'><button type='button' class='btn btn-danger style2'><font color='white'>Excel </font></button></a>
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
	

	
		
	
case "lulus":
 
 ?>


<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" data hasil tes POLTEKNIK PUTRA BANGSA ");
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
     		    
			  
           <a href='media.php?module=hasilpoltek'><button type='button' class='btn btn-success style2'><font color='white'>Sudah Bayar </font></button></a>
			     <a href='media.php?module=hasilpoltek&act=lulus'><button type='button' class='btn btn-warning style2'><font color='white'>Lulus </font></button></a>
				 <a href='media.php?module=hasilpoltek&act=tidak'><button type='button' class='btn btn-info style2'><font color='white'>Tidak Lulus </font></button></a> 

            </div>
                <thead>
                <tr>
     
<th width="20%">NIK</th>   	  
<th>Nama</th> 
<th>Nilai</th> 
<th width="20%">Keterangan</th>
<th width="20%">konfirmasi bayar</th>     
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM tbl_user a
        inner join tbl_nilai b
        on a.id_user=b.id_user
          where b.keterangan='lulus' and a.tujuan='2'
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php

	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[username]</td>
<td>$data[nama]</td>
<td>$data[score]</td>
<td>$data[keterangan]</td>

<td>  

<a href='$aksi?module=hasilpoltek&act=bayar&id=$data[id_nilai]&idu=$data[id_user]' class='btn btn-block btn-social btn-dropbox'>
                <i class='fa fa-money'></i> Pendaftar Membayar
              </a>
											       "; ?>
                               
													<?php echo "
													</td>
                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


                </tbody>
                
              </table>
              <a href='print.php?id=2'><button type='button' class='btn btn-danger style2'><font color='white'>Excel </font></button></a>
          
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




  case "tidak":
 
 ?>


<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" data hasil tes POLTEKNIK PUTRA BANGSA");
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
     		    
			  
           <a href='media.php?module=hasilpoltek'><button type='button' class='btn btn-success style2'><font color='white'>Sudah Bayar </font></button></a>
			     <a href='media.php?module=hasilpoltek&act=lulus'><button type='button' class='btn btn-warning style2'><font color='white'>Lulus </font></button></a>
				 <a href='media.php?module=hasilpoltek&act=tidak'><button type='button' class='btn btn-info style2'><font color='white'>Tidak Lulus </font></button></a> 

            </div>
                <thead>
                <tr>
     
<th width="20%">No Registrasi</th>   	  
<th>Nama</th> 
<th>Nilai</th> 
<th width="20%">Keterangan</th>     
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT b.username,b.nama,a.score,a.keterangan 
      FROM tbl_nilai a
        inner join tbl_user b
        on b.id_user=a.id_user
          where a.keterangan='tidak lulus' and b.tujuan='2'
          
	
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   <?php
	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[username]</td>
<td>$data[nama]</td>
<td>$data[score]</td>
<td>$data[keterangan]</td>


                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>
 
                </tbody>
                
              </table>
              <a href='print.php?id=3'><button type='button' class='btn btn-danger style2'><font color='white'>Excel </font></button></a>
          
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

  case "belum":
 
  ?>
 
 
 <div class="content-wrapper">
        <section class="content-header">
       <h1>
      <?php
 echo ucwords(" data hasil tes POLTEKNIK PUTRA BANGSA");
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
              
         
      <a href='media.php?module=hasilpoltek&act=lulus'><button type='button' class='btn btn-success style2'><font color='white'>Lulus </font></button></a>
            <a href='media.php?module=hasilpoltek&act=tidak'><button type='button' class='btn btn-warning style2'><font color='white'>Tidak Lulus </font></button></a>
          <a href='media.php?module=hasilpoltek&act=belum'><button type='button' class='btn btn-info style2'><font color='white'>Belum Tes </font></button></a> 
 
             </div>
                 <thead>
                 <tr>
      
 <th width="20%">No Registrasi</th>   	  
 <th>Nama</th> 
  
                 </tr>
         
               </thead>
                 <tbody>
   
 
   <?php
 $no='1';		
 
 $usero='1';	
 
 $stmt = $db->query("SELECT *
 FROM tbl_user a
   NATURAL LEFT JOIN tbl_nilai b
 
     where b.keterangan IS NULL
   
    ");
 while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    
      ?>
      
      <?php
      
 
 
 
 
      echo "
  <tr class='gradeX' >
                                                  
 <td>$data[username]</td>
 <td>$data[nama]</td>

 
 
                                                    
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
               <a href='media.php?module=guru'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  guru where id_guru='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=guru&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_guru" value="<?php echo $rowa['id_guru']; ?>"/>

 
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
