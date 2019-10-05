<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel </title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=export data.xls");
	?>

	<center>
		<h2>Tes Online STIE Pontianak</h2>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>NIK</th>
			<th>NAMA</th>
            <th>NILAI TES</th>
            <th>KETERANGAN</th>
		</tr>

<?php
$no='1';		

$usero='1';	

if ($_GET['id']==1)
{
$kete='sudah bayar';
}
else if ($_GET['id']==2)
{
$kete='lulus';
}
else if ($_GET['id']==3)
{
$kete='tidak lulus';
}

$no=1;
$stmt = $db->query("SELECT *
      FROM tbl_user a
        inner join tbl_nilai b
        on a.id_user=b.id_user
        where b.keterangan='$kete'
	 ");
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 
	   ?>
	   <?php
	   echo "
<tr class='gradeX' > 
<td>$no</td>                                                
<td>$data[username]</td>
<td>$data[nama]</td>
<td>$data[score]</td>
<td>$data[keterangan]</td>
</tr>
	 ";
	   $no++;
   }
   
   
			?>
		
	</table>
</body>
</html>