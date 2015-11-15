<head>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="asset/css/styles.css"/>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.js"/>
		<link type="text/css" rel="stylesheet" href="asset/css/jquery.min.js"/>
	</head>
<div class="container" align="center">
		<h1>Data Quotes</h1>
		<table class="table " align="center">
			<tr>
				<th>No</th>
				<th>Author</th>
				<th>Quotes</th>
				<th>Aksi</th>
			</tr>
			<?php
				include "koneksi.php";
				$query = "SELECT * FROM kata";
				$hasil = mysql_query($query);
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr>
				<td>".$data['No']."</td>
				<td>".$data['Author']."</td>
				<td>".$data['Quotes']."</td>
				<td><a class='btn btn-danger' href=delete.php?id=".$data['No'].">HAPUS</a></td>
				</tr>";
			}?>
		</table>
	</div>