<?php


$aksi="modul/mod_pasien/aksi_pasien.php";
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
echo ucwords(" data pasien ");
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

      
		  
          
            <!-- /.box-header -->
            <div class="box table-responsive no-padding">
		  
          
      <!-- /.box-header -->
<div class="box table-responsive no-padding">
         <table  id="example1" class="table table-bordered table-striped">
			     <div class="box-header">
     		    
			  
			  <a href='media.php?module=pasien&act=tambah'><button type='button' class='btn btn-success style2'><font color='white'>Tambah </font></button></a>
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     <th>Aksi<font color='white'>________</font></th>
<th>NO</th>   	  
<th>No.RM</th> 
<th>Nama<font color='white'>______________________________</font></th> 
<th>Tanggal</th> 
<th width="70%">Alamat<font color='white'>____________________________________</font></th> 
<th>Umur</th> 
<th>Diganosa<font color='white'>____________________________________</font></th> 
<th>DPJP<font color='white'>____________________________________</font></th> 
<th>Dokter_UGD<font color='white'>____________________________________</font></th> 
<th>perawat_UGD<font color='white'>____________________________________</font></th> 
<th>Perawat/bidan_poli<font color='white'>____________________________________</font></th> 
<th>perawat_ruangan<font color='white'>____________________________________</font></th> 
<th>Bidan_VK<font color='white'>____________________________________</font></th>     
 

                </tr>
				
				      </thead>
                <tbody>
	

	<?php
$no='1';		

$usero='1';	

$stmt = $db->query("SELECT *
      FROM pasien
	limit 100
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   
	   <?php
	   




	   echo "
 <tr class='gradeX' >
 <td>  	<a href='media.php?module=pasien&act=datapasien&id=$data[id_pasien]' class='btn btn-social-icon btn-linkedin'><i class='fa fa-play'></i></a>
													
											       "; ?>
													
													<a href="<?php echo "$aksi?module=pasien&act=hapus&id=$data[id_pasien]"; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class='btn btn-social-icon btn-google'><i class='fa fa-bitbucket'></i></a>
                                      
													<?php echo "<br/>
													
													</td>
<td>$no</td>                                                 
<td>$data[no_rm]</td>
<td>$data[nama]</td>
<td>$data[tanggal]</td>
<td >$data[alamat]</td>
<td>$data[umur]</td>
<td>$data[diagnosa]</td>
<td>$data[dpjp]</td>
<td>$data[dr_ugd]</td>
<td>$data[pr_ugd]</td>
<td>$data[pr_poli]</td>
<td>$data[pr_ruangan]</td>
<td>$data[bidan_vk]</td>



                                                   
                                                </tr>
	 ";
	   $no++;
   }
   
   
			?>


			
				
              
				
				
				              

				
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
         
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
               <a href='media.php?module=pasien'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										

$today = date("m/d/Y");

$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>	
<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

<div class="form-group">
                  <label>No rm</label>
                 <input type="text" placeholder="" class="form-control" name="no_rm" value='<?php echo "$rowa[no_rm]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama]";  ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>tanggal</label>
                 <input type="text" placeholder="" class="form-control" name="tanggal" value='<?php echo "$rowa[tanggal]";  ?>'>
                </div>	

<div class="form-group">
                  <label>alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value='<?php echo "$rowa[alamat]";  ?>'>
                </div>

<div class="form-group">
                  <label>Numur</label>
                 <input type="text" placeholder="" class="form-control" name="umur" value='<?php echo "$rowa[umur]";  ?>'>
                </div>


<div class="form-group">
                  <label>diagnosa</label>
                 <input type="text" placeholder="" class="form-control" name="diagnosa" value='<?php echo "$rowa[diagnosa]";  ?>'>
                </div>



<div class="form-group">
                  <label>dpjp</label>
             
				                  <select class="form-control" name="dpjp">	  
<?php
echo "
	     <option value='$row[dpjp]'>$row[dpjp]</option>
	   
	   ";

?>
	     <option value='dr. Mohammad Taufik, Sp. OG'>dr. Mohammad Taufik, Sp. OG</option>
		    <option value='dr. Tri Wahyudi, Sp. OG '>dr. Tri Wahyudi, Sp. OG </option>
			   <option value='dr. Susi Herawati, Sp. OG'>dr. Susi Herawati, Sp. OG</option>
			      <option value='dr. Neny Dwi Anggreni, Sp.OG'>dr. Neny Dwi Anggreni, Sp.OG</option>
				     <option value='dr. Rina Nulianti, Sp.OG'>dr. Rina Nulianti, Sp.OG</option>
					    <option value='dr. Rista Lestari, M.Sc, Sp.A'>dr. Rista Lestari, M.Sc, Sp.A</option>
						   <option value='dr. Wiwik  Windarti, Sp.A'>dr. Wiwik  Windarti, Sp.A</option>
						      <option value='dr. I Nyoman Sudiatmika, Sp.A'>dr. I Nyoman Sudiatmika, Sp.A</option>
							     <option value=''></option>
								    <option value=''></option>
									   <option value=''></option>
	   

														
														        </select>
																
                </div>


<div class="form-group">
                  <label>dr_ugd</label>
                

				                  <select class="form-control" name="dr_ugd">	  
<?php
echo "
	     <option value='$row[dr_ugd]'>$row[dr_ugd]</option>
	   
	   ";

?>
	   
							     <option value='dr. Muhammad Aries Fitrian'>dr. Muhammad Aries Fitrian</option>
								    <option value='dr. Nina Herfiana'>dr. Nina Herfiana</option>
									   <option value='dr. Rima Septiana'>dr. Rima Septiana</option>
									     <option value='dr. Henry Hadianto'>dr. Henry Hadianto</option>
								    <option value='dr. Mafisah'>dr. Mafisah</option>
									   <option value='dr. Eva Yunita'>dr. Eva Yunita</option>
	   

														
														        </select>
																
                </div>


<div class="form-group">
                  <label>perawat_UGD</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ugd" value='<?php echo "$rowa[pr_ugd]";  ?>'>
                </div>


<div class="form-group">
                  <label>Perawat/bidan_poli</label>
                 <input type="text" placeholder="" class="form-control" name="pr_poli" value='<?php echo "$rowa[pr_poli]";  ?>'>
                </div>


<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>

<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
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
               <a href='media.php?module=pasien'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

 
<div class="form-group">
                  <label>No rm</label>
                 <input type="text" placeholder="" class="form-control" name="no_rm" value='<?php echo "$rowa[no_rm]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama]";  ?>'>
                </div>
				
				
				<div class="form-group">
                  <label>tanggal</label>
                 <input type="text" placeholder="" class="form-control" name="tanggal" value='<?php echo "$rowa[tanggal]";  ?>'>
                </div>	

<div class="form-group">
                  <label>alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value='<?php echo "$rowa[alamat]";  ?>'>
                </div>

<div class="form-group">
                  <label>Numur</label>
                 <input type="text" placeholder="" class="form-control" name="umur" value='<?php echo "$rowa[umur]";  ?>'>
                </div>


<div class="form-group">
                  <label>diagnosa</label>
                 <input type="text" placeholder="" class="form-control" name="diagnosa" value='<?php echo "$rowa[diagnosa]";  ?>'>
                </div>



<div class="form-group">
                  <label>dpjp</label>
                 <input type="text" placeholder="" class="form-control" name="dpjp" value='<?php echo "$rowa[dpjp]";  ?>'>
                </div>


<div class="form-group">
                  <label>dr_ugd</label>
                 <input type="text" placeholder="" class="form-control" name="dr_ugd" value='<?php echo "$rowa[dr_ugd]";  ?>'>
                </div>


<div class="form-group">
                  <label>perawat_UGD</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ugd" value='<?php echo "$rowa[pr_ugd]";  ?>'>
                </div>


<div class="form-group">
                  <label>Perawat/bidan_poli</label>
                 <input type="text" placeholder="" class="form-control" name="pr_poli" value='<?php echo "$rowa[pr_poli]";  ?>'>
                </div>


<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>

<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
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
  
  
  
  
 case "datapasien":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
        <li><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
			  <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

     <div class="col-xs-3">
<div class="form-group">
                  <label>No rm</label>
                 <input type="text" placeholder="" class="form-control" name="no_rm" value='<?php echo "$rowa[no_rm]";  ?>'>
                </div>
 </div>
 <div class="col-xs-3">
				<div class="form-group">
                  <label>Nama</label>
                 <input type="text" placeholder="" class="form-control" name="nama" value='<?php echo "$rowa[nama]";  ?>'>
                </div>
				 </div>
		 <div class="col-xs-3">		
				<div class="form-group">
                  <label>tanggal</label>
                 <input type="text" placeholder="" class="form-control" name="tanggal" value='<?php echo "$rowa[tanggal]";  ?>'>
                </div>	
    </div>	

<div class="col-xs-3">
<div class="form-group">
                  <label>umur</label>
                 <input type="text" placeholder="" class="form-control" name="umur" value='<?php echo "$rowa[umur]";  ?>'>
                </div>
</div>


	<div class="col-xs-6">	
<div class="form-group">
                  <label>alamat</label>
                 <input type="text" placeholder="" class="form-control" name="alamat" value='<?php echo "$rowa[alamat]";  ?>'>
                </div>
</div>	

<div class="col-xs-6">
<div class="form-group">
                  <label>diagnosa</label>
                 <input type="text" placeholder="" class="form-control" name="diagnosa" value='<?php echo "$rowa[diagnosa]";  ?>'>
                </div>
</div>

<div class="col-xs-3">
<div class="form-group">
                  <label>dpjp</label>
                				                  <select class="form-control" name="dpjp">	  
<?php
echo "
	     <option value='$rowa[dpjp]'>$rowa[dpjp]</option>
	   
	   ";

?>
	     <option value='dr. Mohammad Taufik, Sp. OG'>dr. Mohammad Taufik, Sp. OG</option>
		    <option value='dr. Tri Wahyudi, Sp. OG '>dr. Tri Wahyudi, Sp. OG </option>
			   <option value='dr. Susi Herawati, Sp. OG'>dr. Susi Herawati, Sp. OG</option>
			      <option value='dr. Neny Dwi Anggreni, Sp.OG'>dr. Neny Dwi Anggreni, Sp.OG</option>
				     <option value='dr. Rina Nulianti, Sp.OG'>dr. Rina Nulianti, Sp.OG</option>
					    <option value='dr. Rista Lestari, M.Sc, Sp.A'>dr. Rista Lestari, M.Sc, Sp.A</option>
						   <option value='dr. Wiwik  Windarti, Sp.A'>dr. Wiwik  Windarti, Sp.A</option>
						      <option value='dr. I Nyoman Sudiatmika, Sp.A'>dr. I Nyoman Sudiatmika, Sp.A</option>
							     <option value=''></option>
								    <option value=''></option>
									   <option value=''></option>
	   

														
														        </select>
                </div>
                </div>



<div class="col-xs-3">
<div class="form-group">
                  <label>dr_ugd</label>
               
			      <select class="form-control" name="dr_ugd">	  
<?php
echo "
	     <option value='$rowa[dr_ugd]'>$rowa[dr_ugd]</option>
	   
	   ";

?>
	   
							     <option value='dr. Muhammad Aries Fitrian'>dr. Muhammad Aries Fitrian</option>
								    <option value='dr. Nina Herfiana'>dr. Nina Herfiana</option>
									   <option value='dr. Rima Septiana'>dr. Rima Septiana</option>
									     <option value='dr. Henry Hadianto'>dr. Henry Hadianto</option>
								    <option value='dr. Mafisah'>dr. Mafisah</option>
									   <option value='dr. Eva Yunita'>dr. Eva Yunita</option>
	   

														
														        </select>
																
                </div>   </div>


<div class="col-xs-3">
<div class="form-group">
                  <label>perawat_UGD</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ugd" value='<?php echo "$rowa[pr_ugd]";  ?>'>
                </div>   </div>


<div class="col-xs-3">
<div class="form-group">
                  <label>Perawat/bidan_poli</label>
                 <input type="text" placeholder="" class="form-control" name="pr_poli" value='<?php echo "$rowa[pr_poli]";  ?>'>
                </div>   </div>


<div class="col-xs-3">
<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
                </div>   </div>

<div class="col-xs-12">
<div class="form-group">
                 
             <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />   
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
			   
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
	  
	  
	  

    </section>
	
	

    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
  
  
  
  
 case "rm":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li class="active"><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
        <li><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
			  <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=rm"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
                Waktu tunggu penyiapan formulir rawat jalan
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>jam mulai penyiapan</label>
                 <input type="text" placeholder="" class="form-control" name="rm_mulai" value='<?php echo "$rowa[rm_mulai]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>jam selesai penyiapan</label>
                 <input type="text" placeholder="" class="form-control" name="rm_selesai" value='<?php echo "$rowa[rm_selesai]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Waktu tunggu</label>
                 <select class="form-control" name="rm_penyiapan">	  
<?php
echo "
	     <option value='$rowa[rm_penyiapan]'>$rowa[rm_penyiapan]</option>
	   
	   ";

?>
	   
							     <option value='Kurang dari 10 menit'>Kurang dari 10 Menit</option>
								    <option value='Lebih dari 10 Menit'>Lebih dari 10 Menit</option>
									 

														
														        </select>
																
                </div>   </div>
				
				
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Kelengkapan formulir RM</label>
                 <select class="form-control" name="rm_form">	  
<?php
echo "
	     <option value='$rowa[rm_form]'>$rowa[rm_form]</option>
	   
	   ";

?>
	   
							     <option value='Lengkap'>Lengkap</option>
								    <option value='Tidak Lengkap'>Tidak Lengkap</option>
									 

														
														        </select>
																
                </div>   </div>
				
	

<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="rm_Jamkomplain" value='<?php echo "$rowa[rm_Jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="rm_ket" value='<?php echo "$rowa[rm_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="rm_responkomplain">	  
<?php
echo "
	     <option value='$rowa[rm_responkomplain]'>$rowa[rm_responkomplain]</option>
	   
	   ";

?>
	   
							     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
			   
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;

 
 
 
 
 
 case "ugd":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li  class="active"><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
        <li><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
			  <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					

<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ugd"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
Kepatuhan Identifikasi Pasien					
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>Memakai gelang	</label>               
                  <select class="form-control" name="ugd_pakaigelang">	  
<?php echo "<option value='$rowa[ugd_pakaigelang]'>$rowa[ugd_pakaigelang]</option>";?>	   
							     <option value='Ya'>Ya</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Warna Gelang	</label>
                  <select class="form-control" name="ugd_warnagelang">	  
<?php echo "<option value='$rowa[ugd_warnagelang]'>$rowa[ugd_warnagelang]</option>";?>	   
							     <option value='Benar'>Benar</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Info gelang </label>
                  <select class="form-control" name="ugd_infogelang">	  
<?php echo "<option value='$rowa[ugd_infogelang]'>$rowa[ugd_infogelang]</option>";?>	   
							     <option value='Benar'>Benar</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
																
                </div>   </div>
				
    
                
                <div class="col-xs-12">
<div class="form-group">
                 
Peningkatan komunikasi efektif			
                </div>  
	  </div>
	  
<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg 
teridentifikasi dg baik
	</label>               
  <input type="text" placeholder="" class="form-control" name="ugd_verbaliden" value='<?php echo "$rowa[ugd_verbaliden]";  ?>'>
              
                </div>   </div>

<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg diread
 back dg baik dan benar
	</label>
  <input type="text" placeholder="" class="form-control" name="ugd_verbalread" value='<?php echo "$rowa[ugd_verbalread]";  ?>'>
              
                </div>   </div>


                <div class="col-xs-4">
<div class="form-group">
                  <label>Emergency respon time	
	</label>
                  <select class="form-control" name="ugd_emergency">	  
<?php echo "<option value='$rowa[ugd_emergency]'>$rowa[ugd_emergency]</option>";?>	   
<option value='Kurang dari 5 menit'>Kurang dari 5 Menit</option>
<option value='Lebih dari 5 Menit'>Lebih dari 5 Menit</option>
     
                  </select>
                </div>   </div>

				
				
				
				
	

<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="ugd_jamkomplain" value='<?php echo "$rowa[ugd_jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="ugd_ket" value='<?php echo "$rowa[ugd_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="ugd_respon">	  
<?php
echo "
	     <option value='$rowa[ugd_respon]'>$rowa[ugd_respon]</option>
	   
	   ";

?>
	     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;
  
  
  
  
  
 case "rajal":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li   class="active"><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
        <li><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
			  <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=rajal"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
Kepatuhan Identifikasi Pasien					
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>Memakai gelang	</label>               
                  <select class="form-control" name="rajal_pakaigelang">	  
<?php echo "<option value='$rowa[rajal_pakaigelang]'>$rowa[rajal_pakaigelang]</option>";?>	   
							     <option value='Ya'>Ya</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Warna Gelang	</label>
                  <select class="form-control" name="rajal_warnagelang">	  
<?php echo "<option value='$rowa[rajal_warnagelang]'>$rowa[rajal_warnagelang]</option>";?>	   
							     <option value='Benar'>Benar</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Info gelang </label>
                  <select class="form-control" name="rajal_infogelang">	  
<?php echo "<option value='$rowa[rajal_infogelang]'>$rowa[rajal_infogelang]</option>";?>	   
							     <option value='Benar'>Benar</option>
                    <option value='Tidak'>Tidak</option> 
                  </select>
																
                </div>   </div>
				
    
                
                <div class="col-xs-12">
<div class="form-group">
                 
Jam Pelayanan		
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>JamBuka Pelayanan													
	</label>               

  <select class="form-control" name="rajal_jambuka">	  
<?php echo "<option value='$rowa[rajal_jambuka]'>$rowa[rajal_jambuka]</option>";?>	   
<option value='Kurang dari 08.00'>Kurang dari 08.00</option>
<option value='Lebih dari 08.00'>Lebih dari 08.00</option>  
<option value='Kurang dari 10.00'>Kurang dari 10.00</option>
<option value='Lebih dari 10.00'>Lebih dari 10.00</option>  
<option value='Kurang dari 13.00'>Kurang dari 13.00</option>
<option value='Lebih dari 13.00'>Lebih dari 13.00</option>  
<option value='Kurang dari 14.30'>Kurang dari 14.30</option>
<option value='Lebih dari 14.30'>Lebih dari 14.30</option>  
<option value='Kurang dari 16.00'>Kurang dari 16.00</option>
<option value='Lebih dari 16.00'>Lebih dari 16.00</option>  
<option value='Kurang dari 19.00'>Kurang dari 19.00</option>
<option value='Lebih dari 19.00'>Lebih dari 19.00</option>  
<option value='Kurang dari 20.00'>Kurang dari 20.00</option>
<option value='Lebih dari 20.00'>Lebih dari 20.00</option>     
                  </select>          
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Jam masuk

	</label>
  <input type="text" placeholder="" class="form-control" name="rajal_masuk" value='<?php echo "$rowa[rajal_masuk]";  ?>'>
              
                </div>   </div>


                <div class="col-xs-3">
<div class="form-group">
                  <label>Jam Selesai
	
	</label>
  <input type="text" placeholder="" class="form-control" name="rajal_selesai" value='<?php echo "$rowa[rajal_selesai]";  ?>'>
     
                </div>   </div>

                <div class="col-xs-3">
<div class="form-group">
                  <label>Waktu tunggu
	
	</label>
                  <select class="form-control" name="rajal_waktutunggu">	  
<?php echo "<option value='$rowa[rajal_waktutunggu]'>$rowa[rajal_waktutunggu]</option>";?>	   
<option value='Kurang dari 60 menit'>Kurang dari 60 Menit</option>
<option value='Lebih dari 60 Menit'>Lebih dari 60 Menit</option>     
                  </select>
                </div>   </div>

				
				
				
				
	

<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="rajal_jamkomplain" value='<?php echo "$rowa[rajal_jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="rajal_ket" value='<?php echo "$rowa[rajal_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="rajal_responkomplain">	  
<?php
echo "
	     <option value='$rowa[rajal_responkomplain]'>$rowa[rajal_responkomplain]</option>
	   
	   ";

?>
	   
     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;
  
  
  
  
  
  
 case "ranap":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
        <li   class="active"><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
			  <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	

<div class="col-xs-3">
<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
                </div>   </div>

<div class="col-xs-6">
<div class="form-group">
                 
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
              </div>
			  
			   </form>
			   
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;
  
  
  
  
  
 case "vk":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
			  <li ><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li  class="active"><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
        <li ><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=vk"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
		
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label><br/>Angka kematian karena pre eklampsi		</label>               
                  <select class="form-control" name="vk_eklampsi">	  
<?php echo "<option value='$rowa[vk_eklampsi]'>$rowa[vk_eklampsi]</option>";?>	   
							     <option value='Hidup'>Hidup</option>
                    <option value='Meninggal'>Meninggal</option> 
                  </select>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label><br/>Ketersediaan obat MgSO4		</label>
                  <select class="form-control" name="vk_mgso4">	  
<?php echo "<option value='$rowa[vk_mgso4]'>$rowa[vk_mgso4]</option>";?>	   
							     <option value='Tersedia'>Tersedia</option>
                    <option value='Tidak Tersedia'>Tidak Tersedia</option> 
                  </select>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Kematian ibu dan anak karena persalinan	
		 </label>
                  <select class="form-control" name="vk_matipersalinan">	  
<?php echo "<option value='$rowa[vk_matipersalinan]'>$rowa[vk_matipersalinan]</option>";?>	   
<option value='Hidup'>Hidup</option>
                    <option value='Meninggal'>Meninggal</option> 
                  </select>
																
                </div>   </div>
                <div class="col-xs-3">
<div class="form-group">
                  <label>tindakan SC primi 37-42 mggu bayi posisi normal tunggal hidup	
		 </label>
                  <select class="form-control" name="vk_primi">	  
<?php echo "<option value='$rowa[vk_primi]'>$rowa[vk_primi]</option>";?>	   
							     <option value='Normal'>Normal</option>
                    <option value='SC'>SC</option> 
                  </select>
																
                </div>   </div>
				
    
                
                <div class="col-xs-12">
<div class="form-group">
                 
Peningkatan komunikasi efektif			
                </div>  
	  </div>
	  
<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg 
teridentifikasi dg baik
	</label>               
  <input type="text" placeholder="" class="form-control" name="vk_verbaliden" value='<?php echo "$rowa[vk_verbaliden]";  ?>'>
              
                </div>   </div>

<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg diread
 back dg baik dan benar
	</label>
  <input type="text" placeholder="" class="form-control" name="vk_verbalread" value='<?php echo "$rowa[vk_verbalread]";  ?>'>
              
                </div>   </div>


                <div class="col-xs-4">
<div class="form-group">
                  <label>Pelaksanaan IMD		
	</label>
                  <select class="form-control" name="vk_imd">	  
<?php echo "<option value='$rowa[vk_imd]'>$rowa[vk_imd]</option>";?>	   
<option value='Ya'>Ya</option>
<option value='Tidak'>Tidak</option>
     
                  </select>
                </div>   </div>

				
				
				
				
	

<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="vk_jamkomplain" value='<?php echo "$rowa[vk_jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="vk_ket" value='<?php echo "$rowa[vk_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="vk_respon">	  
<?php
echo "
	     <option value='$rowa[vk_respon]'>$rowa[vk_respon]</option>
	   
	   ";

?>
	     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;



  case "peri":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
			  <li ><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li  ><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
        <li class="active"><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=peri"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
Kemampuan menangani BBLR			
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>BB lahir
		</label>               
    <input type="text" placeholder="" class="form-control" name="peri_bblahir" value='<?php echo "$rowa[peri_bblahir]";  ?>'>
  
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>BB pulang
	</label>
  <input type="text" placeholder="" class="form-control" name="peri_bbpulang" value='<?php echo "$rowa[peri_bbpulang]";  ?>'>
  
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>kondisi pasien		
		 </label>
                  <select class="form-control" name="peri_kondisi">	  
<?php echo "<option value='$rowa[peri_kondisi]'>$rowa[peri_kondisi]</option>";?>	   
<option value='Sehat'>Sehat</option>
                    <option value='Rujuk'>Rujuk</option> 
                  </select>
																
                </div>   </div>
                <div class="col-xs-3">
<div class="form-group">
                  <label>Kepatuhan jam visite dokter spesialis	
		
		 </label>
                  <select class="form-control" name="peri_visitspe">	  
<?php echo "<option value='$rowa[peri_visitspe]'>$rowa[peri_visitspe]</option>";?>	   
							 
<option value='Kurang dari 14.00'>Kurang dari 14.00</option>
								    <option value='Lebih dari 14.00'>Lebih dari 14.00</option>
                  </select>
																
                </div>   </div>
				
    
                
                <div class="col-xs-12">
<div class="form-group">
                 
Peningkatan komunikasi efektif			
                </div>  
	  </div>
	  
<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg 
teridentifikasi dg baik
	</label>               
  <input type="text" placeholder="" class="form-control" name="peri_verbaliden" value='<?php echo "$rowa[peri_verbaliden]";  ?>'>
              
                </div>   </div>

<div class="col-xs-4">
<div class="form-group">
                  <label>Jlh instruksi verbal yg diread
 back dg baik dan benar
	</label>
  <input type="text" placeholder="" class="form-control" name="peri_verbalread" value='<?php echo "$rowa[peri_verbalread]";  ?>'>
              
                </div>   </div>



<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="peri_jamkomplain" value='<?php echo "$rowa[peri_jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="peri_ket" value='<?php echo "$rowa[peri_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="peri_respon">	  
<?php
echo "
	     <option value='$rowa[peri_respon]'>$rowa[peri_respon]</option>
	   
	   ";

?>
	     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;


  
  
  
  
 case "lab":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
			  <li ><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
        <li  ><a href="media.php?module=pasien&act=vk&id=<?php echo "$_GET[id]";?>" >RUANG BERSALIN </a></li>
        <li><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li class="active"><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=lab"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	
<div class="col-xs-12">
<div class="form-group">
                 
Waktu lapor hasil tes kritis laboratorium				
                </div>  
	  </div>
	  
<div class="col-xs-3">
<div class="form-group">
                  <label>Jenis pemeriksaan

		</label>               
    <input type="text" placeholder="" class="form-control" name="lab_jenis" value='<?php echo "$rowa[lab_jenis]";  ?>'>
  
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Waktu lapor
	</label>
  <select class="form-control" name="lab_waktu">	  
<?php echo "<option value='$rowa[lab_waktu]'>$rowa[lab_waktu]</option>";?>	   
							 
<option value='Kurang dari  60 Menit'>Kurang dari 60 Menit</option>
								    <option value='Lebih dari  60 Menit'>Lebih dari  60 Menit</option>
                  </select>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Tidak ada kesalahan pemberian hasil</label>
                  <select class="form-control" name="lab_salah">	  
<?php echo "<option value='$rowa[lab_salah]'>$rowa[lab_salah]</option>";?>	   
<option value='Benar'>Benar</option>
                    <option value='Salah'>Salah</option> 
                  </select>
																
                </div>   </div>
                <div class="col-xs-3">
<div class="form-group">
                  <label>waktu tunggu darah cito			
		
		 </label>
                  <select class="form-control" name="lab_cito">	  
<?php echo "<option value='$rowa[lab_cito]'>$rowa[lab_cito]</option>";?>	   
							 
<option value='Kurang dari 2 Jam'>Kurang dari 2 Jam</option>
								    <option value='Lebih dari 2 Jam'>Lebih dari 2 Jam</option>
                  </select>
																
                </div>   </div>


                <div class="col-xs-3">
<div class="form-group">
                  <label>waktu tunggu darah rutin				
		
		 </label>
                  <select class="form-control" name="lab_rutin">	  
<?php echo "<option value='$rowa[lab_rutin]'>$rowa[lab_rutin]</option>";?>	   
							 
<option value='Kurang dari 6 Jam'>Kurang dari 6 Jam</option>
								    <option value='Lebih dari 6 Jam'>Lebih dari 6 Jam</option>
                  </select>
																
                </div>   </div>
               
				
    
                
              

<div class="col-xs-12">
<div class="form-group">
                 
                Kecepatan respon terhadap komplain
                </div>  
	  </div>	
	

<div class="col-xs-3">
<div class="form-group">
                  <label>jam komplain</label>
                 <input type="text" placeholder="" class="form-control" name="lab_jamkomplain" value='<?php echo "$rowa[lab_jamkomplain]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Keterangan</label>
                 <input type="text" placeholder="" class="form-control" name="lab_ket" value='<?php echo "$rowa[lab_ket]";  ?>'>
                </div>   </div>
				
				<div class="col-xs-3">
<div class="form-group">
                  <label>Respon</label>
                 <select class="form-control" name="lab_respon">	  
<?php
echo "
	     <option value='$rowa[lab_respon]'>$rowa[lab_respon]</option>
	   
	   ";

?>
	     <option value='1x24 Jam'>1x24 Jam</option>
                    <option value='3 Hari'>3 Hari</option>
                    <option value='7 Hari'>7 Hari</option>
									 
									 

														
														        </select>
																
                </div>   </div>


				

<div class="col-xs-12">
<div class="form-group">
                 <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             
              </div>
			  
			   </form>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;
  
  
  
  
  
  
 case "gizi":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
			  <li ><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
			  <li ><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li  class="active"><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	

<div class="col-xs-3">
<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
                </div>   </div>

<div class="col-xs-6">
<div class="form-group">
                 
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
              </div>
			  
			   </form>
			   
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		

		
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
	  
    </section>

    <!-- /.content -->
  </div>

    <?php
  
  break;
  
  
  
  
 case "sani":
 
 ?>


<div class="content-wrapper">
   
	 <section class="content">

      <!-- SELECT2 EXAMPLE -->
     

      <div class="row">
  
        <!-- /.col (left) -->
      
		
		
		
		
		<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li ><a href="media.php?module=pasien&act=datapasien&id=<?php echo "$_GET[id]";?>" >PASIEN</a></li>
			  <li><a href="media.php?module=pasien&act=rm&id=<?php echo "$_GET[id]";?>" >REKAM MEDIK</a></li>
              <li><a href="media.php?module=pasien&act=ugd&id=<?php echo "$_GET[id]";?>" >UGD </a></li>
              <li ><a href="media.php?module=pasien&act=rajal&id=<?php echo "$_GET[id]";?>" >RAWAT JALAN</a></li>
			  <li ><a href="media.php?module=pasien&act=ranap&id=<?php echo "$_GET[id]";?>" >RAWAT INAP</a></li>
			  <li ><a href="media.php?module=pasien&act=peri&id=<?php echo "$_GET[id]";?>" >PERINATOLOGI </a></li>
			  <li><a href="media.php?module=pasien&act=lab&id=<?php echo "$_GET[id]";?>" >LABORATORIUM </a></li>
			  <li ><a href="media.php?module=pasien&act=gizi&id=<?php echo "$_GET[id]";?>" >GIZI </a></li>
			  <li class="active"><a href="media.php?module=pasien&act=sani&id=<?php echo "$_GET[id]";?>" >SANITASI </a></li>

			  
            
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
               
			   	<?php										
	


$stmt = $db->query("SELECT * FROM  pasien where id_pasien='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=pasien&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="id_pasien" value="<?php echo $rowa['id_pasien']; ?>"/>

    
	

<div class="col-xs-3">
<div class="form-group">
                  <label>perawat_ruangan</label>
                 <input type="text" placeholder="" class="form-control" name="pr_ruangan" value='<?php echo "$rowa[pr_ruangan]";  ?>'>
                </div>   </div>

<div class="col-xs-3">
<div class="form-group">
                  <label>Bidan_VK</label>
                 <input type="text" placeholder="" class="form-control" name="bidan_vk" value='<?php echo "$rowa[bidan_vk]";  ?>'>
                </div>   </div>

<div class="col-xs-6">
<div class="form-group">
                 
                
                </div>  
	  </div>			
				
		
				
									

			<div class="box-footer">
             <input type="submit" name="submit" class="btn btn-success style2" value="Simpan" />
              </div>
			  
			   </form>
			   
              </div>
              <!-- /.tab-pane -->
            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
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
