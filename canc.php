<!DOCTYPE html>
	<html>
		<head>
			<title>Web Library</title>
			<meta charset="utf-8"/>
			<style type="text/css"></style>
			<link rel="stylesheet" type="text/css" href="skin.css">
			<script type="text/javascript" src="lib/jquery-2.1.1.js"></script>
		</head>
		<body>
		
		<div class="conten_noleg">
			<div class="header">

			</div>
			<div class="body_sx_noleg">
			<div class="cont_sx_noleg">
						<ul>
						<li><b><a href="home.html">HOME</a></b></li>
						<li><b><a href="reg.html">REGISTRATI</a></b></li>
						<li><b><a href="myBook.html">MyBook</b></li>
						<li><b><a href="elencoLibri.html">ELENCO LIBRI</a></b></li>
						<li><b><a href="Noleggia.html">NOLEGGIA</a></b></li>
						<li><b><a href="admin.html">ADMINISTRATOR</a></b></li>
					</ul>
			</div>
			</div>
			<div class="body_dx_noleg">
				<?
					$db_host = "localhost";
					$db_user = "carboneMarco";
					$db_pass = "cardellino543";
					$db_name = "carboneMarco";
					$ID_delete = $_REQUEST['ID'];

									$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
									mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');
									$query = "DELETE FROM Utenti WHERE id='$ID_delete'";
									
									if(mysql_query($query))
									{
											echo"eliminazione utente completata";
									}
									else{echo"ERROR";}
									
				?>	
				<input type="button" onclick="document.location.href='admin.html';" value="Indietro">
			</div>
		</div>
		</body>
	</html>
