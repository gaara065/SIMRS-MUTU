<?php


$aksi="modul/mod_soal/aksi_soal.php";
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
echo ucwords(" data soal ");
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
     		    
			  
			  <a href='media.php?module=soal&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
<th width="10%">Kategori</th>   	  
<th>Soal</th> 
<th>a</th>    
<th>b</th>    
<th>c</th>    
<th>d</th>    
<th>Kunci Jawaban</th>     
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM tbl_soal a
        inner join tbl_kategori b
        on a.kategori=b.kat_id
       
	order by a.id_soal DESC
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
                                                 
<td>$data[kat_nama]</td>
<td>$data[soal]</td>
<td>$data[a]</td>
<td>$data[b]</td>
<td>$data[c]</td>
<td>$data[d]</td>
<td>$data[knc_jawaban]</td>

<td>  
													<a href='media.php?module=soal&act=ubah&id=$data[id_soal]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=soal&act=hapus&id=$data[id_soal]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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
               <a href='media.php?module=soal'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=soal&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

<div class="form-group">
                  <label>Kategori</label>

                  <select class="form-control" name="kategori" >	
		  <?php
  
$stmt = $db->query('SELECT * FROM tbl_kategori');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[kat_id]'>$row[kat_nama]</option>
	   
	   ";
   }
														?>
														
														        </select>              
                </div>
                
                
                <div class="form-group">
                  <label>Soal</label>

<div class="box-body pad">
             
                    <textarea id="" name="soal" class="form-control" rows="3" cols="40"></textarea>
             
            </div>
				 
                </div>

				<div class="form-group">
                  <label>a</label>
                 <input type="text" placeholder="" class="form-control" name="a" value=''>
                </div>
				
				
				<div class="form-group">
                  <label>b</label>
                 <input type="text" placeholder="" class="form-control" name="b" value=''>
                </div>


                <div class="form-group">
                  <label>c</label>
                 <input type="text" placeholder="" class="form-control" name="c" value=''>
                </div>


                <div class="form-group">
                  <label>d</label>
                 <input type="text" placeholder="" class="form-control" name="d" value=''>
                </div>

                <div class="form-group">
                  <label>Kunci Jawaban</label>
               

                 <select class="form-control" name="knc_jawaban" >	
		  <?php
   
echo "

	   
	   ";				 


   
	   echo "
       <option value='a'>a</option>
       <option value='b'>b</option>
       <option value='c'>c</option>
       <option value='d'>d</option>
	   
	   ";
  
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
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
               <a href='media.php?module=soal'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  tbl_soal where id_soal='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=soal&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_soal" value="<?php echo $rowa['id_soal']; ?>"/>

 
  <div class="form-group">
                  <label>Kategori</label>

                  <select class="form-control" name="kategori" readonly>	
		  <?php
      $stmt = $db->query("SELECT * FROM tbl_kategori where kat_id='$rowa[kategori]'");
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "
<option value='$row[kat_id]'>$row[kat_nama]</option>
	   
	   ";				 
/*
$stmt = $db->query('SELECT * FROM tbl_kategori');
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
	   echo "
	     <option value='$row[kat_id]'>$row[kat_nama]</option>
	   
	   ";
   }*/
														?>
														
														        </select>              
                </div>
                
                
                <div class="form-group">
                  <label>Soal</label>

<div class="box-body pad">
             
                    <textarea id="" name="soal" class="form-control" rows="3" cols="40"><?php echo $rowa['soal']; ?></textarea>
             
            </div>
				 
                </div>

				<div class="form-group">
                  <label>a</label>
                 <input type="text" placeholder="" class="form-control" name="a" value='<?php echo "$rowa[a]";  ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>b</label>
                 <input type="text" placeholder="" class="form-control" name="b" value='<?php echo "$rowa[b]";  ?>'>
                </div>


                <div class="form-group">
                  <label>c</label>
                 <input type="text" placeholder="" class="form-control" name="c" value='<?php echo "$rowa[c]";  ?>'>
                </div>


                <div class="form-group">
                  <label>d</label>
                 <input type="text" placeholder="" class="form-control" name="d" value='<?php echo "$rowa[d]";  ?>'>
                </div>

                <div class="form-group">
                  <label>Kunci Jawaban</label>
               

                 <select class="form-control" name="knc_jawaban" >	
		  <?php
   
echo "
<option value='$rowa[knc_jawaban]'>$rowa[knc_jawaban]</option>
	   
	   ";				 


   
	   echo "
       <option value='a'>a</option>
       <option value='b'>b</option>
       <option value='c'>c</option>
       <option value='d'>d</option>
	   
	   ";
  
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



  case "soalsalah":
 
 ?>


<div class="content-wrapper">
       <section class="content-header">
      <h1>
     <?php
echo ucwords(" data soal ");
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
     		    
			  
		<!-- 	  <a href='media.php?module=soal&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
                <th width="10%">Jumlah Salah</th> 
<th>Soal</th> 
  

 
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("
SELECT a.id_soal,b.soal,COUNT(*) as jumlah  
FROM tbl_pengisian a
   inner join tbl_soal b
   on a.id_soal=b.id_soal
where a.isi_status='salah' 
group by a.id_soal 
order by jumlah desc
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
 <td>$data[jumlah]</td>   
<td>$data[soal]</td>



<td>  
													<a href='media.php?module=soal&act=ubah&id=$data[id_soal]' class='btn btn-social-icon btn-bitbucket'><i class='fa fa-edit'></i></a>
											       "; ?>
													
													<a href="<?php echo "$aksi?module=soal&act=hapus&id=$data[id_soal]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
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



 }
 

?>
