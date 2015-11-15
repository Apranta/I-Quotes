<head>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="asset/css/styles.css"/>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.js"/>
		<link type="text/css" rel="stylesheet" href="asset/css/jquery.min.js"/>
</head>

<body>
	<div class="container" align="center">
		<h1>ilkom Quotes</h1>
		<table class="table " align="center">

			<tr align=" center">
				<th>Quotes</th>
			</tr>
			
			<?php
				include "koneksi.php";
				$query = "SELECT * FROM kata";
				$hasil = mysql_query($query);
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr align = 'center'>
				<td> <i> ".$data['Quotes']."
				 <br>- ".$data['Author']."
				</td>
				</tr>
				<tr><td></td></tr>";
			}?>
			
		</table>
	</div>
</body>