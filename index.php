<head>
		<title>I-Quotes</title>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="asset/css/styles.css"/>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.js"/>
		<link type="text/css" rel="stylesheet" href="asset/css/jquery.min.js"/>
</head>

<body>
	<div class="container" align="center">
		<h1>Ilkom - Quotes</h1>
		<table class="table " align="center">
	
			<tr align=" center">
				<th align="left">Quotes</th>
				<th align="right"><button type="submit" class="btn btn-primary" name="kirim"><a href="submit.php" class="">Submit</a></button></th>
			</tr>
		
			<?php
				include "koneksi.php";
				$query = "SELECT * FROM kata";
				$hasil = mysql_query($query);
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr align = 'center'>
				<td colspan = '2'> <i> ".$data['Quotes']."
				 <br>- ".$data['Author']."
				</td>
				</tr>
				<tr><td colspan='2'></td></tr>";
			}?>
			
		</table>
	</div>
</body>