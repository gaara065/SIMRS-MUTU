<?php

$a = isset($_GET['module']) ? $_GET['module'] : '';

?> 
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

	  
	  
	  
	  
	  
	  
	  
	  
	  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          			
			
		

<?php
		
if ($_SESSION['namauser']=='')
{	
		
		?>
			
			
			
			
	 <li class="header">Login Admin</li>
		
   <li <?php if ($a=='login'){echo 'class="active"';}  ?>>
              <a href="media.php?module=login">
                <i class="fa fa-group text-red"></i> <span>Login </span> 
              </a></li>    
<?php
}
		
else if  ($_SESSION['namauser']<>'')
{	
		
		?>   

<li class="header">
		
		
		</li>
		
   <li <?php if ($a=='home' or $a==''){echo 'class="active"';}  ?>>
              <a href="media.php?module=home">
                <i class="fa fa-dashboard text-aqua"></i> <span>Dashboard </span> 
              </a>
         </li>    

     
      <li <?php if ($a=='pasien'){echo 'class="active"';}  ?>>
              <a href="media.php?module=pasien">
                <i class="fa fa-table text-aqua"></i> <span>Pasien </span> 
              </a>
         </li> 
		 



       <?php
/*	   



 <li class="treeview <?php if ($a=='rm' or $a=='ugd' or $a=='rajal' or $a=='ranap' or $a=='peri' or $a=='lab'or $a=='gizi' or $a=='sani' or $a=='ugd'){echo 'active';}  ?>">
          <a href="#">
            <i class="fa fa-calendar text-aqua"></i> <span>Unit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="media.php?module=rm"><i class="fa fa-circle-o"></i> UNIT REKAM MEDIS </a></li>    
			<li><a href="media.php?module=ugd"><i class="fa fa-circle-o"></i> UGD </a></li>
			<li><a href="media.php?module=rajal"><i class="fa fa-circle-o"></i> UNIT RAWAT JALAN	</a></li>
			<li><a href="media.php?module=ranap"><i class="fa fa-circle-o"></i> UNIT RAWAT INAP </a></li>
			<li><a href="media.php?module=peri"><i class="fa fa-circle-o"></i> UNIT PERINATOLOGI </a></li>
			<li><a href="media.php?module=lab"><i class="fa fa-circle-o"></i> UNIT LABORATORIUM </a></li>
			<li><a href="media.php?module=gizi"><i class="fa fa-circle-o"></i> UNIT GIZI </a></li>
			<li><a href="media.php?module=sani"><i class="fa fa-circle-o"></i> UNIT SANITASI </a></li>
         </ul>
        </li>
		
		
		<li class="treeview <?php if ($a=='hasil' or $a=='hasilpoltek'){echo 'active';}  ?>">
          <a href="#">
            <i class="fa fa-calendar text-aqua"></i> <span>Hasil Tes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="media.php?module=hasil"><i class="fa fa-circle-o"></i> Hasil STIEP </a></li>    
			<li><a href="media.php?module=hasilpoltek"><i class="fa fa-circle-o"></i> Hasil POLTEK PB </a></li>
         </ul>
        </li>



         <li class="treeview <?php if ($a=='soal' or $a=='kategori' or $a=='excel'){echo 'active';}  ?>">
          <a href="#">
            <i class="fa fa-calendar text-aqua"></i> <span>Kelola Soal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="media.php?module=kategori"><i class="fa fa-circle-o"></i> Kategori </a></li>    
			<li><a href="media.php?module=soal"><i class="fa fa-circle-o"></i> Data Soal </a></li>
      <li><a href="media.php?module=soal&act=soalsalah"><i class="fa fa-circle-o"></i> presentase soal salah </a></li>
      <li><a href="media.php?module=excel"><i class="fa fa-circle-o"></i> import soal </a></li>
          </ul>
        </li>


        <li class="treeview <?php if ($a=='pendaftar'){echo 'active';}  ?>">
          <a href="#">
            <i class="fa fa-calendar text-aqua"></i> <span>Data Pendaftar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="media.php?module=pendaftar"><i class="fa fa-circle-o"></i> Pendaftar STIEP </a></li>    
			<li><a href="media.php?module=pendaftar&act=poltek"><i class="fa fa-circle-o"></i> Pendaftar POLTEK PB </a></li>
         </ul>
        </li>



*/
?>




   

       
   


		
		
		

		
		
 	  		
     
		 <li class="header"> </li>
		
   
			  
			   
      <?php
      
}
      ?>
			  
			  


			
			
		
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>