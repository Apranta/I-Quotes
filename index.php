<html>
	<head>
		<title>I-Quotes</title>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="asset/css/styles.css"/>
		<link type="text/css" rel="stylesheet" href="asset/css/bootstrap.min.js"/>
		<link type="text/css" rel="stylesheet" href="asset/css/jquery.min.js"/>
	</head>
	<body>
		<form role="form" class="form-horizontal" action="" method="GET">
			<h1 align="center"> <font face="Tahoma"> <u>I - Quotes </font></h1>
			<table class="table table-responsive" align="center">
				<tr>
					<td>ilkom Quotes adalah portal yang berisi tentang kumpulan quotes - quotes anak anak fakultas ilmu komputer universitas sriwijaya.
			So, submit your best quotes and don't spam :)
			</td>
				</tr>

				<tr>
					<td></td>
				</tr>

				<tr>
					<td>Author</td>
				</tr>

				<tr>
					<td>
					<input type="text" class="form-control" name="Author" placeholder="Masukan Nama anda" width="10">
					</td>
				</tr>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Quotes</td>
				</tr>
				<tr>	
					<td>
						<textarea class="form-control" name="Quotes"></textarea>
					</td>
				</tr>
				<tr>
					<td align="center">
						<button type="submit" class="btn btn-primary" name="kirim">Submit</button>
					</td>
				</tr>
					<tr>
					<td align="center">
						<button type="kirim" class="btn btn-primary" name="tampil"> <a href="tampil.php" class="">Tampil</a></button>
					</td>
				</tr>
			</table>
		</form>	

		<?php 
		if(isset($_GET['kirim']))
		{
			include"koneksi.php";
			$Author=$_GET['Author'];
			$Quotes=$_GET['Quotes'];
				$insert="insert into kata(Author,Quotes) 
					values('$Author','$Quotes')";
				$insert_query = mysql_query($insert)or die(mysql_error());
				if($insert_query)
				{	
					echo "
					<script>
					alert('Proses Penambahan Berhasil')
					</script>";				
				}
				else{
					echo "
					<script>
					alert('Proses Gagal')
					</script>";
				} 
		}
	?>
	</body>
</html>