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
        Data Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
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
<th>Nama</th>   
<th>Kelas</th>
<th>Jurusan</th>
<th>Semester</th>   
<th width="10%">Detail</th>   
<th width="10%">Aksi</th>
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td>1111</td>
<td>Andi</td>
<td>Kelas X A</td>
<td>Mesin</td>
<td>1</td>

<?php
echo "
<td><a href='media.php?module=ortu-siswa&act=detail&id=1111'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Detail Siswa</button>
													</a></td>
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
<td>Ani Andini</td>
<td>Kelas X B</td>
<td>Komputer</td>
<td>1</td>
<?php
echo "
<td><a href='media.php?module=ortu-siswa&act=detail&id=1111'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Detail Siswa</button>
													</a></td>
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

 case "detail":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
           <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
	 <!--	 -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Ani</h3>

              <p class="text-muted text-center">Ani Andini</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Kelas</b> <a class="pull-right">X-A</a>
                </li>
                <li class="list-group-item">
                  <b>Semester</b> <a class="pull-right">1</a>
                </li>
                <li class="list-group-item">
                  <b>Jurusan</b> <a class="pull-right">Mesin</a>
                </li>
              </ul>

      
            </div>
            <!-- /.box-body -->
          </div>
		  
		  
		   <div class="box box-primary">
     <div class="box-header with-border">
              <h3 class="box-title">Riwayat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Riwayat Sekolah</strong>

              <p class="text-muted">
               SMP 1 Pontianak
              </p>
			    <p class="text-muted">
               SD 1 Pontianak
              </p>

              <hr>
            <!-- /.box-body -->
          </div>
		    </div>
		  
		  
              </div>
			  
			  
			  <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
           
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body col-md-6">
			  
			  
      <div class="form-group">
                  <label>Kode</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="1111"> 
              
                </div>
				
				
				      <div class="form-group">
                  <label>Nama</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="Ani Andini"> 
              
                </div>
				
				
				    <div class="form-group">
                  <label>Alamat</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="pontianak"> 
              
                </div>
				
				    <div class="form-group">
                  <label>Email</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="ani@gmail.com"> 
              
                </div>
				
				
				    <div class="form-group">
                  <label>Hp</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="0813461313131"> 
              
                </div>
				
				
              </div>
			  
			  <div class="box-body col-md-6">
			  
			  
			  
			  
      <div class="form-group">
                  <label>Nama Ortu/Wali</label>
                 
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="" value="anto">
              
                </div>
				
				
				      <div class="form-group">
                  <label>Alamat</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="pontianak"> 
              
                </div>
				
				
				    <div class="form-group">
                  <label>Hp</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="08132222222"> 
              
                </div>
				
				
				   <div class="form-group">
                  <label>User Ortu/Wali</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="anto"> 
              
                </div>
				
				   <div class="form-group">
                  <label>Password Ortu/Wali</label>
                 
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="anto"> 
              
                </div>
				
		
				
				
				
              </div>
			  
			  
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;


 case "detail1":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Akademik</th>   
<th>Kelas</th>
<th>Jurusan</th>
<th>Semester</th>   
<th width="10%">Detail</th>   
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td>2019/2020</td>
<td>Kelas X A</td>
<td>Mesin</td>
<td>1</td>

<?php
echo "
<td><a href='#'>
													
													<button type='button' class='btn btn-info btn-sm'
                        title='Edit'>
						<i class='fa fa-edit'></i> Detail Nilai</button>
													</a></td>
";
?>

	</tr>			
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  case "detail2":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Senin</th>   
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th> 
<th>Jumat</th>   

                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td></td>
<td>Bahasa Indonesia - 7.00</td>
<td></td>
<td></td>
<td>Bahasa Inggris - 7.00</td>



	</tr>			
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
  



  break;
  
  
  
   case "detail3":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			 
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Bulan</th>   
<th>Hadir</th>
<th>Sakit</th>
<th>Izin</th>       
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td>Januari</td>
<td>24</td>
<td>0</td>
<td>0</td>



	</tr>		

				
                <tr>
     
<td>Februari</td>
<td>24</td>
<td>0</td>
<td>0</td>



	</tr>			
          
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 
   


  break;
  
  
  
   case "detail4":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			 
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  
<th>Nama</th>   
<th>Nilai</th>
<th>Tahun Akademik</th> 
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     
<td>Pramuka</td>
<td>A</td>
<td>2019/2020</td>




	</tr>		

		
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
  break;
  
  
  
   case "detail5":
 
 ?>


<div class="content-wrapper">
      <section class="content-header">
      <h1>
        Data Detail Siswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Siswa</a></li>
    
      </ol>
    </section>
    <section class="content">
      <div class="row">
	      		    
		
		 <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                 <a href='media.php?module=ortu-siswa&act=detail'>   <button type="button" class="btn btn-default pull-left"> Profil</button></a>
			 <a href='media.php?module=ortu-siswa&act=detail1'>  <button type="button" class="btn btn-default pull-left"> Akademik</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail2'> <button type="button" class="btn btn-default pull-left"> Jadwal Mapel</button></a>
			   <a href='media.php?module=ortu-siswa&act=detail3'> <button type="button" class="btn btn-default pull-left"> Kehadiran</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail4'> <button type="button" class="btn btn-default pull-left"> Ekstrakulikuler</button></a>
				 <a href='media.php?module=ortu-siswa&act=detail5'> <button type="button" class="btn btn-default pull-left"> Catatan Wali Kelas</button></a>
				 
				 		
		 
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
            
			  
			  
			  <div class="box table-responsive no-padding">
		  
          
            <!-- /.box-header -->
  	 <div class="box table-responsive no-padding">
               <table  class="table table-bordered table-striped">
			     <div class="box-header">
 	  
			
			    <!-- <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-warning style2'><font color='white'>Tambah </font></button></a>
				 <a href='media.php?module=daftaruser&act=tambah'><button type='button' class='btn btn-info style2'><font color='white'>Tambah </font></button></a> -->

            </div>
                <thead>
                <tr>
     
 	  

<th>Tahun Akademik</th>
 <th>Catatan</th>      
                </tr>
				
				      </thead>
                <tbody>
				
				
                <tr>
     <td>2019/2020</td>
<td>Giatkan lagi pelajaran bahasa indonesia</td>




	</tr>		

		
				
				

	   
          
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
	  
	  
	  
	  
	  
	   <div class="box-footer">
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
        <!-- /.col -->
      </div>
	  
	  
	  
	   
	  
	  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  
  
  
  
  
  
    <?php
 }
 

?>
