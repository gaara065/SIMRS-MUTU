<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Grafik</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
   
			<?php 
			
			
			$thn=date("Y");
			
				

$stmt = $db->query("
SELECT count(*) as total 
FROM tbl_user 
where status=0
"
);
$r1 = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db->query("
SELECT count(*) as total 
FROM tbl_user
where keterangan ='lulus'
and status=0 
"
);
$r2 = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $db->query("
SELECT count(*) as total
FROM tbl_user
where keterangan ='tidak lulus'
and status=0 
"
);

$r3 = $stmt->fetch(PDO::FETCH_ASSOC);




$stmt = $db->query("
SELECT count(*) as total 
FROM tbl_user 
where keterangan ='sudah bayar'
and status=0 
"
);
$r4 = $stmt->fetch(PDO::FETCH_ASSOC);

		?>
   
          <section class="content">
	   
	   
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?php echo "$r1[total]"; ?> Pasien</h4>

              <p>Total Pendaftar </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
   
   
   
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo "$r2[total]"; ?> Pasien</h4>

              <p>Total Ranap</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
		
		
		
		        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
          <h4><?php echo "$r3[total]"; ?> Pasien</h4>

              <p>Total Rajal</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
     



      
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
          <h4><?php echo "$r4[total]"; ?> Pasien</h4>

              <p>Total GGG </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
      </div>
	  
	  
	  
	  
	  <?php
	  
	  
	  

$stmt1 = $db->query("
SELECT count(*) as total 
FROM tbl_user 
where status=0
"
);

$a1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$a1 = ($a1['total']);



$stmt1 = $db->query("
SELECT count(*) as total 
FROM tbl_user
where keterangan ='lulus'
and status=0 
"
);

$b1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$b1 = ($b1['total']);




$stmt1 = $db->query("
SELECT count(*) as total 
FROM tbl_user
where keterangan ='Tidak Lulus'
and status=0 
"
);
$c1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$c1 = ($c1['total']);



	  
	  /*

$stmt2 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='2'
"
);

$a2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$a2 = round($a2['rata']);



$stmt2 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='2'
"
);

$b2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$b2 = round($b2['rata']);


$stmt2 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='2'
"
);

$c2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$c2 = round($c2['rata']);



$stmt3 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='3'
"
);

$a3 = $stmt3->fetch(PDO::FETCH_ASSOC);
$a3 = round($a3['rata']);



$stmt3 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='3'
"
);

$b3 = $stmt3->fetch(PDO::FETCH_ASSOC);
$b3 = round($b3['rata']);


$stmt3 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='3'
"
);

$c3 = $stmt3->fetch(PDO::FETCH_ASSOC);
$c3 = round($c3['rata']);



$stmt4 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='4'
"
);

$a4 = $stmt4->fetch(PDO::FETCH_ASSOC);
$a4 = round($a4['rata']);



$stmt4 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='4'
"
);

$b4 = $stmt4->fetch(PDO::FETCH_ASSOC);
$b4 = round($b4['rata']);


$stmt4 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='4'
"
);

$c4 = $stmt4->fetch(PDO::FETCH_ASSOC);
$c4 = round($c4['rata']);



$stmt5 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='5'
"
);

$a5 = $stmt5->fetch(PDO::FETCH_ASSOC);
$a5 = round($a5['rata']);



$stmt5 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='5'
"
);

$b5 = $stmt5->fetch(PDO::FETCH_ASSOC);
$b5 = round($b5['rata']);


$stmt5 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='5'
"
);

$c5 = $stmt5->fetch(PDO::FETCH_ASSOC);
$c5 = round($c5['rata']);



$stmt6 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='6'
"
);

$a6 = $stmt6->fetch(PDO::FETCH_ASSOC);
$a6 = round($a6['rata']);



$stmt6 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='6'
"
);

$b6 = $stmt6->fetch(PDO::FETCH_ASSOC);
$b6 = round($b6['rata']);


$stmt6 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='6'
"
);

$c6 = $stmt6->fetch(PDO::FETCH_ASSOC);
$c6 = round($c6['rata']);


$stmt7 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='7'
"
);

$a7 = $stmt7->fetch(PDO::FETCH_ASSOC);
$a7 = round($a7['rata']);



$stmt7 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='7'
"
);

$b7 = $stmt7->fetch(PDO::FETCH_ASSOC);
$b7 = round($b7['rata']);


$stmt7 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='7'
"
);

$c7 = $stmt7->fetch(PDO::FETCH_ASSOC);
$c7 = round($c7['rata']);


$stmt8 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='8'
"
);

$a8 = $stmt8->fetch(PDO::FETCH_ASSOC);
$a8 = round($a8['rata']);



$stmt8 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='8'
"
);

$b8 = $stmt8->fetch(PDO::FETCH_ASSOC);
$b8 = round($b8['rata']);


$stmt8 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='8'
"
);

$c8 = $stmt8->fetch(PDO::FETCH_ASSOC);
$c8 = round($c8['rata']);


$stmt9 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='9'
"
);

$a9 = $stmt9->fetch(PDO::FETCH_ASSOC);
$a9 = round($a9['rata']);



$stmt9 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='9'
"
);

$b9 = $stmt9->fetch(PDO::FETCH_ASSOC);
$b9 = round($b9['rata']);


$stmt9 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='9'
"
);

$c9 = $stmt9->fetch(PDO::FETCH_ASSOC);
$c9 = round($c9['rata']);


$stmt10 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='10'
"
);

$a10 = $stmt10->fetch(PDO::FETCH_ASSOC);
$a10 = round($a10['rata']);



$stmt10 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='10'
"
);

$b10 = $stmt10->fetch(PDO::FETCH_ASSOC);
$b10 = round($b10['rata']);


$stmt10 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='10'
"
);

$c10 = $stmt10->fetch(PDO::FETCH_ASSOC);
$c10 = round($c10['rata']);


$stmt11 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='11'
"
);

$a11 = $stmt11->fetch(PDO::FETCH_ASSOC);
$a11 = round($a11['rata']);



$stmt11 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='11'
"
);

$b11 = $stmt11->fetch(PDO::FETCH_ASSOC);
$b11 = round($b11['rata']);


$stmt11 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='11'
"
);

$c11 = $stmt11->fetch(PDO::FETCH_ASSOC);
$c11 = round($c11['rata']);


$stmt12 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'X' and a.tahun='$thn' and a.bulan='12'
"
);

$a12 = $stmt12->fetch(PDO::FETCH_ASSOC);
$a12 = round($a12['rata']);



$stmt12 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XI' and a.tahun='$thn' and a.bulan='12'
"
);

$b12 = $stmt12->fetch(PDO::FETCH_ASSOC);
$b12 = round($b12['rata']);


$stmt12 = $db->query("
SELECT avg(presentase) as rata
FROM Pasien_kelas_hadir a
		inner join kelas b
		on a.id_kelas=b.id_kelas
where b.nama= 'XII' and a.tahun='$thn' and a.bulan='12'
"
);

$c12 = $stmt12->fetch(PDO::FETCH_ASSOC);
$c12 = round($c12['rata']);

*/
	  ?>
	  	  <div class="row">

                <canvas id="areaChart" style="height:0px"></canvas>
   
          <!-- /.box -->

          <!-- DONUT CHART -->

          <!-- /.box -->

        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->

          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Persentase Pasien</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
		
									&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#c8691d"></span>	 Total Pendaftar &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#00a65a"></span> Total  &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#4f98c3"></span>  Total &nbsp;&nbsp;&nbsp;
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
	  
	  
	  
	  
	  

        </section><!-- /.content -->	
		
		

<!-- page script -->

    <!-- /.content -->
  </div>
	  
	  
	  
   	<?php 
			
	/*		
			$thn=date("Y");
				$curYear = date('Y');
			
			

$tgla=date('Y-m-01');
$tglb=date('Y-m-32');



$stmt = $db->query("SELECT sum(a.total) as totalall , sum(a.panjar) as totalpanjar, sum(a.sisa) as totalsisa
      FROM transaksi a, toko b
      WHERE (a.tanggal >= '$tgla' and a.tanggal <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_transaksi asc");
$rowtot = $stmt->fetch(PDO::FETCH_ASSOC);	



$stmt2 = $db->query("SELECT sum(a.total_pengeluaran) as totalall 
      FROM pengeluaran a, toko b
      WHERE (a.tanggal_pengeluaran >= '$tgla' and a.tanggal_pengeluaran <= '$tglb') and a.id_toko=b.id_toko
	  ORDER BY  a.id_pengeluaran asc");
	
$rowtot2 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$tut=$rowtot['totalall']-$rowtot2['totalall'];
		?>
		

		

       <section class="content">
	   
	   
	<div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4><?php echo rupiah($rowtot['totalall']); ?></h4>

              <p>Total Kotor <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
		
		
		
   	<?php 
			
			
		
			
			
//$na = "SELECT count(*) as total FROM berkas where YEAR(tanggal)= '$thn'";
//$na = mysql_query($na);
//$na = mysql_fetch_array($na);	



		?>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4><?php echo rupiah($rowtot2['totalall']); ?></h4>

              <p>Total Pengeluaran <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
   	<?php 
			
			
		$bln=date("m");	
			
			
//$na = "SELECT count(*) as total FROM berkas where YEAR(tanggal)= '$thn' AND MONTH(tanggal)= '$bln' ";
//$na = mysql_query($na);
//$na = mysql_fetch_array($na);	



		?>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
          <h4><?php echo rupiah($tut); ?></h4>

              <p>Total Bersih <?php echo "$bulan_ini $thn"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
      </div>
		 
		  
     
	 
	 	  <?php 

		  
		  
$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 01 
	  ");
$a1 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt2 = $db->query("SELECT  COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 01 
	  ");
	
$b1 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$c1=$a1['totalall']-$b1['totalall'];

//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 02 
	  ");
$a2 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt2 = $db->query("SELECT  COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 02 
	  ");
	
$b2 = $stmt2->fetch(PDO::FETCH_ASSOC);	


$c2=$a2['totalall']-$b2['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 03 
	  ");
$a3 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt3 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 03 
	  ");
	
$b3 = $stmt3->fetch(PDO::FETCH_ASSOC);	


$c3=$a3['totalall']-$b3['totalall'];


//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 04 
	  ");
$a4 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt4 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 04 
	  ");
	
$b4 = $stmt4->fetch(PDO::FETCH_ASSOC);	


$c4=$a4['totalall']-$b4['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 05 
	  ");
$a5 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt5 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 05 
	  ");
	
$b5 = $stmt5->fetch(PDO::FETCH_ASSOC);	


$c5=$a5['totalall']-$b5['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 06 
	  ");
$a6 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt6 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 06 
	  ");
	
$b6 = $stmt6->fetch(PDO::FETCH_ASSOC);	


$c6=$a6['totalall']-$b6['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 07 
	  ");
$a7 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt7 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 07 
	  ");
	
$b7 = $stmt7->fetch(PDO::FETCH_ASSOC);	


$c7=$a7['totalall']-$b7['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 08 
	  ");
$a8 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt8 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 08 
	  ");
	
$b8 = $stmt8->fetch(PDO::FETCH_ASSOC);	


$c8=$a8['totalall']-$b8['totalall'];




//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 09 
	  ");
$a9 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt9 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 09 
	  ");
	
$b9 = $stmt9->fetch(PDO::FETCH_ASSOC);	


$c9=$a9['totalall']-$b9['totalall'];



//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 10 
	  ");
$a10 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt10 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 10 
	  ");
	
$b10 = $stmt10->fetch(PDO::FETCH_ASSOC);	


$c10=$a10['totalall']-$b10['totalall'];





//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 11 
	  ");
$a11 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt11 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 11 
	  ");
	
$b11 = $stmt11->fetch(PDO::FETCH_ASSOC);	


$c11=$a11['totalall']-$b11['totalall'];


//--------------------

$stmt = $db->query("SELECT COALESCE(sum(a.total),0)  as totalall
      FROM transaksi a
      WHERE YEAR(a.tanggal) = $curYear AND MONTH(a.tanggal) = 12 
	  ");
$a12 = $stmt->fetch(PDO::FETCH_ASSOC);	


$stmt12 = $db->query("SELECT COALESCE(sum(a.total_pengeluaran),0) as totalall 
      FROM pengeluaran a
      WHERE YEAR(a.tanggal_pengeluaran) = $curYear AND MONTH(a.tanggal_pengeluaran) = 12 
	  ");
	
$b12 = $stmt12->fetch(PDO::FETCH_ASSOC);	


$c12=$a12['totalall']-$b12['totalall'];



?>
	 
	 
	 
	 
	 
	  <div class="row">

                <canvas id="areaChart" style="height:0px"></canvas>
   
          <!-- /.box -->

          <!-- DONUT CHART -->

          <!-- /.box -->

        <!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->

          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Pendapatan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
		
									&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#c8691d"></span>	 Kotor &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#00a65a"></span>   Pengeluaran &nbsp;&nbsp;&nbsp;
<span class='glyphicon glyphicon-stop' style="color:#4f98c3"></span>  Laba &nbsp;&nbsp;&nbsp;
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
	  
	  
	  
	  
	  

        </section><!-- /.content -->	
		
		

<!-- page script -->

    <!-- /.content -->
  </div>
  */
  ?>