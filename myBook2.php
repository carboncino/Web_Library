<!DOCTYPE html>
	<html>
		<head>
			<title>Web Library</title>
			<meta charset="utf-8"/>
			<style type="text/css"></style>
			<link rel="stylesheet" type="text/css" href="skin.css">
		</head>
		<body>
		<div class="conten">
			<div class="header">
			</div>
			<div class="body_sx">
					<ul>
						<li><b><a href="home.html">HOME</a></b></li>
						<li><b><a href="reg.html">REGISTRATI</a></b></li>
						<li><b><a href="myBook.html">MyBook</b></li>
						<li><b><a href="elencoLibri.html">ELENCO LIBRI</a></b></li>
						<li><b><a href="Noleggia.html">NOLEGGIA</a></b></li>
						<li>Contatti</li>
					</ul>
			</div>
			<div class="body_dx">
				<?
					$db_host = "localhost";
					$db_user = "carboneMarco";
					$db_pass = "cardellino543";
					$db_name = "carboneMarco";
					$id_libro = $_POST['ID_libro'];
					if($id_libro!=null)
					{
						$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
						mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');
						
						$query= "UPDATE Libri SET stato='DISPONIBILE' WHERE id ='$id_libro'";

						if(mysql_query($query))
							{
								echo("<br><h2> Restituzione effettuata con successo.</h2>"); 
			
							}
						else{
								echo("<br><h2>OPS!! Qualcosa è andato storto..riprovare.</h2>");
							}
					}else{
							echo"<h2>***ATTENZIONE***<br>Non &egrave stato compilato il campo ID</h2><br>";
								}
				?>	
				<input type="button" onclick="document.location.href='myBook.html';" value="Indietro">
			</div>
		</div>
		</body>
	</html>
