<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Data Kasus Global</h2>

<table border="1">
	
	<tr>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<tr>
		<td><?php echo $globalPos['value']; ?></td>
		<td><?php echo $globalSemb['value']; ?></td>
		<td><?php echo $globalMeni['value']; ?></td>
	</tr>

</table>

<h2>Data Negara Global</h2>

<table border="1">
	
	<tr>
		<th>No</th>
		<th>Negara</th>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<?php 
	$no = 1;
	foreach ($global as $value) { ?>
	
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $value['attributes']['Country_Region']; ?></td>
		<td><?php echo number_format($value['attributes']['Confirmed']); ?></td>
		<td><?php echo number_format($value['attributes']['Recovered']); ?></td>
		<td><?php echo number_format($value['attributes']['Deaths']); ?></td>
	</tr>
	<?php $no++; } ?>
</table>

</body>

<h2>Data Indonesia </h2>

<table border="1">
	
	<tr>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
<?php foreach ($indonesia as $value) { ?>
	
	<tr>
		<td><?php echo $value['positif']; ?></td>
		<td><?php echo $value['sembuh']; ?></td>
		<td><?php echo $value['meninggal']; ?></td>

	</tr>
<?php } ?>
</table>

<h2>Data Kasus <?php echo $singleProvince['provinsi']; ?></h2>

<table border="1">
	
	<tr>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<tr>
		<td><?php echo $singleProvince['positif']; ?></td>
		<td><?php echo $singleProvince['sembuh']; ?></td>
		<td><?php echo $singleProvince['meninggal']; ?></td>
	</tr>

</table>

<h2>Data Provinsi Indonesia</h2>

<table border="1">
	
	<tr>
		<th>No</th>
		<th>Provinsi</th>
		<th>Positif</th>
		<th>Sembuh</th>
		<th>Meninggal</th>
	</tr>
	<?php 
	$no = 1;
	foreach ($provinsi as $value) { ?>
	
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $value['attributes']['Provinsi']; ?></td>
		<td><?php echo number_format($value['attributes']['Kasus_Posi']); ?></td>
		<td><?php echo number_format($value['attributes']['Kasus_Semb']); ?></td>
		<td><?php echo number_format($value['attributes']['Kasus_Meni']); ?></td>
	</tr>
	<?php $no++; } ?>
</table>

</body>
</html>