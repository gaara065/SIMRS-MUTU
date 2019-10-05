<?php


$aksi="modul/mod_excel/aksi_excel.php";
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
echo ucwords(" Import soal dari excel ");
?>  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manajemen Aplikasi</a></li>
    
      </ol>
    </section>
	 
    <section class="content">
	    
 
   
      <div class="row">
	  
      <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
       		       <div class="pull-right box-tools">
              
              </div>
            </div>
            <div class="box-body">




<?php
            require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
         

                $nama_kate = "";
                if(isset($Row[0])) {
                    $nama_kate = $Row[0];
                }
$stmt = $db->query("SELECT * FROM  tbl_kategori where kat_nama like '%$nama_kate%'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $soal = "";
                if(isset($Row[1])) {
                    $soal = $Row[1];
                }
                $a = "";
                if(isset($Row[2])) {
                    $a = $Row[2];
                }
                $b = "";
                if(isset($Row[3])) {
                    $b = $Row[3];
                }
                $c = "";
                if(isset($Row[4])) {
                    $c = $Row[4];
                }
                $d = "";
                if(isset($Row[5])) {
                    $d = $Row[5];
                }
                $knc_jawaban = "";
                if(isset($Row[6])) {
                    $knc_jawaban = $Row[6];
                }
                
                if (!empty($nama_kate) || !empty($soal)) {

$stmtb = $db->query("SELECT * FROM  tbl_soal where soal = '$soal'");
$rowb = $stmtb->fetch(PDO::FETCH_ASSOC);

                    if ($nama_kate<>'kategori' and $rowb['id_soal']=='')
                    {
                      $affected_rows = $db->exec("insert into tbl_soal(kategori,soal,a,b,c,d,knc_jawaban) values('".$rowa['kat_id']."','".$soal."','".$a."','".$b."','".$c."','".$d."','".$knc_jawaban."')");
                      
                    }
                    
    
    
                
                    if (! empty($affected_rows)) {
                        $type = "success";
                        $message = "Data Excel berhasil masuk ke database";
                    } else {
                        $type = "error";
                        $message = "ada kesalahan dalam import ke excel";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "gagal";
        $message = "gagal, silahkan upload file excel";
  }
}
?>

<style>    


.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>

  
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Pilih file excel yang berisikan soal</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        <br><br>
        <a href="uploads/test.xlsx">Download contoh excel</a>
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    

  
		
		
		
  
        
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
               <a href='media.php?module=excel'> 
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


<form role="form" method="POST" action='<?php echo"$aksi?module=excel&act=tambah"; ?>' enctype='multipart/form-data'>
	
	

				<div class="form-group">
                  <label>Kategori</label>
                 <input type="text" placeholder="" class="form-control" name="kat_nama" value=''>
                </div>

				<div class="form-group">
                  <label>Limit Soal</label>
                 <input type="text" placeholder="" class="form-control" name="kat_limit" value=''>
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
               <a href='media.php?module=excel'> 
			   <button type="button" class="btn btn-info btn-sm" >
                 Tutup</button>
				</a>
              </div>
            </div>
            <div class="box-body">
              <!-- Date -->
	<?php										
	


$stmt = $db->query("SELECT * FROM  tbl_excel where kat_id='$_GET[id]'");
$rowa = $stmt->fetch(PDO::FETCH_ASSOC);




   ?>					


<form role="form" method="POST" action='<?php echo"$aksi?module=excel&act=ubah"; ?>' enctype='multipart/form-data'>
	
	
	<input type="hidden" name="kat_id" value="<?php echo $rowa['kat_id']; ?>"/>

  <div class="form-group">
                  <label>Kategori</label>
                 <input type="text" placeholder="" class="form-control" name="kat_nama" value='<?php echo "$rowa[kat_nama]";  ?>'>
                </div>

				<div class="form-group">
                  <label>Limit Soal</label>
                 <input type="text" placeholder="" class="form-control" name="kat_limit" value='<?php echo "$rowa[kat_limit]";  ?>'>
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
