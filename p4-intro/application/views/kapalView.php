<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Intro to Codeigniter 3</title>
	<style>
		table {
			border-collapse: collapse;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		th,
		td {
			padding: 10px;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>

<body>
	<h1>Data Kapal</h1>
	<table border="1">
		<tr>
			<td>Nama Kapal</td>
			<td>GT</td>
			<td>Nama Pemilik</td>
			<td>Kondisi</td>
		</tr>
		<?php foreach ($kapal as $row):?>
		<tr>
			<td><?php echo $row['nama_kapal']?></td>
			<td><?php echo $row['GT']?></td>
			<td><?php echo $row['nama_pemilik']?></td>
			<td><?php echo $row['kondisi']?></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>

</html>