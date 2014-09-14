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
					$nome = $_REQUEST['nome'];
					$cognome = $_REQUEST['cognome'];
					$pass = $_REQUEST['password'];
					$mail = $_REQUEST['mail'];
					$sesso = $_REQUEST['sesso'];
					$id_mod = $_REQUEST['id'];

									$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
									mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');

									if(isset($nome))
										{
											$query = "UPDATE Utenti SET nome='$nome' WHERE id='$id_mod'";
											if(mysql_query($query))
												{
													echo "<br>modifica NOME effettuata<br>";
												}
												else{
														echo "ERRORE";
														}
										}
										if(isset($cognome))
										{
											$query2 = "UPDATE Utenti SET cognome='$cognome' WHERE id='$id_mod'";
											if(mysql_query($query2))
												{
													echo "modifica COGNOME effettuata<br>";
												}
												else{
														echo "ERRORE";
														}
										}
										if(isset($pass))
										{
											$query3 = "UPDATE Utenti SET password='$pass' WHERE id='$id_mod'";
											if(mysql_query($query3))
												{
													echo "modifica PASSWORD effettuata<br>";
												}
												else{
														echo "ERRORE";
														}
										}
										if(isset($mail))
										{
											$query4 = "UPDATE Utenti SET e_mail='$mail' WHERE id='$id_mod'";
											if(mysql_query($query4))
												{
													echo "modifica E_MAIL effettuata<br>";
												}
												else{
														echo "ERRORE";
														}
										}
										if(isset($sesso))
										{
											$query5 = "UPDATE Utenti SET sesso='$sesso' WHERE id='$id_mod'";
											if(mysql_query($query5))
												{
													echo "modifica SESSO effettuata<br>";
												}
												else{
														echo "ERRORE";
														}
										}
									
				?>
				<input type="button" onclick="document.location.href='admin.html';" value="Indietro">
			</div>
		</div>
		</body>
	</html>
