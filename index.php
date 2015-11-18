<head>
		<title>I-Quotes</title>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="asset/css/styles.css"/>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.js"/>
		<link type="text/css" rel="stylesheet" href="asset/css/jquery.min.js"/>
</head>

<body>
	<div class="container">
  			<div class="jumbotron">
    		<font face="Comic Sans Ms"><h1>Ilkom  Quotes</h1></font> 
    			<p> Kumpulan Quotes anak anak Fakultas Ilmu Komputer Universitas Sriwijaya </p>
  			</div>
		</div>
		<table class="table " align="center">
		
			<?php
				include "koneksi.php";
				$query = "SELECT * FROM kata";
				$hasil = mysql_query($query);
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr align = 'center'>
				<td > <i> ".$data['Quotes']."
				 <br>- ".$data['Author']."
				</td>
				</tr>
				<tr><td></td></tr>";
			}?>
			<tr>
				<td>
					<a href="submit.php" class="btn btn-success">Submit Quotes</a>
				</td>
			</tr>
		</table>
	</div>
</body>